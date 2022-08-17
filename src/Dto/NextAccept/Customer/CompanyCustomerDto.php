<?php

namespace NetsCore\Dto\NextAccept\Customer;

use NetsCore\Interfaces\CustomerInterface;

class CompanyCustomerDto implements CustomerInterface
{
    public string $registrationNumber;
    public string $companyName;
    public string $contactFirstName;
    public string $contactLastName;
    public string $type;
    public AddressDto $address;
    public string $email;
    public string $phone;
}