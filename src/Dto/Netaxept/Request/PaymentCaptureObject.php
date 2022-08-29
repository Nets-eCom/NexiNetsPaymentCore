<?php

namespace NetsCore\Dto\Netaxept\Request;

use NetsCore\Interfaces\CapturePaymentInterface;

class PaymentCaptureObject implements CapturePaymentInterface
{
    public string $paymentId;
    public int $amount;
    public string $description;
    public array $basket;

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     */
    public function setPaymentId(string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getBasket(): array
    {
        return $this->basket;
    }

    /**
     * @param array $basket
     */
    public function setBasket(array $basket): void
    {
        $this->basket = $basket;
    }

    public function getData(): array
    {
        return [
            "amount" => $this->getAmount(),
            "description" => $this->getDescription(),
            "basket" => $this->getBasket()
        ];
    }
}
