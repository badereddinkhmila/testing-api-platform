<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProductRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 * @ApiResource(collectionOperations={
 *       "get"={"normalization_context"={"groups"={"product_read"}}},
 *       "post"},
 *       itemOperations={"get"={"normalization_context"={"groups"={"product_details_read"}}},"put","patch","delete"})
 */

class Product
{
    use RessourceID;
    use Timestampable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product_read","product_details_read","user_details_read"})
     */
    private $product_name;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product_read","product_details_read","user_details_read"})
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"product_read","product_details_read","user_details_read"})
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=EcommerceUser::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"product_details_read"})
     */
    private $created_by;

    public function __construct()
    {
        $this->created_at= new \DateTimeImmutable();
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCreatedBy(): ?EcommerceUser
    {
        return $this->created_by;
    }

    public function setCreatedBy(?EcommerceUser $created_by): self
    {
        $this->created_by = $created_by;

        return $this;
    }
}
