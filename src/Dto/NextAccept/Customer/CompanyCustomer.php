<?php

namespace NetsCore\Dto\NextAccept\Customer;

class CompanyCustomer
{
    public string $registrationNumber;
    public string $companyName;
    public string $contactFirstName;
    public string $contactLastName;
    public string $type;
    public Address $address;
    public string $email;
    public string $phone;
}