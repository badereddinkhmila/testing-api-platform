<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\EcommerceUser;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{

    private Product $product;

    protected function setUp(): void
    {
        parent::setUp();
        
        $this->product = new EcommerceUser();
    }

    public function testGetName(): void
    {
        $value = 'iphone X';
        
        $response = $this->product->setProductName($value);
        
        self::assertInstanceOf(Product::class,$response);
        self::assertEquals($value,$this->product->getProductName());

    }

    public function testGetPrice(): void
    {   
        $value=20.5;
        $response= $this->product->setPrice($value);
        self::assertInstanceOf(Product::class,$response);
        self::assertEquals($value, $this->product->getPrice());
    }

    public function testGetQuantity(): void
    {   
        $value=5;
        $response= $this->product->setQuantity($value);

        self::assertInstanceOf(Product::class,$response);
        self::assertEquals($value, $this->product->getQuantity());
    }

    public function testGetUser(): void
    {   
        $value=new EcommerceUser();
        
        $response= $this->product->setCreatedBy($value);
        
        self::assertInstanceOf(Product::class,$response);
        self::assertEquals($value,$this->product->getCreated_at());
        
    }
}