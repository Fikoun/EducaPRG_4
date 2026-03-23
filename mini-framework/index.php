<?php 
require_once 'core/autoload.php';

// Pro připojení autoloaderu composeru
// "autoload": {
//     "psr-4": {
//         "Core\\": "core/",
//         "App\\": "app/"
//     }
// }
// composer dump-autoload

if (isset($_GET["url"])) {
    $url = $_GET["url"];
}else {
    $url = "";
}

$router = new Router($url);
$router->routeToController();


?>
