<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * @ORM\Table(name="ecommerce_products",uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"passeport_number", "ticket_number"})})
*/
final class Reservation {


    /**
     * @ORM\Column(type ="integer")
     */
    private int $passeport_number;

    /**
     * @ORM\Column(type ="integer")
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
    