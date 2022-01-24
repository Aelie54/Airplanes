<?php

namespace App\Entity;

use App\Traits\Nationality ;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * 
*/
final class Airport {

    use Nationality;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id_airport;

    /**
     * @ORM\Column(type="string")
     */
    private string $street;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }
    

    public function __construct (string $street, string $nationality){

        $this -> street = $street;
        $this -> nationality = $nationality;

    }
}