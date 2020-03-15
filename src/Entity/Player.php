<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $identifier;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;
}