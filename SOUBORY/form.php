<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soubory CSV</title>
    </head>

    <body>  
        <h3>Obsah souboru</h3>
        <pre>
            <?php include_once("obsah.php") ?>
        </pre>


        <hr>
        <h3>Odeslání dat</h3>
        <!-- Obecný zápis HTML formuláře  -->
        <!-- <form
            action = kam data posíláme "index.php", nechámeli prázné použije se aktuální soubor
            method = metoda je "POST" nebo "GET"
        > -->
        
        <form action="index.php" method="POST">

           Jméno: <input type="text" name="name"> <br>
           Příjmení: <input type="text" name="surname"> <br>
           Věk: <input type="number" name="age">

            <input type="submit" value="ULOŽIT">
        </form>
    </body>

</html>