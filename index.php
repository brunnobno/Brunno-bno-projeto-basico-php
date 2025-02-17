<?php
declare(strict_types=1);

if(!isset($_SESSION)) {
    session_start();
}

use App\Helpers\URL;
use Core\Contracts\RouteManager;

require_once __DIR__ . "/autoload.php";
require_once __DIR__ . "/resources/functions/global_functions.php";

define('BASE_DIR', __DIR__);

RouteManager::listenRequests();
