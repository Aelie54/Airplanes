<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;
/** @ORM\Entity 
* 
*/
final class Flight_passenger {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id_list;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="num_ticket", referencedColumnName="ticket_number")
     */
    private Ticket $num_ticket;

    /**
     * @ORM\ManyToOne(targetEntity="FLight")
     * @ORM\JoinColumn(name="id_flight", referencedColumnName="id_flight")
     */
    private Flight $id_flight;
    
    private array $list_passenger = [] ;

    public function __construct(Flight $id_flight){
    }


       
    
}