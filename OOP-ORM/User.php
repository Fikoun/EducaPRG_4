<?php

// USERS tabulka v databázi se strukturou:
/**
*   CREATE TABLE `users` (
*       `id` int(11) NOT NULL AUTO_INCREMENT,
*       `username` varchar(50) NOT NULL,
*       `password` varchar(255) NOT NULL,
*   );
*/

// Odpovídající třída tabulce z DB
class User {
    public $id;
    public $username;
    public $password;
    
    // Statické vlastnosti nepotřebují instanci
    public static $userCount;

    public function __construct($user, $pass) {
         $this->username = $user;
         $this->password = $pass;
    }

    public function saveToDB() {
        global $DB;

        $user = $this->username;
        $pass = $this->password;

        $query = $DB->query("INSERT INTO
                      users (username, password)  
                      VALUES ('$user', '$pass')");

        echo "<br>Uživatel úspěšně vytvořen!";
    }


    public function echoInfo(){
        echo "<br> username: " . $this->username;
        echo "<br> password: " . $this->password;
    }

}

