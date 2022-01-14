<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;
/** @ORM\Entity 
 * @ORM\Table(name="ecommerce_products",uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"id"})})
*/
final class Street {


    /**
     * @ORM\Column(type="integer")
     */
    private string $id;

    /**
     * @ORM\Column(type="float")
     */
    private string $street;

    /**
     * @ORM\Column(type="float")
     */
    private string $Adress;
    
}