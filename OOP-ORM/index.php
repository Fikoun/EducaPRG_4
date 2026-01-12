<?php

include_once("db_connect.php");
include_once("User.php");



// "Registrace" vytvoření instance user
$pepa = new User("Pepa", "heslo123");
$pepa->saveToDB();
/// $pepa->deleteFromDB(); 
/// $pepa->updateInDB();
// + další CRUD metody
