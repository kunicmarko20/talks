<?php

declare(strict_types=1);

namespace Domain;

final class Product
{
    private $customerId;

    public function __construct(CustomerId $customerId /* ... */)
    {
        $this->customerId = $customerId;

        //...
    }

    //...

    public function customerId(): CustomerId
    {
        return $this->customerId;
    }
}
