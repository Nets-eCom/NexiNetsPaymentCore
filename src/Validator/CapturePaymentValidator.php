<?php

namespace NexiNetsCore\Validator;

use NexiNetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NexiNetsCore\Enums\ExceptionEnum;
use NexiNetsCore\Exceptions\CapturePaymentException;

class CapturePaymentValidator
{
    /**
     * @param CapturePaymentResponseDto $responseDto
     *
     * @return bool
     * @throws CapturePaymentException
     */
    public static function validate(CapturePaymentResponseDto $responseDto): bool
    {
        if (isset($responseDto->paymentId)) {
            return true;
        }

        if (!isset($responseDto->status)) {
            throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, 500);
        }

        switch ($responseDto->status) {
            case 400:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_BAD_REQUEST, $responseDto->status, json_encode($responseDto->problems ?: []));
            case 422:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CLIENT_ERROR, $responseDto->status, json_encode($responseDto->problems ?: []));
            default:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, $responseDto->status, json_encode($responseDto->problems ?: []));
        }
    }
}
