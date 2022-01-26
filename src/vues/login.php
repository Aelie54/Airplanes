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
?>

<form action="airplanes/login" method="POST">

    <div>
        <label for="email">pseudo :</label>
       <input type="text" id="email" name="email">
    </div>

    <div>
        <label for="password">password :</label>
       <input type="text" id="password" name="password">
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