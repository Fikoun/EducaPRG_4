<?php
/// Include potřebných třídních souborů ///
include_once("Human.php");
include_once("Pet.php");

/// Vytvoření instancí HUMANS ///
$jozis = new Human("Jožis", 55); 

/// Vytvoření instancí PETS ///
$rozi = new Pet("Rozi", 12, "cat");
$alf = new Pet("Alf", 2, "dog");


/// Volání metod na objektech ///
$jozis->sayHi();
$jozis->celebrateBirthday();
$jozis->sayHi();

// Přidáme mazlíčky
$jozis->addPet($alf); 
$jozis->addPet($rozi);

// Vypíšeme mazlíčky z člověka
var_dump($jozis->pets);


?>
