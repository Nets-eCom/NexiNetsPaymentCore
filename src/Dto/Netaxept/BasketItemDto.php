<?php

namespace NetsCore\Dto\Netaxept;

class BasketItemDto
{
    public string $itemNumber;
    public string $title;
    public int $quantity;
    public int $unitPrice;
    public float $vatPercentage;
    public float $discountPercentage;
    public bool $includesHandling;
    public bool $includesShipping;
    public string $unitCode;
}
