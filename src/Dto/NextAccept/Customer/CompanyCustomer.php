<?php

namespace NetsCore\Dto\NextAccept\Customer;

use NetsCore\Interfaces\CustomerInterface;

class CompanyCustomer implements CustomerInterface
{
    public string $registrationNumber;
    public string $companyName;
    public string $contactFirstName;
    public string $contactLastName;
    public string $type;
    public Address $address;
    public string $email;
    public string $phone;

    public function getCustomerInformation(): object
    {
        return (object) [
            'registrationNumber' => $this->registrationNumber,
            'companyName' => $this->companyName,
            'contactFirstName' => $this->contactFirstName,
            'contactLastName' => $this->contactLastName,
            'type' => $this->type,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}