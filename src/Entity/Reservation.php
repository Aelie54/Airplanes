<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity  
 * 
*/
final class Reservation {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $number_reservation;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $sell;
    

    /**
     * Get the value of number_reservation
     */ 
    public function getNumber_reservation()
    {
        return $this->number_reservation;
    }

    /**
     * Get the value of sell
     */ 
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * Set the value of sell
     *
     * @return  self
     */ 
    public function setSell($sell)
    {
        $this->sell = $sell;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id", referencedColumnName="$id")
     */
    private user $id ;

    public function __construct (user $id, int $number_reservation, \datetime $sell){
        $this->id = $id;
        $this->number_reservation = $number_reservation;
        $this->sell = $sell;
    }

}