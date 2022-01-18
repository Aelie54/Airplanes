<?php

require 'vendor/autloader/autoload.php';

$router = new App\Entity\Router($_GET['url']) ;