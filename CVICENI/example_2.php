<?php
/**                         
 *   CVIČENÍ [2] - Pokročilé cykly
 *      ~ pokročilé cykly, dvojitý for() a práce s polem  
 *      ~ cvičení obsahuje 2 zadání a 3 příklady k opravení
 *      ~ chcete-li získat známku navíc před prvním testem vyplňte a odešlete do konce praxí
 * 
 *  Nějaké typy navíc:
 *   Přečti si vždy celý kód zadání a zkus se zasmyslet co se bude dít. 
 *   Pro osobní testovaní kopíruj kód do svého souboru, zde není validní kód!
 *   Popřípade si zkus vypsat nejakou proměnnou v cyklu nebo mimo něj a dozvíš se víc.
 *      
 */


///     #1 ~ Průměr pole      ///
// Sestav cyklus sečte čísla v poly a udělá průměr hodnot
$cisla = [2, 4, 5, 8, 6]; // (2 + 4 + 5 + 8 + 6) / 5 = 5
$soucet = 0;
for () {
    /* code */
}
echo "...";
/* Tento kód vypíše: 5 */



///     #2 ~ Násobící tabulka    ///
// Sestav cyklus, který vygeneruje násobící tabulku čísel 1 až 4.
/**
 * 1 2 3 4
 * 2 4 6 8  
 * 3 6 9 12 
 * 4 8 12 16 
 */
for () {
    for () {
      
    }
}




/**                         
 *      OPRAVOVAČKA - najdi chybu nebo dodělej co chybí
 *  Dobré je konrolovat jesli kód vypisuje co má,
 *  popřípadě si ručně spočítat coby se mělo stát.
 *  Vždy je více způsobů řešení.. nebojte se experimentovat!
 */


///     #1 ~ Maximum v poli      ///
// Tento kód hledá největší prvek pole
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


///     #2 ~ Zobrazení trojúhelníku      ///
// Chceme troj-úhelník obrácený špičkou DOLŮ !!!
# # # #
# # #
# #
#
// Příklad z cheatsheet souboru.:
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


///     #3 ~ Najdi spolužáka      ///
// Tento kód hledá spolužáka v poli polí na základě kritérií
// Všimněte si že vnější pole obsahuje jednotlivé žáky jako "entity" zapsané v ASSOC poli
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
function hledatSpoluzaka($pohlavi, $prumernaZnamka) {
    // POZOR! ~ proměnnou zvenku funkce nelze používat
    // MÁME TŘI MOŽNOSTI:
    //      (A) Přesunout definici $spoluzaci do funkce
    //      (B) Poslat proměnnou do funkce jako argument hledatSpoluzaka($spoluzaci, $pohlavi, $prumernaZnamka)
    //      (C) Použít slovíčko 'global', které zpřístupní venkovní proměnnou
    //+ tomuto se říká Scope neboli Rámec ve kterém se hodnota nachází (zvenku, zfunkce, z objektu)
    global $spoluzaci;

    foreach ($spoluzaci as $zak) { 
       if ($zak['pohlavi'] == $pohlavi && $zak['jmeno'] == $prumernaZnamka) {
            return $zak; // Nalezen -> vracíme celé pole žáka
       }
    }
    return false; // NE-nalezen
}

$nalezen = hledatSpoluzaka('muz', 1);
if($nalezen) {
    echo("Našli jsme podle vaších kritérii");
    print_r($nalezen);
} else {
    echo("Nebyl nalezen žádný záznam!");
}
/* Tento kód má najít: Radek Pálka */




//////////////////////////////////
/* SUPER dostal ses az na konec */
//////////////////////////////////
