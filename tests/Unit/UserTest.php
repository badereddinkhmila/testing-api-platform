<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\EcommerceUser;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    private EcommerceUser $user;

    protected function setUp(): void
    {
        parent::setUp();
        
        $this->user = new EcommerceUser();
    }

    public function testGetMail(): void
    {
        $value = 'test@test.fr';
        
        $response = $this->user->setEmail($value);
        
        self::assertInstanceOf(EcommerceUser::class,$response);
        self::assertEquals($value,$this->user->getEmail());
        self::assertEquals($value,$this->user->getUsername());

    }

    public function testGetRoles(): void
    {   
        $value=['ROLE_ADMIN'];
        $response= $this->user->setRoles($value);
        self::assertInstanceOf(EcommerceUser::class,$response);
        self::assertContains('ROLE_USER', $this->user->getRoles());
        self::assertContains('ROLE_ADMIN', $this->user->getRoles());
    }

    public function testGetPassword(): void
    {   
        $value='password';
        $response= $this->user->setPassword($value);

        self::assertInstanceOf(EcommerceUser::class,$response);
        self::assertEquals($value, $this->user->getPassword());
    }

    public function testGetArticle(): void
    {   
        $value=new Product();
        $value1=new Product();
        $value2=new Product();
        
        $response= $this->user->addProduct($value);
        $response= $this->user->addProduct($value1);
        $response= $this->user->addProduct($value2);

        self::assertInstanceOf(EcommerceUser::class,$response);
        self::assertCount(3, $this->user->getProducts());
        self::assertTrue($this->user->getProducts()->contains($value));
        self::assertTrue($this->user->getProducts()->contains($value1));
        self::assertTrue($this->user->getProducts()->contains($value2));
        
        $response= $this->user->removeProduct($value);

        self::assertInstanceOf(EcommerceUser::class,$response);
        self::assertCount(2, $this->user->getProducts());
        self::assertFalse($this->user->getProducts()->contains($value));
        self::assertTrue($this->user->getProducts()->contains($value1));
        self::assertTrue($this->user->getProducts()->contains($value2));
    }
}