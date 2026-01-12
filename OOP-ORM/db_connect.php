<?php
// PDO připojení do dtabáze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_db";

// Připojení k DB a kontrola chyby (zdroj W3School)
try {
  $DB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "<p style='color: green; font-weight:bold'> DB Connected successfully <p>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
