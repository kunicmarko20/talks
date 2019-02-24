<?php

declare(strict_types=1);

namespace Domain;

interface ProductRepository
{
    public function getProductsFor(CustomerId $customerId): array;
}
