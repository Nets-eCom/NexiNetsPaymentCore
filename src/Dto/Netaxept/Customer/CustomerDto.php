<?php

namespace NetsCore\Dto\Netaxept\Customer;

use NetsCore\Interfaces\CustomerInterface;

class CustomerDto implements CustomerInterface
{
    public ?string $firstName;
    public ?string $lastName;
    public ?string $type;
    public ?string $customerNumber;
    public ?AddressDto $address;
    public ?string $email;
    public ?string $phone;

    public function map($stdClass): CustomerDto
    {
        $this->firstName = $stdClass->firstName;
        $this->lastName = $stdClass->lastName;
        $this->type = $stdClass->type;
        $this->customerNumber = $stdClass->customerNumber;
        $this->address = (new AddressDto())->map($stdClass->address);
        $this->email = $stdClass->email;
        $this->phone = $stdClass->phone;

        return $this;
    }
}