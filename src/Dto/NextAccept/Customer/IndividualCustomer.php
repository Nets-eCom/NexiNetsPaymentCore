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
}