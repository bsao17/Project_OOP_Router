
<?php

use src\controllers\Route;

require "vendor/autoload.php";

$action = new Route;
$action->getRoute($_GET['action']);


