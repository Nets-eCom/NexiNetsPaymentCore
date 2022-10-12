<?php

namespace NetsCore\Dto\Netaxept\Request\Transformer;

use Exception;
use NetsCore\Dto\Netaxept\BasketItemDto;
use NetsCore\Dto\Netaxept\Customer\AddressDto;
use NetsCore\Dto\Netaxept\Customer\Transformer\OrderCustomerEntityTransformer;
use NetsCore\Dto\Netaxept\RedirectUrlDto;
use NetsCore\Dto\Netaxept\Request\PaymentObject;
use NetsCore\Enums\PaymentProcessingTypeEnum;
use NetsCore\Enums\PaymentTypeEnum;

class AsyncPaymentTransactionStructTransformer extends AbstractRequestDtoTransformer
{
    /**
     * @param object $object
     *
     * @return PaymentObject
     *
     */
    public function transformFromObject($object): PaymentObject
    {
        $dto = new PaymentObject();

        $dto->paymentNumber = $object->getOrder()->getOrderNumber();

        $amount      = $object->getOrderTransaction()->getAmount()->getTotalPrice();
        $dto->amount = ceil($amount * 100);
        $dto->type   = PaymentTypeEnum::NETS_HOSTED_ECOM;

        $currencyCode      = $object->getOrder()->getCurrency()->getIsoCode();
        $dto->currencyCode = $currencyCode;

        $dto->processing = PaymentProcessingTypeEnum::NONE;

        $dto->redirectUrls            = new RedirectUrlDto();
        $dto->redirectUrls->returnUrl = $object->getReturnUrl();

        $customerTransformer          = new OrderCustomerEntityTransformer();
        $dto->customer                = $customerTransformer->transformFromObject(
            $object->getOrder()->getOrderCustomer()
        );
        $customerAddress              = new AddressDto();
        $fetchedAddress               = $object->getOrder()->getBillingAddress();
        $dto->customer->phone         = $fetchedAddress->getPhoneNumber() ?? '';
        $customerAddress->address1    = $fetchedAddress->getStreet();
        $customerAddress->city        = $fetchedAddress->getCity();
        $customerAddress->postalCode  = $fetchedAddress->getZipcode();
        $countryCode                  = $fetchedAddress->getCountry()->getIso();
        $customerAddress->countryCode = $countryCode;

        $customerAddress->countryCode = $fetchedAddress->getCountry()->getIso();
        $dto->customer->address       = $customerAddress;

        $dto->basket = [];

        $basketItems = $object->getOrder()->getLineItems();
        $unitCode    = 0;
        foreach ($basketItems as $basketItem) {
            $item                = new BasketItemDto();
            $item->itemNumber    = $basketItem->getProductId();
            $item->title         = $basketItem->getLabel();
            $item->quantity      = $basketItem->getQuantity();
            $unitPrice           = $basketItem->getUnitPrice();
            $item->unitPrice     = ceil($unitPrice * 100);
            $taxRule             = $basketItem->getPrice()->getTaxRules()->getElements();
            $taxRule             = $taxRule[array_key_first($taxRule)];
            $taxRate             = $taxRule->getTaxRate() * $taxRule->getPercentage() / 100;
            $item->vatPercentage = $taxRate;
            $item->unitCode      = $unitCode;
            $unitCode++;

            $dto->basket[] = $item;
        }

        return $dto;
    }
}
