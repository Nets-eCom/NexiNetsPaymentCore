<?php

namespace NetsCore\Services;

use NetsCore\Dto\Netaxept\Response\RefundPaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CancelPaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Enums\ExceptionEnum;
use NetsCore\Exceptions\CapturePaymentException;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\AuthorizePaymentRequestInterface;
use NetsCore\Interfaces\CapturePaymentInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Interfaces\RefundPaymentRequestInterface;
use NetsCore\Validator\CapturePaymentValidator;

class NetaxeptService implements ClientServiceInterface
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
        $response = $this->apiClient->cancelPayment($paymentObject);
        return (new CancelPaymentResponseDto())->map($response);
    }

    public function authorizePayment(AuthorizePaymentRequestInterface $authorizationObject)
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
        if (!CapturePaymentValidator::validate($capturePaymentResponse)) {
            throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, 500);
        }
        return $capturePaymentResponse;
    }

    /**
     * @param RefundPaymentRequestInterface $refundObject
     *
     * @return RefundPaymentResponseDto
     */
    public function refundPayment(RefundPaymentRequestInterface $refundObject):RefundPaymentResponseDto
    {
        $response = $this->apiClient->refundPayment($refundObject);
        return (new RefundPaymentResponseDto())->map($response);
    }

    public function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
