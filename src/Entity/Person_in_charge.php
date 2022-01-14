<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity */
final class Person_in_charge {

    /**
     * @ORM\Column(type="integer")
     */
    private int $id ;

}