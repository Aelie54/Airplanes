<?php
namespace App;
require_once('vendor/autoload.php');
require "bootstrap.php";
//define('null', null);
//use Doctrine\ORM\Mapping as ORM ;

use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\User; 
use DateTime;
use DateTimezone;

$user1 = new User(3, "amelie", "klein");
    $entityManager->persist($user1);

$street1 = "Lyon";
$street2 = "Nancy";

$a1 = new Airport(3, $street1);
    $entityManager->persist($a1);

$a2 = new Airport(4, $street2);
    $entityManager->persist($a2);

//$date1 = DateTime::createFromFormat('j-M-Y', '18-juillet-2022');
//$date2 = DateTime::createFromFormat('j-M-Y', '20-juillet-2022');

$date1= new DateTime(null, new DateTimeZone('Pacific/Nauru'));
   echo $date1->format('Y-m-d H:i:sP') . "\n";

$date2= new DateTime(null, new DateTimeZone('Pacific/Nauru'));
   echo $date2->format('Y-m-d H:i:sP') . "\n";

// var_dump($date2);
// var_dump($date1);

$avion = new Flight(4, $a1, $a2, $date1, $date2);
    $entityManager->persist($avion);

$resa = new Reservation($user1, 100, $date1);
    $entityManager->persist($resa);

$tick = new Ticket ($resa, 5605, 1254879630);
    $entityManager->persist($tick);


    $entityManager->flush();
