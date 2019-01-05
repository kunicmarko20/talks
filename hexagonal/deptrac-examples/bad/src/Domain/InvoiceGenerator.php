<?php

namespace Domain;

use Infrastructure\MySQL\MySQLProductRepository;

class InvoiceGenerator
{
    private $productRepository;

    public function __construct(MySQLProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(Customer $customer)
    {
        $products = $this->productRepository->getProductsFor($customer);

        //do your invoice logic
    }
}



