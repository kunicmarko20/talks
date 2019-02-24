<?php

declare(strict_types=1);

namespace Domain;

use Infrastructure\MySQL\MySQLProductRepository;

final class InvoiceGenerator
{
    private $productRepository;

    public function __construct(MySQLProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(CustomerId $customerId)
    {
        $products = $this->productRepository->getProductsFor($customerId);

        //...
    }
}



