<?php

declare(strict_types=1);

namespace Domain;

final class InvoiceGenerator
{
    private $productRepository;

    public function __construct(Products $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(CustomerId $customerId)
    {
        $products = $this->productRepository->getProductsFor($customerId);

        //...
    }
}



