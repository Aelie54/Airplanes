<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity  */
final class Stopover {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    
    /**
     * 
     * @ORM\Column(type ="datetime")
     */
     private \DateTime $Beginning ;
    
    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $finally ;


     /**
      * Get the value of Beginning
      */ 
     public function getBeginning()
     {
          return $this->Beginning;
     }

     /**
      * Set the value of Beginning
      *
      * @return  self
      */ 
     public function setBeginning($Beginning)
     {
          $this->Beginning = $Beginning;

          return $this;
     }

    /**
     * Get the value of finally
     */ 
    public function getFinally()
    {
        return $this->finally;
    }

    /**
     * Set the value of finally
     *
     * @return  self
     */ 
    public function setFinally($finally)
    {
        $this->finally = $finally;

        return $this;
    }
}