<?php

namespace NetsCore\Validator;

use NetsCore\Dto\NextAccept\Response\CapturePaymentResponseDto;
use NetsCore\Enums\ExceptionEnum;
use NetsCore\Exception\CapturePaymentException;

class CapturePaymentValidator
{
    /**
     * @throws CapturePaymentException
     */
    public static function validate(CapturePaymentResponseDto $responseDto): bool
    {
        if(isset($responseDto->paymentId)) {
            return true;
        }

        if(!isset($responseDto->status)){
            throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, 500);
        }

        switch ($responseDto->status) {
            case 400:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_BAD_REQUEST, $responseDto->status);
            case 422:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CLIENT_ERROR, $responseDto->status);
            default:
                throw new CapturePaymentException(ExceptionEnum::CAPTURE_PAYMENT_CRITICAL_ERROR, json_encode($responseDto->problems), $responseDto->status);
        }
    }
}