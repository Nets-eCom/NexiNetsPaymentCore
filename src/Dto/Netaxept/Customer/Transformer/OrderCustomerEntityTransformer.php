<?php

namespace NetsCore\Dto\Netaxept\Customer\Transformer;

use NetsCore\Dto\Netaxept\Customer\AddressDto;
use NetsCore\Dto\Netaxept\Customer\CompanyCustomerDto;
use NetsCore\Dto\Netaxept\Customer\IndividualCustomerDto;
use NetsCore\Enums\CustomerTypeEnum;
use NetsCore\Interfaces\CustomerInterface;

class OrderCustomerEntityTransformer extends AbstractCustomerDtoTransformer
{
    /**
     * @param $object
     * @return CustomerInterface
     */
    public function transformFromObject($object): CustomerInterface
    {
        if ($object->getCompany()) {
            $dto = new CompanyCustomerDto();

            $dto->registrationNumber = '';
            $dto->companyName        = $object->getCompany();
            $dto->contactFirstName   = $object->getFirstName();
            $dto->contactLastName    = $object->getLastName();
            $dto->type               = CustomerTypeEnum::COMPANY;
        } else {
            $dto = new IndividualCustomerDto();

            $dto->firstName      = $object->getFirstName();
            $dto->lastName       = $object->getLastName();
            $dto->customerNumber = $object->getCustomerNumber();
            $dto->type           = CustomerTypeEnum::INDIVIDUAL;
        }
        $dto->address = new AddressDto();
        $dto->email = $object->getEmail();

        return $dto;
    }
}
