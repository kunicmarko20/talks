<?php

declare(strict_types=1);

interface Products
{
    public function belongingTo(CustomerId $customerId): array;
}
