<?php
/**                         
 *   CVIČENÍ - Základní cykly
 *      ~ cvičení obsahuje 3 zadání a 3 příklady k opravení
 *      ~ zadání obsahují základ, který můžete ale nemusíte použít
 *      ~ chcete-li získat známku navíc před prvním testem vyplňte a odešlete do konce praxí
 *
 *  Nějaké typy navíc:
 *   Přečti si vždy celý kód zadání a zkus se zasmyslet co se bude dít. 
 *   Pro osobní testovaní kopíruj kód do svého souboru, zde není validní kód!
 *   Popřípade si zkus vypsat nejakou proměnnou v cyklu nebo mimo něj a dozvíš se víc.
 *      
 */


///     #1 ~ Násobky      ///
// Sestav cyklus co vypíše násobky daného čísla
$zaklad = 7; // čislo jehož násobky chceme
$max = 30; // Maximum do kdy se násobí
for () {
    /* code */
}
/* Tento kód vypíše: 7, 14, 21, 28 */



///     #2 ~ Součet čísel      ///
// Sestav cyklus co sečte čísla do určitého maxima
$max = 9;
$soucet = 0;
for () {
    /* code */
}
echo("Vysledek: ". $soucet); // 45 = 1+2+3+4+5+6+7+8+9



///     #3 ~ Dělitelnost do 10     ///
// Sestav kód co kontroluje dělitelnost čísla čísly od 1 do 10
// Např.: vstup -> 18
//        je dělitelne 2, je dělitelne 3, není dělitelné 4, ... 10

$vstup = 18;
for () {
    /* code */
}
/** nápověda.. když se zamyslíme dá se využít % (modulo) 
*   tedy pokud vyjde zbytek po dělení 0, tak je číslem dělitelné..
*       (18 % 3) == 0 -> true   ~  zbytek 0 => dělitelné
*       (18 % 4) == 0 -> false  ~  zbytek 2 => nedělitelné
*/




/**                         
 *      OPRAVOVAČKA - najdi chybu nebo dodělej co chybí
 *  Dobré je konrolovat jesli kód vypisuje co má,
 *  popřípadě si ručně spočítat coby se mělo stát.
 *  Vždy je více způsobů řešení.. nebojte se experimentovat!
 */

///     #1 ~ Odpočítávání      ///
// Tento kód má vypsat čísla od 10 do 1 (směrem dolů!)
for ($pocitadlo = 0; $pocitadlo < 10; $pocitadlo += 1) {
    echo $pocitadlo . " "; // Vypíše každé číslo na řádek
}
// Očekáváme: 10 9 8 7 6 5 4 3 2 1



///     #2 ~ Faktoriál čísla      ///
// Cyklus počítá faktoriál:  5 * 4 * 3 * 2 * 1  =>  5! = 120 
$vstup = 5;
$vysledek = 0;
for ($i = 1; $i <= 5; $i++) { 
    $vysledek *= $i;
}
echo("$vstup! = ". $vysledek);



///     #3 ~ Lichá a Suchá       ///
// Sečteme zvlášť sudá a zvlášť všechna lichá čísla do 10
$soucetLich = 0;
$soucetSud = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        $soucetSud += $i;
    }else {
        $soucetLich += $i;
    }
}
echo("<br> Součet lichých čísel je: " . $soucetLich);
echo("<br> Součet sudých čísel je: " . $soucetSud);



