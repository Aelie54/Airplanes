<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
*/
final class Flight {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id_flight;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $beginning ;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $finally ;

    

    /**
     * Get the value of id
     */ 
    public function getId_flight()
    {
        return $this->id_flight;
    }

    /**
     * Get the value of beginning
     */ 
    public function getBeginning()
    {
        return $this->beginning;
    }

    /**
     * Set the value of beginning
     *
     * @return  self
     */ 
    public function setBeginning($beginning)
    {
        $this->beginning = $beginning;

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

    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="id_beginning", referencedColumnName="id_airport")
     */
    private Airport $id_beginning;

        /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="id_finally", referencedColumnName="id_airport")
     */
    private Airport $id_finally;


    public function __construct (int $id_flight, Airport $id_beginning, 
    Airport $id_finally, \DateTime $beginning, \DateTime $finally){

        $this-> id_flight = $id_flight;
        $this-> id_beginning = $id_beginning;
        $this-> id_finally = $id_finally;
        $this-> beginning = $beginning;
        $this-> finally = $finally;

    }

}