<?php

namespace App\Traits;
use Doctrine\ORM\Mapping as ORM ;

trait Nationality {

    /**
     * @ORM\Column(type="string")
     */
    protected string $nationality;

    public function Nationality()
    {
        $this->nationality;
        return $this;
    }

}