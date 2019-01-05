<?php

class GenerateInvoiceCommand
{
    private $invoiceGenerator;

    public function __construct(InvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function execute(InputInterface $input)
    {
        $this->invoiceGenerator->generateFor(
            new Customer(
                $input->getArgument('id')
            )
        );
    }
}



