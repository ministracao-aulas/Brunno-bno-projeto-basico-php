<?php
declare(strict_types=1);

if(!isset($_SESSION)) {
    session_start();
}

define('BASE_DIR', __DIR__);

require_once BASE_DIR . "/autoload.php";
require_once BASE_DIR . "/resources/functions/global_functions.php";

$envValidations = require BASE_DIR.'/resources/settings/envValidations.php';
$envInstance    = new \Core\Contracts\EnvBase(BASE_DIR . '/_env.php', $envValidations);
