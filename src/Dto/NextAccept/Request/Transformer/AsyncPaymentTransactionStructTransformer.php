<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use Exception;
use NetsCore\Dto\NextAccept\BasketItem;
use NetsCore\Dto\NextAccept\Customer\Address;
use NetsCore\Dto\NextAccept\Customer\Transformer\OrderCustomerEntityTransformer;
use NetsCore\Dto\NextAccept\Request\CreatePaymentRequest;
use NetsCore\Dto\NextAccept\Request\Transfomer\AbstractRequestDtoTransformer;
use NetsCore\Enums\CountryCode;
use Shopware\Core\Checkout\Payment\Cart\AsyncPaymentTransactionStruct;
use Shopware\Core\Checkout\Payment\Exception\AsyncPaymentProcessException;


class AsyncPaymentTransactionStructTransformer extends AbstractRequestDtoTransformer
{

    /**
     * @param AsyncPaymentTransactionStruct $object
     *
     * @return CreatePaymentRequest
     * @throws AsyncPaymentProcessException|Exception if the provided currency code is not valid
     *
     */
    public function transformFromObject($object
    ): CreatePaymentRequest {
        $dto = new CreatePaymentRequest();

        $dto->orderNumber = $object->getOrder()->getOrderNumber();

        $amount      = $object->getOrderTransaction()->getAmount();
        $dto->amount = ceil($amount * 100);

        try {
            $dto->currencyCode = $dto->validated_currency_code(
                $object->getOrder()->getCurrencyId()
            );
        } catch (Exception $e) {
            throw new AsyncPaymentProcessException(
                $object->getOrderTransaction()->getId(),
                'Wrong currency code'
            );
        }

        $dto->redirectUrls->returnUrl = $object->getReturnUrl();

        $customerTransformer         = new OrderCustomerEntityTransformer();
        $dto->customer               = $customerTransformer->transformFromObject(
            $object->getOrder()->getOrderCustomer()
        );
        $customerAddress             = new Address();
        $fetchedAddress              = $object->getOrder()->getBillingAddress();
        $dto->customer->phone        = $fetchedAddress->getPhoneNumber();
        $customerAddress->address1   = $fetchedAddress->getStreet();
        $customerAddress->city       = $fetchedAddress->getCity();
        $customerAddress->postalCode = $fetchedAddress->getZipcode();
        $countryCode                 = $fetchedAddress->getCountry()->getIso();
        if (CountryCode::isValid($countryCode)) {
            $customerAddress->countryCode = $countryCode;
        } else {
            throw new AsyncPaymentProcessException(
                $object->getOrderTransaction()->getId(),
                'Wrong country code'
            );
        }
        $customerAddress->countryCode = $fetchedAddress->getCountry()->getIso();
        $dto->customer->address       = $customerAddress;

        $dto->basket = [];

        $basketItems = $object->getOrder()->getLineItems();
        foreach ($basketItems as $key => $basketItem) {
            $item                = new BasketItem();
            $item->itemNumber    = $basketItem->getProductId();
            $item->title         = $basketItem->getLabel();
            $item->quantity      = $basketItem->getQuantity();
            $item->unitPrice     = $basketItem->getUnitPrice();
            $taxRule             = $basketItem->getPrice()->getTaxRules()->getElements();
            $taxRule             = $taxRule[array_key_first($taxRule)];
            $taxRate             = $taxRule['taxRate'] * $taxRule['percentage'] / 100;
            $item->vatPercentage = $taxRate;
            $item->unitCode      = $key;

            $dto->basket[] = $item;
        }

        return $dto;
    }

}
