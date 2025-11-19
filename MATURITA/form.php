<?php
/// Formuláře a odesílání dat ///
// Trénujte formuláře a odesílání dat pomocí GET a POST metod
// Také je důležité umět zpracovat data, validovat je a vypisovat chybové hlášky.

/// Ukázkové řešení ///
// Vytvořte formulář pro přihlášení uživatele
// Formulář by měl mít pole pro uživatelské jméno a heslo.
//   - Uživatelské jméno by mělo mít alespoň 3 znaky a nesmí obsahovat mezery.
//   - Heslo by mělo být skryté a obsahovat alespoň 8 znaků.
// Po odeslání formuláře by se mělo zkontrolovat, zda jsou správně vyplněna
// Pokud ano, vypište "Přihlášení úspěšné"

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Přihlášení</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $isValid = true;
        // Kontrola vstupu
        if (strlen($username) < 3 || str_contains($username, ' ') !== false) {
            echo "Uživatelské jméno musí mít alespoň 3 znaky a nesmí obsahovat mezery.";
            $isValid = false;
        }
        if (strlen($password) < 8) {
            echo "Heslo musí mít alespoň 8 znaků.";
            $isValid = false;
        }


        if ($isValid) {
            echo "Přihlášení úspěšné.";
        } else {
            echo "Omlouváme se, ale došlo k chybě při validaci.";
        }
    }
    ?>
    <h1>Přihlášení</h1>
    <form method="POST" action="">
        <label for="username">Uživatelské jméno:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Heslo:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" name="submit" value="Přihlásit se">
    </form>
</body>

</html>