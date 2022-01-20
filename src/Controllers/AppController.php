<?php

namespace App\Controllers;

use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Stopover;
use App\Entity\Person_in_charge;
use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Ticket;
use App\Helpers\EntityManagerHelpers as Em;

class AppController{

    public static function index(){

        $entityManager = Em::getEntityManager();

    }

    public function hello() { 
        echo "hello ceci est un test" ;
    }
    
}