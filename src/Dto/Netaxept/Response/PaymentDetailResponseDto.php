<?php

namespace NetsCore\Dto\Netaxept\Response;

use NetsCore\Dto\Netaxept\Customer\CustomerDto;
use NetsCore\Dto\Netaxept\PaymentDetail;
use NetsCore\Dto\Netaxept\PaymentSummary;
use NetsCore\Dto\Netaxept\PaymentTransaction;
use NetsCore\Interfaces\CustomerInterface;

class PaymentDetailResponseDto
{
    public ?string $currencyCode;
    public ?string $orderNumber;
    public ?string $terminalId;

    public ?PaymentSummary $summary;
    public ?PaymentDetail $paymentDetails;
    public ?CustomerInterface $customer;
    public ?PaymentTransaction $authorizations;
    public ?PaymentTransaction $refunds;
    public ?PaymentTransaction $captures;

    public function map($response): PaymentDetailResponseDto
    {
        $body = json_decode($response);
        $this->currencyCode = $body->currencyCode;
        $this->orderNumber = $body->orderNumber;
        $this->terminalId = $body->terminalId;
        $this->summary = (new PaymentSummary())->map($body->summary);
        $this->paymentDetails = $body->paymentDetails ? (new PaymentDetail())->map($body->paymentDetails) : null;
        $this->customer = (new CustomerDto())->map($body->customer);
        $this->authorizations = (new PaymentTransaction())->map($body->authorizations);
        $this->refunds = (new PaymentTransaction())->map($body->refunds);
        $this->captures = (new PaymentTransaction())->map($body->captures);
        return $this;
    }

}