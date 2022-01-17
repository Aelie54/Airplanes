<?php
namespace App;
require_once('vendor/autoload.php');
require "bootstrap.php";
//use Doctrine\ORM\Mapping as ORM ;

use App\Entity\Aeroport;
use App\Entity\Flight;
use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\User; 
use DateTime;
use DateTimezone;

$user1 = new User(3, "amelie", "klein");
    $entityManager->persist($user1);

$a1 = new Aeroport(3);
    $entityManager->persist($a1);

$a2 = new Aeroport(4);
    $entityManager->persist($a2);

//$date1 = DateTime::createFromFormat('j-M-Y', '18-juillet-2022');
//$date2 = DateTime::createFromFormat('j-M-Y', '20-juillet-2022');

$date1= new DateTime(null, new DateTimeZone('Pacific/Nauru'));
    echo $date1->format('Y-m-d H:i:sP') . "\n";
$date2= new DateTime(null, new DateTimeZone('Pacific/Nauru'));
    echo $date2->format('Y-m-d H:i:sP') . "\n";

var_dump($date2);
var_dump($date1);

$avion = new Flight(4, $a1, $a2, $date1, $date2);
    $entityManager->persist($avion);

$resa = new Reservation($user1, 100, $date1);
    $entityManager->persist($resa);

$tick = new Ticket ($resa, 5605, 1254879630);
    $entityManager->persist($tick);

    $entityManager->flush();
