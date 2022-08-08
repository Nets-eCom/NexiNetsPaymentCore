<?php

namespace NetsCore\Dto\NextAccept\Customer\Transformer;


use NetsCore\Dto\NextAccept\Customer\Address;
use NetsCore\Dto\NextAccept\Customer\CompanyCustomer;
use NetsCore\Dto\NextAccept\Customer\IndividualCustomer;
use NetsCore\Enums\CustomerType;
use NetsCore\Interfaces\CustomerInterface;

class OrderCustomerEntityTransformer extends AbstractCustomerDtoTransformer
{
    public function transformFromObject($object): CustomerInterface
    {
        if ($object->getCompany()) {
            $dto = new CompanyCustomer();

            $dto->registrationNumber = '';
            $dto->companyName        = $object->getCompany();
            $dto->contactFirstName   = $object->getFirstName();
            $dto->contactLastName    = $object->getLastName();
            $dto->type               = CustomerType::Company;
        } else {
            $dto = new IndividualCustomer();

            $dto->firstName      = $object->getFirstName();
            $dto->lastName       = $object->getLastName();
            $dto->customerNumber = $object->getCustomerNumber();
            $dto->type           = CustomerType::Individual;
        }
        $dto->address = new Address();
        $dto->email = $object->getEmail();

        return $dto;
    }
}