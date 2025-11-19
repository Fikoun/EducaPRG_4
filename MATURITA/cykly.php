<?php
/// Cykly a Pole ///
// Trénujte cykly a pole: for, while, foreach a rekurzy
// Pokud rekurzy neovládám dá se napsat cyklem, se sníženým ohodnocením.

/// Ukázkové řešení: ///
// Vytvořte funkci, která vypíše Faktorial čísla (n!) pomocí rekurze.
// Faktoriál čísla n je součin všech celých čísel od 1 do n.
// Např.: 5! = 5 * 4 * 3 * 2 * 1 = 120

$vstup = 5;
function faktorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        // Rekurze - volání funkce sama sebe
        return $n * faktorial($n - 1);
    }
}
echo "Faktorial čísla $vstup je: " . faktorial($vstup) . "<br>";

// Pomocí cyklu
function faktorialCyklem($n) {
    $faktorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $faktorial *= $i;
    }
    return $faktorial;
}
echo "Faktorial čísla $vstup je: " . faktorialCyklem($vstup) . "<br>";



/// Příklad 1. ///
// Vypočítejte součet čísel od 1 do N pomocí cyklu
// Např.: 5 -> 1 + 2 + 3 + 4 + 5 = 15



/// Příklad 2. ///
// Najděte největší číslo v poli pomocí cyklu
// Např.: [1, 2, 3, 4, 5] -> 5


/// Příklad 3. ///
// Obrácení řetězce pomocí cyklu
// Např.: "ahoj" -> "joha"



/// Příklad 4. ///
// Nahraďte funkci explode pomocí vlastní funkce, která rozdělí řetězec na pole podle zadaného oddělovače.
// Např.: "ahoj,jak,se,máš" -> ["ahoj", "jak", "se", "máš"]


/// Příklad 5. ///
// Vytvořte funkci, která vypíše malou násobilku pomocí.
// Na každý řádek vypište násobení od 1 do 10 postupně inkrementujícím číslem.
// Výstup bude tohoto formátu (body navíc za vypsání do HTMl tabulky):
/*
1 2 3 4 ... 10
2 4 6 8 ... 
3 6 9 12 ...
4 8 12 16 ...
...
*/


/// Příklad 6. ///
// Program, bude brát číslo a vypisovat jeho dělitele
// Algoritmus postupně projde čísla od 1 do N a pokud je dělitel, vypíše ho
// Např.: Číslo 12 dělí čísla: 1, 2, 3, 4, 6, 12


/// Příklad 7. ///
// Vytvořte funkci, která najde nejmenší číslo v poli pomocí cyklu a to číslo odstraní.
// Např.: [1, 2, 3, 4, 5] -> [2, 3, 4, 5]


/// Příklad 8. ///
// Vytvořte funkci, která velikost trojrozměrného vektoru.
// Funkce bere vektor ve formě pole [x, y, z] a vrátí jeho délku.
// Velikost vektoru je dána pythagorovým vzorcem:
//   |(x, y, z)|  =  √(x^2 + y^2 + z^2)
// *pro info: V matematice zápis pro vektor používá kulaté závorky namísto hranatých jako u polí

// Výstup.: Velikost vektoru (3, 4, 5) je rovna 7.071