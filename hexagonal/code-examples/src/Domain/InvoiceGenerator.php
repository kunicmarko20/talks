<?php

declare(strict_types=1);

final class InvoiceGenerator
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(CustomerId $customerId)
    {
        $products = $this->productRepository->getProductsFor($customerId);

        //...
    }
}



