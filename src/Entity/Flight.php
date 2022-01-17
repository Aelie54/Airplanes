<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"id"})})
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
     * @ORM\ManyToMany(targetEntity="Aeroport")
     * @ORM\JoinColumn(name="id_aeroport", referencedColumnName="$id")
     */
    private aeroport $id ;


    public function __construct (int $id_flight, aeroport $id_beginning, 
    aeroport $id_finally, \DateTime $beginning, \DateTime $finally){

        $this -> id_flight = $id_flight;
        $this-> id_beginning = $id_beginning;
        $this-> id_finally = $id_finally;
        $this-> beginning = $beginning;
        $this-> finally = $finally;

    }

}