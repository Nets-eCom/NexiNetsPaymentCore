<?php

namespace NetsCore\Interfaces;

interface CapturePaymentInterface
{
    public function getPaymentId();
    public function setPaymentId(string $paymentId);
    public function getAmount();
    public function setAmount(int $amount);
    public function getDescription();
    public function setDescription(string $description);
    public function getBasket();
    public function setBasket(array $basket);
    public function getData();
}
