<?php
/**                         
 *   CVIČENÍ [3] - Pokročilé cykly
 * 
 *  Nějaké typy navíc:
 *   Přečti si vždy celý kód zadání a zkus se zasmyslet co se bude dít. 
 *   Pro osobní testovaní kopíruj kód do svého souboru, zde není validní kód!
 *   Popřípade si zkus vypsat nejakou proměnnou v cyklu nebo mimo něj a dozvíš se víc.
 *      
 */

///     ### ~ Pomocná funkce pro vypisování pole     ///
function pole($jmeno, $pole)
{
    echo "<h1>$jmeno</h1>";
    foreach ($pole as $index => $hodnota): ?>

        <div
            style='box-shadow: 0px 0px 4px 1px grey; position:relative; text-align:center; display:inline-block;width: 90px;height:90px; border: 0px solid grey; border-radius: 7px; margin: 4px;'>
            <div style="font-size: 2em;height: 90%; display: flex;justify-content:center; align-items: center;">
                <?= $hodnota ?>
            </div>
            <span style='margin-left: 7px;font-size: 0.85em;position: absolute; bottom: 5px; left: 5px;'>
                <i> <sub>Index </sub> <?= $index ?></i>
            </span>

        </div>

    <?php endforeach;
}

//////////////////////////////////////////////////////////// 
//////////////////////////////////////////////////////////// 




///     Najdi problém/y a doplň     ///
/* Cyklus má sečíst čísla do určitého maxima s vypočítat průměr */

$maximum = 10;
$vysledek = 1;
for ($i = $maximum; $i != 0; $i--) { 
    echo "+" . $i ;
    $vysledek *= $i;
}
echo(" = $vysledek => PRŮMĚR: ". $vysledek / $i);




///     Najdi problém/y a doplň     ///
/* Tento kód hledá největší prvek pole */
$cisla = [2, 4, 5, 8, 6];
$nejvetsi = 0; // definujeme 0 jako "největší" (čísla jsou nad nulou)
for ($index = 0; $index < count($cisla); $index++) { 
   $aktualniPrvek = $cisla[$index];
   if ($aktualniPrvek < $nejvetsi) {
     $nejvetsi = $aktualniPrvek;
   }
}
echo $nejvetsi;
/* Tento kód má vypsat: 8 */





///     Najdi problém/y a doplň     ///
// Chceme troj-úhelník obrácený špičkou DOLŮ !!!
# # # #
# # #
# #
#
$znakPixelu = '#';
$vyska = 5;
for ($radky = 0; $radky < $vyska; $radky++) {
    // Bude víc a víc znaku na řáešk podle toho kolikátý řádek toe
    $kolikZnakuNaRadek = $radky + 1;
    for ($linka = 0; $linka < $kolikZnakuNaRadek; $linka++) {
        // Na kazdem probehne cyklu pro vypsání znaků za sebou
        echo $znakPixelu . " ";
    }

    // Po dokončení znaků na řádku zakončíme a jdeme na další
    echo '<br>';
}




///     Najdi problém/y a doplň     ///
/* Tento kód hledá spolužáka v poli polí na základě kritérií */

// ASSOC pole se chová jako databáze...
$spoluzaci = [
    [ 
        'jmeno' => "Jan Doležal",
        'pohlavi' => 'muz',
        'prumer' => 5
    ],
    [ 
        'jmeno' => "Anna Brávůrská",
        'pohlavi' => 'zena',
        'prumer' => 3
    ],
    [ 
        'jmeno' => "Radek Pálka",
        'pohlavi' => 'muz',
        'prumer' => 1
    ],
    [ 
        'jmeno' => "Marie Jasná",
        'pohlavi' => 'zena',
        'prumer' => 2
    ],
];

function hledatSpoluzaka($spoluzaci, $pohlavi, $prumernaZnamka) {
    foreach ($spoluzaci as $zak) { 
       if ($zak['pohlavi'] == $pohlavi && $zak['jmeno'] == $prumernaZnamka) {
            return $zak; // Nalezen -> vracíme celé pole žáka
       }
    }
    return false; // NE-nalezen
}

$nalezen = hledatSpoluzaka($spoluzaci, 'muz', 1);
if($nalezen) {
    echo("Našli jsme podle vaších kritérii");
    print_r($nalezen);
} else {
    echo("Nebyl nalezen žádný záznam!");
}
/* Tento kód má najít: Radek Pálka */







///     Najdi problém/y a doplň     ///
/* Potřebujeme seřadit pole a víme že poslední problémem je, 
    aby kazdý prvek který najdeme a položíme dopořadí také zmizel z původního pole!
   Toho dosáhneme pomocí Např. funkce array_splice() 
   Najdeme si definici/dokumentaci funkce a dokončímme následující kód.
*/

function najdi_nejmensi($pole)
{
    $nejmensi = $pole[0];
    for ($i = 0; $i < count($pole); $i++) {
        $aktualni_prvek = $pole[$i];
        if ($aktualni_prvek < $nejmensi) {
            $nejmensi = $aktualni_prvek;
        }
    }
    return $nejmensi;
}

function muj_sort($puvodni)
{
    $ordered = [];

    while (count($ordered) < count($puvodni)) {
        $nejmensi = najdi_nejmensi($puvodni);
        $ordered[] = $nejmensi;
    }

    return $ordered;
}

// Vypíšeme pole před a po našem seřazení
$neserazen = [3, 7, 1, 2, 10];
pole("Neseřazené", $neserazen);

$serazen = muj_sort($neserazen);
pole("Test", $serazen);
