<?php

namespace NexiNetsCore\Dto\Netaxept\Customer;

class AddressDto
{
    public string $address1;
    public ?string $address2;
    public string $city;
    public string $postalCode;
    public string $countryCode;

    /**
     * @param $stdClass
     *
     * @return $this
     */
    public function map($stdClass): AddressDto
    {
        $this->address1 = $stdClass->address1;
        $this->address2 = $stdClass->address2;
        $this->city = $stdClass->city;
        $this->postalCode = $stdClass->postalCode;
        $this->countryCode = $stdClass->countryCode;

        return $this;
    }
}
