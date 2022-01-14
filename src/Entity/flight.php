<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity  */
final class Flight {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $Beginning ;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $finally ;

    
}