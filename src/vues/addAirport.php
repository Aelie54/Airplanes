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

<form action="/Airplanes/addairport" method="POST">

    <div>
        <label for="street">Ville :</label>
       <input type="text" id="street" name="street">
    </div>

    <div>
        <label for="street">Nationality :</label>
       <input type="text" id="nationality" name="nationality">
    </div>

    <!-- <div>
        <label for="id">id :</label>
       <input type="number" id="id" name="id">
    </div> -->

    <div class="button">
       <button type="submit">Envoyer</button>
    </div>

</fom>

</body>

</html>