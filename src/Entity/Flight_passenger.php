<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;
/** @ORM\Entity 
* 
*/
final class FLight_passenger {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    
}