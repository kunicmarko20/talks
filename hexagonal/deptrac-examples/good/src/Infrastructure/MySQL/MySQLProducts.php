<?php

declare(strict_types=1);

namespace Infrastructure\MySQL;

use Domain\CustomerId;
use Domain\Products;

final class MySQLProducts implements Products
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getProductsFor(CustomerId $customerId): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
SELECT * 
FROM products
WHERE customer_id = :customer_id
SQL
        );

        $statement->bindValue('customer_id', $customerId->toString());

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}


