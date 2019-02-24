<?php

declare(strict_types=1);

final class GenerateInvoiceCommand
{
    private $invoiceGenerator;

    public function __construct(InvoiceGenerator $invoiceGenerator)
    {
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function execute(InputInterface $input)
    {
        $this->invoiceGenerator->generateFor(
            new CustomerId(
                $input->getArgument('id')
            )
        );

        //...
    }
}



