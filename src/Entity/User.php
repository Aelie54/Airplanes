<?php

namespace App\Entity;
use App\Traits\Nationality ;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="User", type="string")
 * @ORM\DiscriminatorMap({"client" = "Client", "person_in_charge" = "Person_in_charge"})
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
     * @ORM\Column(name="email", type="string")
     */
    private string $email;

   /**
     * @ORM\Column(name="password", type="string", length="255")
     */
    private string $password;


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

    public function __construct (int $id, string $firstname, string $lastname, string $nationality, string $email, string $password){

        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->nationality = $nationality;
        $this->email = $email;
        $this->password= password_hash($password, PASSWORD_DEFAULT); ///PAUUUUUULIIIIINEUUH
        
    }


    /**
     * Get the value of password
     */ 
    public function getPassword():string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     * @return  self
     */ 
    public function setPassword(string $password):self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * @return  self
     */ 
    public function setEmail(string $email):self
    {
        $this->email = $email;

        return $this;
    }
}