<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity 
 * @ORM\Table(name="ecommerce_products",uniqueConstraints={@UniqueConstraint(name="search_idx", columns={"id"})})
*/
final class Aeroport {

    /**
     * @ORM\Column(type="integer")
     */
    private string $id;
    
}