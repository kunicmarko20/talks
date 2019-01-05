<?php

class InMemoryProductRepository implements ProductRepository
{
    private $products;

    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    public function getProductsFor(Customer $customer): array
    {
        return $this->products[$customer->id()];
    }
}


