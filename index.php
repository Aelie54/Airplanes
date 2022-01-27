
<?php

session_start();

require_once('vendor/autoload.php');

use App\Controllers\AppController;
use App\Router\Router;

require_once("vendor/autoload.php");

AppController::index();  ///comme si collais le code car statique

/// mes routes que j'ai definies : ce qu'on attrape dans le lien et l'action derrière

$router = new Router($_GET['url']);

        //var_dump($_GET['url']);

        // namespace App;
        // require_once('vendor/autoload.php');
        // require "bootstrap.php";
        // use App\Entity\Airport;
        // use App\Entity\Flight;
        // use App\Entity\Reservation;
        // use App\Entity\Ticket;
        // use App\Entity\User; 
        // use \DateTime;

        // $nationality1= "french";
        // $user1 = new User(3, "amelie", "klein", $nationality1);
        //     $entityManager->persist($user1);

        //     $user2 = new User(4, "LB", "Al", $nationality1);
        //     $entityManager->persist($user2);

        // $street1 = "Lyon"; 
        // $street2 = "Nancy"; 

        // $a1 = new Airport(3, $street1, $nationality1);
        //     $entityManager->persist($a1);
        // $a2 = new Airport(4, $street2, $nationality1);
        //     $entityManager->persist($a2);

        //     $airport2 = new Airport(9, $street2, $nationality1);
        //         $entityManager->persist($airport2);

        // $date2= new DateTime('2022-04-30 04:30:00');
        //     echo $date2->format('Y-m-d H:i:s') . "\n"."<br>";
            
        // $date1= new DateTime('2022-03-30 23:30:00');
        //     echo $date1->format('Y-m-d H:i:s') . "\n"."<br>";

        // $avion = new Flight(4, $a1, $a2, $date1, $date2, $nationality1);
        //     $entityManager->persist($avion);

        //     $avion2 = new Flight(4, $a1, $a2, $date1, $date2, "français");
        //     $entityManager->persist($avion2);

        // $resa = new Reservation($user1, 100, $date1);
        //     $entityManager->persist($resa);

        // $tick = new Ticket ($resa, 5605, 1254879630);
        //     $entityManager->persist($tick);

        //     $entityManager->flush();


        if (!empty($_SESSION['type'])) {
                $_SESSION['type'] = "";
            }
                switch ($_SESSION['type']) {
                
                        case 'user':

                        $router->get('/', 'App\Controllers\AppController@index');
                        $router->get('/utilisateur', 'App\Controllers\AppController@index');
                        $router->get('/bonjour', 'App\Controllers\AppController@hello');
                        
                        
                        $router->get('/airport/:id', 'App\Controllers\AirportController@show');
                        $router->get('/airports', 'App\Controllers\AirportController@showall');

                        $router->get('/login', 'App\Controllers\AppController@login');
                        $router->post('/login', 'App\Controllers\AppController@login');

                    break;
            
                        case 'person_in_charge':

                        $router->get('/addairport', 'App\Controllers\AirportController@add');
                        $router->post('/addairport', 'App\Controllers\AirportController@add');

                        $router->get('/modifyairport/:id', 'App\Controllers\AirportController@modify');
                        $router->post('/modifyairport/:id', 'App\Controllers\AirportController@modify');

                        $router->get('/deleteairport/:id', 'App\Controllers\AirportController@delete');


                    break;
            
                default:

                $router->get('/login', 'App\Controllers\AppController@login');
                $router->post('/login', 'App\Controllers\AppController@login');

            }
            

            $router->run();
