<?php

namespace NetsCore\Services;

use NetsCore\Dto\NextAccept\Response\CancelPaymentResponseDto;
use NetsCore\Dto\NextAccept\Response\CapturePaymentResponseDto;
use NetsCore\Dto\NextAccept\Response\CreatePaymentResponseDto;
use NetsCore\Enums\ExceptionEnum;
use NetsCore\Exception\CapturePaymentException;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\CapturePaymentInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Validator\CapturePaymentValidator;

class NextAcceptService implements ClientServiceInterface
{
    private APIClientInterface $apiClient;

    /**
     * @param  APIClientInterface  $apiClient
     */
    public function __construct(APIClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject): CreatePaymentResponseDto
    {
        $response = $this->apiClient->createPayment($paymentObject);
        return (new CreatePaymentResponseDto())->map($response);
    }

    public function getPaymentDetails()
    {
        // TODO: Implement getPaymentDetails() method.
    }

    public function cancelPayment(PaymentObjectInterface $paymentObject): CancelPaymentResponseDto
    {
        // TODO: Implement cancelPayment() method.
        $response = $this->apiClient->cancelPayment($paymentObject);
        return (new CancelPaymentResponseDto())->map($response);
    }

    public function authorizePayment()
    {
        // TODO: Implement authorizePayment() method.
    }

    /**
     * @throws CapturePaymentException
     */
    public function capturePayment(CapturePaymentInterface $capturePayment): CapturePaymentResponseDto
    {
        $response = $this->apiClient->capturePayment($capturePayment);
        $capturePaymentResponse = (new CapturePaymentResponseDto())->map($response);
        if(!CapturePaymentValidator::validate($capturePaymentResponse)) {
            throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, 500);
        }
        return $capturePaymentResponse;
    }

    public function refundPayment()
    {
        // TODO: Implement refundPayment() method.
    }

    public function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
