<?php

namespace NetsCore\Interfaces;

interface PaymentObjectInterface
{
    /**
     * @param string $language
     *
     * @return mixed
     */
    public function setLanguage(string $language);
}
