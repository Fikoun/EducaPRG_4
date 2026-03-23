<?php 

function autoload_framework($class) {
    require_once "core\\$class.php";
}
spl_autoload_register("autoload_framework");

