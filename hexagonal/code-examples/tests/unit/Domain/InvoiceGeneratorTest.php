<?php

class InvoiceGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /** @var InvoiceGenerator */
    private $invoiceGenerator;
    /** @var ProductRepository */
    private $productRepository;

    /** @test */
    public function it_generates_invoice_for_customer(): void
    {
        // test the generator
    }

    public function setUp(): void
    {
        $this->productRepository = new InMemoryProductRepository([1 => [/* some products */]]);
        $this->invoiceGenerator = new InvoiceGenerator($this->productRepository);
    }
}


