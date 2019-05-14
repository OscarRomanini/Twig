<?php

require "vendor/autoload.php";

use Slim\App;

$app = new App();


$config["displayErrorDetails"] = true;

$app = new App(['settings' => $config]);
