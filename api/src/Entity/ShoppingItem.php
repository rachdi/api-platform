<?php
// api/src/Entity/ShoppingItem.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An item of a shopping list.
 *
 * @ORM\Entity
 * @ApiResource
 */
class ShoppingItem
{
    /**
     * @var int The id of this item.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string the name of the item.
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @var boolean if the item has been purchased.
     *
     * @ORM\Column(type="boolean")
     */
    public $isCheck = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsCheck(): ?string
    {
        return $this->isCheck ? "yes" : "no";
    }
}
