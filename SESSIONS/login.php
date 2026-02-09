
<?php
include_once("database.php");
session_start();

function loginUser($user) {
    $id = $user["id"];
    $username = $user["username"];
    
    $_SESSION["logged_user"] = $username;
    $_SESSION["logged_user_id"] = $id;
}

// Pokud je odeslán formulář pokusíme se najít a přihlásit uživatele
if (isset($_POST['username'])) {
    
    // Načteme data z formuláře
    $user = $_POST["username"];
    $pass = $_POST["password"];


    // Vyhledat podle jmena a hesla !
    $users = $DB->query("SELECT * 
                        FROM users
                        WHERE username='$user'
                        AND password='$pass'
    ");
    $users = $users->fetchAll();

    if (count($users) > 0) {
        //   Uživatel nalezen
        $user = $users[0];
        loginUser($user);
        echo "<p style='color: green; font-weight:bold'> Uživatel přihlášen <p>";
        include_once("index.php");
    } else {
        //    Údaje neodpovídají
        echo "Přihlašovací údaje nedopovídají";  
    }
}



// Pokud je v GETU logout => zruš session
if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    echo "<p style='color: red; font-weight:bold'> Uživatel odhlášen <p>";
    include_once("index.php");
}