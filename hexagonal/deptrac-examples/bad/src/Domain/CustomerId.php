<?php

declare(strict_types=1);

namespace Domain;

final class CustomerId
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function equals(CustomerId $customerId): bool
    {
        return $this->id === $customerId->id;
    }

    public function toString(): string
    {
        return $this->id;
    }
}
