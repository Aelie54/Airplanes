<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"passeport_number", "ticket_number"})})
*/
final class Ticket {


    /**
     * @ORM\Column(type ="integer")
     */
    private int $passeport_number;

    /**
     * @ORM\Column(type ="integer")
     * @ORM\GeneratedValue
     * @ORM\Id
     */
    private int $ticket_number ;

    /**
     * 
     * @ORM\Column(type ="float", nullable="NULL")
     */
    private float $price;

    /**
     * 
     * @ORM\Column(type ="boolean", nullable="NULL")
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


    /**
     * Get the value of passeport_number
     */ 
    public function getPasseport_number()
    {
        return $this->passeport_number;
    }

    /**
     * Set the value of passeport_number
     *
     * @return  self
     */ 
    public function setPasseport_number($passeport_number)
    {
        $this->passeport_number = $passeport_number;

        return $this;
    }

    /**
     * Get the value of ticket_number
     */ 
    public function getTicket_number()
    {
        return $this->ticket_number;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of extras
     */ 
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Set the value of extras
     *
     * @return  self
     */ 
    public function setExtras($extras)
    {
        $this->extras = $extras;

        return $this;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumn(name="number_reservation", referencedColumnName="number_reservation")
     */
    private Reservation $number_reservation ;

    
    public function __construct (Reservation $number_reservation, int $num_ticket, int $passeport_number){
        
        $this->number_reservation = $number_reservation;
        $this -> num_ticket = $num_ticket;
        $this -> passeport_number = $passeport_number;

    }

}
    