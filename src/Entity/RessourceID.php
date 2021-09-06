<?php

declare(strict_types=1);

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

trait RessourceID {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"product_read","product_details_read","user_read","user_details_read"})
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}    