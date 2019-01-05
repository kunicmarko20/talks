<?php

class InvoiceGenerator
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function generateFor(Customer $customer)
    {
        $products = $this->productRepository->getProductsFor($customer);

        //do your invoice logic
    }
}



