<?php

declare(strict_types=1);

final class InMemoryProductRepository implements ProductRepository
{
    /**
     * @var Product[]
     */
    private $products;

    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    public function getProductsFor(CustomerId $customerId): array
    {
        $products = [];

        foreach ($this->products as $product) {
            if ($customerId->equals($product->customerId())) {
                $products[] = $product;
            }
        }

        return $products;
    }
}



