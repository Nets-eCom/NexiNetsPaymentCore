<?php

namespace NetsCore\Dto\NextAccept\Request;

use NetsCore\Dto\NextAccept\BasketItem;
use NetsCore\Dto\NextAccept\Customer\CompanyCustomer;
use NetsCore\Dto\NextAccept\Customer\IndividualCustomer;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\InitialPaymentMethodTokenizationDetails;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\MerchantInitiatedPaymentWithToken;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\PaymentWithToken;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\SepaDirectDepositTypeA;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\SepaDirectDepositTypeC;
use NetsCore\Dto\NextAccept\PaymentMethodDetails\Sofort;
use NetsCore\Dto\NextAccept\PayPageConfiguration;

class CreatePaymentRequest
{
    public string $type;
    public string $orderNumber;
    public string $orderDescription;
    public string $reconciliationReference;
    public int $amount;
    public string $currencyCode;
    /**
     * @var InitialPaymentMethodTokenizationDetails | MerchantInitiatedPaymentWithToken | PaymentWithToken | SepaDirectDepositTypeC | SepaDirectDepositTypeA | Sofort | object
     */
    public object $paymentMethodDetails;
    public string $processing;
    /**
     * @var object | IndividualCustomer | CompanyCustomer
     */
    public object $customer;
    /**
     * @var BasketItem[]
     */
    public array $basket;

    public PayPageConfiguration $payPageConfiguration;
    public string $description;
}