<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity */
final class Reservation {


    /**
     * @Entity
     * @Table(name="ecommerce_products",uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"name", "email"})})
     */
    private int $passeport_number;

    /**
     * @Entity
     * @Table(name="ecommerce_products",uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"name", "email"})})
     */
    private int $ticket_number ;


    /**
     * 
     * @ORM\Column(type ="float")
     */
    private float $price;


    /**
     * 
     * @ORM\Column(type ="boolean")
     */
    private bool $extras ;


    public function Total_price_passenger (float $price, bool $extra) {

        $this->price=$price;

        if ($extra==1){
            $this->extra=$extra ;
            return $total = $price + 10 ;  
        }

        else {
            return $total = $price;
        }

    }

}
    