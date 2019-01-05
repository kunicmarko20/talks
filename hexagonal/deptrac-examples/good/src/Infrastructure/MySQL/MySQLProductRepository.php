<?php

class MySQLProductRepository implements ProductRepository
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getProductsFor(Customer $customer): array
    {
        $statement = $this->connection->prepare(
            <<<SQL
SELECT * 
FROM products
WHERE customer_id = :customer_id
SQL
        );

        $statement->bindValue('customer_id', $customer->id(), \PDO::PARAM_INT);

        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}


