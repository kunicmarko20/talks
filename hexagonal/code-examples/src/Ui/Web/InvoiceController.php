<?php

declare(strict_types=1);

final class InvoiceController
{
    private $invoiceGenerator;

    public function __construct(InvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function generateAction(string $id)
    {
        $this->invoiceGenerator->generateFor(new CustomerId($id));

        //...
    }
}



