<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Player
{
    /**
     * @ORM\Column(type="string")
     */
    private $identifier;

    /**
     * @ORM\ManyToOne(targetEntity="Application")
     * @ORM\JoinColumn(name="application_identifier", referencedColumnName="identifier")
     */
    private $application;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;
}