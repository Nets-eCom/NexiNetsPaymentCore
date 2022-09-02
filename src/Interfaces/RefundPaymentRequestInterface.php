<?php

namespace NetsCore\Interfaces;

interface RefundPaymentRequestInterface
{
    public function getPaymentId();
    public function getBodyRequest();

}
