<?php

namespace NexiNetsCore\Dto\Netaxept\Response;

use NexiNetsCore\Dto\Netaxept\Customer\CustomerDto;
use NexiNetsCore\Dto\Netaxept\PaymentDetail;
use NexiNetsCore\Dto\Netaxept\PaymentSummary;
use NexiNetsCore\Dto\Netaxept\PaymentTransactionCollection;
use NexiNetsCore\Interfaces\CustomerInterface;
use Exception;

class PaymentDetailResponseDto
{
    public ?string $currencyCode;
    public ?string $paymentNumber;

    public ?PaymentSummary $summary;
    public ?PaymentDetail $paymentDetails;
    public ?CustomerInterface $customer;
    public ?PaymentTransactionCollection $authorizations;
    public ?PaymentTransactionCollection $refunds;
    public ?PaymentTransactionCollection $captures;

    /**
     * @param $response
     *
     * @return PaymentDetailResponseDto
     * @throws Exception
     */
    public function map($response): PaymentDetailResponseDto
    {
        $body = json_decode($response);
        $this->currencyCode = $body->currencyCode;
        $this->paymentNumber = $body->paymentNumber;
        $this->summary = (new PaymentSummary())->map($body->summary);
        $this->paymentDetails = $body->paymentDetails ? (new PaymentDetail())->map($body->paymentDetails) : null;
        $this->customer = (new CustomerDto())->map($body->customer);
        $this->authorizations = (new PaymentTransactionCollection())->map($body->authorizations);
        $this->refunds = (new PaymentTransactionCollection())->map($body->refunds);
        $this->captures = (new PaymentTransactionCollection())->map($body->captures);

        return $this;
    }

}
