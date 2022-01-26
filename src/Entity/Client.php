<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM ;

/** @ORM\Entity */
final class Client extends User {

    /**
     * @ORM\Column(type="integer")
     */
    private int $number ;

    public function __construct(int $id, string $firstname, string $lastname, int $badge_number, string $nationality, string $email, string $password){
        parent::__construct($id, $firstname, $lastname, $nationality, $email, $password);
        $this->badge_number = $badge_number;
    }

}