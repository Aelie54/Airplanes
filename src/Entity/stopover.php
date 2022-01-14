<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity  */
final class Stopover {

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