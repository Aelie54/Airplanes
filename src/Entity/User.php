<?php

namespace App\Entity;
use App\Traits\Nationality ;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
*/
class User {

    use Nationality;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $lastname ;

    /**
     * @ORM\Column(type="string")
     */
    private string $firstname;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->lastname;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function __construct (int $id, string $firstname, string $lastname, string $nationality){

        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->nationality = $nationality;
        
    }
}