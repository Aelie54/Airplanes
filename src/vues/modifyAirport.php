<?PHP
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if (array_key_exists("error", $_SESSION)){
    echo $_SESSION["error"];
    unset ($_SESSION["error"]);
}
?>

<form action="/Airplanes/modify_airport" method="POST">

    <div>
        <label for="street">Ville :</label>
       <input type="text" id="street" name="street" value="<?php 
                echo isset($_SESSION['AirportDatas']['street']) ? $_SESSION['AirportDatas']['street'] : ""; ?>" />
    </div>>

    <div>
        <label for="street">Nationality :</label>
       <input type="text" id="nationality" name="nationality" value="<?php 
                echo isset($_SESSION['AirportDatas']['nationality']) ? $_SESSION['AirportDatas']['nationality'] : ""; ?>" />
    </div>

    <div class="button">
       <button type="submit">Envoyer</button>
    </div>

</fom>

</body>

</html>