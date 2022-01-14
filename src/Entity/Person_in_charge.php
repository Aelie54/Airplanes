<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity */
final class Person_in_charge extends User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $badge_number ;

    /**
     * Get the value of badge_number
     */ 
    public function getBadge_number()
    {
        return $this->badge_number;
    }
    

    /**
     * Set the value of badge_number
     *
     * @return  self
     */ 
    public function setBadge_number($badge_number)
    {
        $this->badge_number = $badge_number;

        return $this;
    }


    public function __construct(int $id, string $firstname, string $lastname, int $badge_number){
        parent::__construct($id, $firstname, $lastname);
        $this->badge_number = $badge_number;
    }

}