<?php

declare(strict_types=1);

namespace App\Entity;

use DateTimeInterface;
use Symfony\Component\Serializer\Annotation\Groups;

trait Timestampable{
    
    /**
     * @var \DateTimeinterface
     * @ORM\Column(type="datetime")
     * @Groups({"product_read","product_details_read","user_read","user_details_read"})  
     */
    private \DateTimeInterface $created_at;

    /**
     * @var \DateTimeinterface
     * @ORM\Column(type="datetime",nullable=true)
     * @Groups({"product_read","product_details_read","user_read","user_details_read"})  
     */
    private ?\DateTimeInterface $updated_at;

    
    public function getCreated_at()
    {
        return $this->created_at;
    }

    
    public function getUpdated_at():?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdated_at(?\DateTimeinterface $updated_at): Timestampable
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}