<?php

namespace NetsCore\Interfaces;

interface CapturePaymentInterface
{
    /**
     * @return mixed
     */
    public function getPaymentId();

    /**
     * @param string $paymentId
     *
     * @return mixed
     */
    public function setPaymentId(string $paymentId);

    /**
     * @return mixed
     */
    public function getAmount();

    /**
     * @param int $amount
     *
     * @return mixed
     */
    public function setAmount(int $amount);

    /**
     * @return mixed
     */
    public function getDescription();

    /**
     * @param string $description
     *
     * @return mixed
     */
    public function setDescription(string $description);

    /**
     * @return mixed
     */
    public function getBasket();

    /**
     * @param array $basket
     *
     * @return mixed
     */
    public function setBasket(array $basket);

    /**
     * @return mixed
     */
    public function getData();
}
