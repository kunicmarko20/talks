<?php

declare(strict_types=1);

final class InvoiceGenerator
{
    private $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function generateFor(CustomerId $customerId)
    {
        $products = $this->products->belongingTo($customerId);

        //...
    }
}



