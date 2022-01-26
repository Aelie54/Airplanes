<?php
namespace App\Controllers;

session_start();

use App\Helpers\EntityManagerHelpers as Em;
use Doctrine\ORM\EntityRepository ;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Airport;


class AirportController{

    const NEEDLES = [
        "street",
        "nationality"
        //"id"
    ];

    public static function index(){
        $entityManager = Em::getEntityManager();
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
       
        $entityManager = Em::getEntityManager(); 
        
        foreach (self::NEEDLES as $value) {
            if(!array_key_exists($value, $_POST)) {
                $_SESSION["error"] = "?error=attention à remplir tous les champs";
                header("location: http://localhost/Airplanes/src/vues/addAirport.php");
                 
            }
            
            $_POST[$value] = htmlentities(strip_tags($_POST[$value])) ;
            
        }
        
        //var_dump($_POST['street']); die();
        $new_airport = new Airport ($_POST['street'], $_POST['nationality']) ;
        $entityManager->persist($new_airport);
        $entityManager->flush();

        header("location: http://localhost/Airplanes/src/vues/addAirport.php");

    }

    public function modify(string $sId) { 
       
        $entityManager = Em::getEntityManager();        
        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));
        
        $oAirport = $repository->find((int) $sId);
        $AirportDatas = ["street", "nationality"];

        foreach (self::NEEDLES as $value){
            $getteur = 'get'. ucfirst($value);
            $AirportDatas[$value] = $oAirport->$getteur();
            $_POST[$value] = htmlentities(strip_tags($_POST[$value])) ;
            //echo"hello";
        };

        if(!empty($_POST)){
            foreach (self::NEEDLES as $value){
                $exist = array_key_exists($value, $_POST);
                if($exist === false){
                    echo "erreur" ;
                } 
            }
        }
        
        $oAirport->setStreet($_POST['street']); 
        $oAirport->setNationality($_POST['nationality']);  
        
        $entityManager->persist($oAirport);
        $entityManager->flush();
        
        $AirportDatas["id"] = $oAirport->getId();

        include __DIR__."/../vues/modifyAirport.php" ;

    }

}