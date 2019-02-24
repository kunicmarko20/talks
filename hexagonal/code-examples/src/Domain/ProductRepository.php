<?php

declare(strict_types=1);

interface ProductRepository
{
    public function getProductsFor(CustomerId $customerId): array;
}


