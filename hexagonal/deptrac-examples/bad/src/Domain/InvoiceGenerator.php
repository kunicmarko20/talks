<?php

declare(strict_types=1);

namespace Domain;

use Infrastructure\MySQL\MySQLProducts;

final class InvoiceGenerator
{
    private $productRepository;

    public function __construct(MySQLProducts $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(CustomerId $customerId)
    {
        $products = $this->productRepository->getProductsFor($customerId);

        //...
    }
}



