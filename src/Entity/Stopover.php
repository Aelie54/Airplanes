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
    private int $id_stopover;

    
    /**
     * Get the value of id_stopover
     */ 
    public function getId_stopover()
    {
        return $this->id_stopover;
    }


    /**
     * 
     * @ORM\Column(type="datetime")
     */
     private \DateTime $arrive ;

          /**
      * Get the value of arrive
      */ 
      public function getArrive()
      {
           return $this->arrive;
      }
 
      /**
       * Set the value of arrive
       *
       * @return  self
       */ 
      public function setArrive($arrive)
      {
           $this->arrive = $arrive;
 
           return $this;
      }
    
    /**
     * 
     * @ORM\Column(type="datetime")
     */
    private \DateTime $departure ;

    /**
     * Get the value of departure
     */ 
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set the value of departure
     *
     * @return  self
     */ 
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }
      


    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="id_airport", referencedColumnName="id_airport")
     */
    private Airport $id_airport ;

    /**
     * @ORM\ManyToOne(targetEntity="FLight")
     * @ORM\JoinColumn(name="id_flight", referencedColumnName="id_flight")
     */
    private Flight $id_flight ;


    public function __construct (int $id_stopover, airport $id, \DateTime $arrive, \DateTime $departure){

        $this-> id_stopover = $id_stopover ;
        $this-> id = $id ;
        $this-> arrive = $arrive ;
        $this-> departure = $departure ;
    }

}