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



    public function show(string $sId) { 

        $entityManager = Em::getEntityManager();        

        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));

        $oAirport = $repository->find((int) $sId);

        print($oAirport->getStreet());
        print("  et  ");
        print($oAirport->getNationality());

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
            $new_airport = new Airport ($_POST['street'], $_POST['nationality']) ;
            
        }
        
        //var_dump($_POST['street']); die();
        $entityManager->persist($new_airport);
        $entityManager->flush();

        header("location: http://localhost/Airplanes/src/vues/addAirport.php");

    }



    public function modify(string $sId) { 
       
        $entityManager = Em::getEntityManager();        
        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));
        
        $oAirport = $repository->find((int) $sId);
        
        if(!empty($_POST)){
            
            //je verifie que mes clés existe selon needles
            foreach (self::NEEDLES as $value){
                $exist = array_key_exists($value, $_POST);
                if($exist === false){
                    echo "erreur" ;
                    die;
                } 

                //je securise mes $_post
                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value]))) ;
            }

            if($_POST["street"] !== $oAirport->getStreet()){
                $oAirport->setStreet($_POST['street']); 
            }

            if($_POST["nationality"] !== $oAirport->getNationality()){
                $oAirport->setNationality($_POST['nationality']);  
            }

            $entityManager->persist($oAirport);
            $entityManager->flush();

        }
        

        include __DIR__."/../vues/modifyAirport.php" ;

    }



    public function delete(string $sId)
    {
        $entityManager = Em::getEntityManager();        
        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Airport"));
        
        $oAirport = $repository->find($sId);

        $entityManager->remove($oAirport);

        $entityManager->flush();

    }
    

}
