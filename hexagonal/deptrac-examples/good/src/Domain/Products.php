<?php

declare(strict_types=1);

namespace Domain;

interface Products
{
    public function getProductsFor(CustomerId $customerId): array;
}
