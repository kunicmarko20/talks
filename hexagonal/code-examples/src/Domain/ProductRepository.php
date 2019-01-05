<?php

interface ProductRepository
{
    public function getProductsFor(Customer $customer): array;
}
