<?php

namespace App\Traits;
use Doctrine\ORM\Mapping as ORM ;

trait Nationality {

    /**
     * @ORM\Column(type="string")
     */
    protected string $nationality;
      


    /**
     * Get the value of nationality
     */ 
    public function getNationality(){

        return $this-> nationality;
 
     }


   /**
     * Set the value of nationality
     *
     * @return  self
     */ 
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

}