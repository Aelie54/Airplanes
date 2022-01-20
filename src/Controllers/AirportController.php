<?php

namespace App\Controllers;
use App\Helpers\EntityManagerHelpers as Em;
use Doctrine\ORM\EntityRepository ;
use Doctrine\ORM\Mapping\ClassMetadata;

class AirportController{

    public static function index(){
        $entityManager = Em::getEntityManager();
    }

    public function Add() { 
        echo "ajout aeroport" ;
    }

    public function Modify() { 
        echo "modifier aeroport" ;
    }

    public function Delete() { 
        echo "supprimer aeroport" ;
    }

    public function show(string $airport_id_url) { 

        $entityManager = Em::getEntityManager();        

        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));

        $oAirport = $repository->find((int) $airport_id_url);

        print($oAirport->getStreet());

    }

    public function showall() { 

        $entityManager = Em::getEntityManager(); 
        //var_dump("ok");die;       

        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));

        $Airports = $repository->findAll();
        

        foreach ($Airports as $Airport) {
           
            print($Airport->getStreet()) ;

        }

    }

    public function add() { 

        echo "<hh>"

    }
    
}