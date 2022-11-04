<?php

namespace NetsCore\Services;

use NetsCore\Dto\Netaxept\Response\AuthorizePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CancelPaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NetsCore\Dto\Netaxept\Response\RefundPaymentResponseDto;
use NetsCore\Enums\ExceptionEnum;
use NetsCore\Exceptions\ApiResponseException;
use NetsCore\Exceptions\CapturePaymentException;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Interfaces\PaymentRequestInterface;
use NetsCore\Validator\CapturePaymentValidator;

class NetaxeptSandboxService implements ClientServiceInterface
{
    private APIClientInterface $apiClient;

    /**
     * @param APIClientInterface $apiClient
     */
    public function __construct(APIClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param PaymentObjectInterface $paymentObject
     *
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject): CreatePaymentResponseDto
    {
        $response = $this->apiClient->createPayment($paymentObject);

        return (new CreatePaymentResponseDto())->map($response);
    }

    /**
     * @param string $paymentId
     *
     * @return PaymentDetailResponseDto
     * @throws \Exception
     */
    public function getPaymentDetails(string $paymentId): PaymentDetailResponseDto
    {
        $response = $this->apiClient->getPaymentDetails($paymentId);

        return (new PaymentDetailResponseDto())->map($response);
    }

    /**
     * @param PaymentRequestInterface $paymentObject
     *
     * @return CancelPaymentResponseDto
     */
    public function cancelPayment(PaymentRequestInterface $paymentObject): CancelPaymentResponseDto
    {
        $response = $this->apiClient->cancelPayment($paymentObject);

        return (new CancelPaymentResponseDto())->map($response);
    }

    /**
     * @throws ApiResponseException
     */
    public function authorizePayment(PaymentRequestInterface $authorizationObject): AuthorizePaymentResponseDto
    {
        try {
            $response = $this->apiClient->authorizePayment($authorizationObject);
        } catch (ApiResponseException $e) {
            throw new ApiResponseException();
        }

        return (new AuthorizePaymentResponseDto())->map($response);
    }

    /**
     * @throws CapturePaymentException
     * @throws ApiResponseException
     */
    public function capturePayment(PaymentRequestInterface $capturePayment): CapturePaymentResponseDto
    {
        try {
            $response = $this->apiClient->capturePayment($capturePayment);
        } catch (ApiResponseException $e) {
            throw new ApiResponseException();
        }
        $capturePaymentResponse = (new CapturePaymentResponseDto())->map($response);
        if ( ! CapturePaymentValidator::validate($capturePaymentResponse)) {
            throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, 500);
        }

        return $capturePaymentResponse;
    }

    /**
     * @param PaymentRequestInterface $refundObject
     *
     * @return RefundPaymentResponseDto
     */
    public function refundPayment(PaymentRequestInterface $refundObject): RefundPaymentResponseDto
    {
        $response = $this->apiClient->refundPayment($refundObject);

        return (new RefundPaymentResponseDto())->map($response);
    }

    public function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
