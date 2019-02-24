<?php

declare(strict_types=1);

final class InvoiceGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /** @var InvoiceGenerator */
    private $invoiceGenerator;
    /** @var ProductRepository */
    private $productRepository;

    /** @test */
    public function it_generates_an_invoice_for_a_customer(): void
    {
        //...
    }

    public function setUp(): void
    {
        $this->productRepository = new InMemoryProductRepository([/* some products */]);
        $this->invoiceGenerator = new InvoiceGenerator($this->productRepository);
    }
}


