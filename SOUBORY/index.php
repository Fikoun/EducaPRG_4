<?php
//////////////////////
///  Ukládání dat  ///
//////////////////////

// Načteme aktuální obsah souboru
$obsah = file_get_contents("data.txt");

///  DATA z formuláře  ///
// Proměnné $_POST nebo $_GET obsahují data po odeslání HTML formuláře
// $_POST je bezpečnější, data nejsou viditelná v URL
// $_GET posílá data přímo skrz URL link

// Pokračujeme v uložení dat pokud jsou data ve formuláři
if (isset($_POST['name']))
{
    // Přeuložíme data do proměnných a následně do ASSOC pole
    $name =     $_POST['name'];
    $surname =  $_POST['surname'];
    $age =      $_POST['age'];

    $person = [
        "name"      => $name,
        "surname"   => $surname,
        "age"       => $age,
    ];
    
    // Pole imploduje => slepíme prvky kolem ";" středníku
    $data = implode(";", $person);

    // Novým osahem je ten původní + nový řádek + data z formuláře
    $obsah = $obsah . "\n" . $data;
    
    // Obsah uložíme
    file_put_contents("data.txt", $obsah);
}

// INCLUDE: můžeme napojovat (skládat) více php souborů
include_once('form.php')
?>

