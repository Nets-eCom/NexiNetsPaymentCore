<?php

namespace NetsCore\Dto\NextAccept\Customer;

class IndividualCustomer
{
    public string $firstName;
    public string $lastName;
    public string $type;
    public string $customerNumber;
    public Address $address;
    public string $email;
    public string $phone;
}