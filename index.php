<?php

use Doctrine\ORM\Mapping as ORM ;

namespace App;

use App\Entity\Aeroport;
use App\Entity\Flight;
use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\User; 


$user1 = new User(3, "aelie", "klein");
$entityManager->persist($user1);

$a1 = new Aeroport(3);
$entityManager->persist($a1);

$a2 = new Aeroport(4);
$entityManager->persist($a1);

$a2 = new Flight(4, $a1, $a2, 15032022, 16032022);
$entityManager->persist($a2);

$resa = new Reservation($user1, 100, 17012022);
$entityManager->persist($resa);

$tick = new Ticket ($resa, 5605, 1254879630);
$entityManager->persist($tick);


$entityManager->flush();