<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity  */
final class Reservation {

    /**
     * @ORM\Column(type="integer")
     */
    private int $number_reservation;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $sell;
    
}