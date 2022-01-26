<?php

namespace App\Controllers;

use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Stopover;
use App\Entity\Person_in_charge;
use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Ticket;
use App\Entity\EntityManager;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\MAPPING\ClassMetadata;
use App\Helpers\EntityManagerHelpers as Em;

class AppController{

    const NEEDS =
    ['email',
    'password'
    ] ;



    public static function index(){

        $entityManager = Em::getEntityManager();

    }



    public function hello() { 
        echo "hello ceci est un test" ;
    }



    public function login(){

        include("./src/vues/login.php");

        if(!empty($_POST)){

            foreach(self::NEEDS as $value){
                if(!array_key_exists($value, $_POST)){
                  echo "error : veuillez remplir tous les champs";
                  die();  
                }

                $_POST[$value]=trim(htmlentities(strip_tags($_POST[$value])));

                if($_POST[$value] === ""){
                    echo "error : veuillez remplir tous les champs";
                    die(); 
                }

                $entityManager = Em::getEntityManager();        
                $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
                
                $oUser = $repository->findBy(['email'=>$_POST['email']]);
                
                if(empty($oUser)){
                    echo 'user not find, please suscribe' ;
                    die;
                }
                
                if(password_verify($_POST['password'], $oUser[0]->getPassword()) == false){
                    echo "c'est le moment de s'inscrire ! ou alors mauvais mdp...";
                }



                $_SESSION['type'] = strtolower(str_replace("App_Entity\\","",get_class($oUser[0])));    // on enleve le debut pour le remplacer par le nom de l'objet
                
                // var_dump($_SESSION['type']);
                // die('---END---');

                $_SESSION['email'] = $oUser[0]->getEmail(); // ou $_POST['email'] c'est pareil
                $_SESSION['prenom'] = $oUser[0]->getPrenom();

                header('Location:http://localhost/Airplanes/');

            }

        }

    }
    
}