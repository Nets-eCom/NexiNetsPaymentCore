<?php

namespace NetsCore\Dto\NextAccept\Customer;

use NetsCore\Interfaces\CustomerInterface;

class IndividualCustomer implements CustomerInterface
{
    public string $firstName;
    public string $lastName;
    public string $type;
    public string $customerNumber;
    public Address $address;
    public string $email;
    public string $phone;

    public function getCustomerInformation(): object
    {
        return (object) [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'type' => $this->type,
            'customerNumber' => $this->customerNumber,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}