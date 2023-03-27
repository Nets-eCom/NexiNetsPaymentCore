<?php

namespace NexiNetsCore\Dto\Netaxept\Customer;

use NexiNetsCore\Interfaces\CustomerInterface;

class IndividualCustomerDto implements CustomerInterface
{
    public string $firstName;
    public string $lastName;
    public string $type;
    public string $customerNumber;
    public AddressDto $address;
    public string $email;
    public string $phone;
}
