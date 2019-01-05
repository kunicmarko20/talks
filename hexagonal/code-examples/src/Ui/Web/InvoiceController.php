<?php

class InvoiceController
{
    private $invoiceGenerator;

    public function __construct(InvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function generateAction(int $id)
    {
        $this->invoiceGenerator->generateFor(new Customer($id));

        //return some response
    }
}



