<?php
/****---------------------****/
/***     TAHÁK (v1.5.0)    ***/
/**-------------------------**/
/**                         
 *  Základní tahákový mustr, takových najdete na internetu mnoho.
 *  Zde naleznete ty základy co jsme probírary a budou se vám hodit. Taky něco navíc (označeno pluskem //+)
 *  Je důležité si uvědomovat že v kódu vše vždy běží od zvrchu dolů "řádek po řádku" !
 *  Přemyšlet nad tím co dělám a čeho chci dosáhnout je klíčové, aby jsme si mohli uvědomit jaké struktury/nástroje k tomu máme dostupné !!!
 *  Popřípadě vždy stačí vygooglit specifiký problém/pojem a máme 🙌
 *  Nejlepší je si vždy spustit/otestovat to čemu nerozumím a odtamtud hledat o co se jedná dál...
 */

///  Vypsání do console či prohlížeče   ///
echo ("Toto je muj vypsaný String!"); // nebo s proměnou echo($prom)

// Taky máme print_r, který dokáže vypsat i jiné než jeno text/číslo
print_r($prom);
print_r(["Tady", "muzu", "vypsat", "třeba", "pole"]);

// A nebo var_dump
var_dump(1.2); //+ Vypíše typ a obsah proměnné => float(1.2)


///////////////////////////////////////////////////
///     PROMĚNNÉ - jednoduché datové typy      ///
///////////////////////////////////////////////////

// Pravdivostní
$jeStudent = true; //  true || false

//+ NULLová hodnota (alias "nic")
$prazdna_hodnota = null;
$prazdna_hodnota; // vytvoří prázdnou proměnnou

// Číselné hodnoty [ INT, FLOAT ]
$vek = 24;
$desetine = 5.879;
$pi3_14 = pi(); //+ funkce matematická hodnota PI 

// Řetězec (String)
$string = "Ahoj jak se máš";

// Pole jako seznam věcí (Array)
$zaci = [6, 5, 9, 1, 3];
$zaci = [123, "neco", false, pi(), $vek];

//+ Konstanta - nezměnitelná hodnota bez dolaru $
define('HESLO_DO_DATABAZE', "123456789");
echo HESLO_DO_DATABAZE;



///////////////////////////////////////////////////
///     OPERACE - manipulace s dat. typy       ///
///////////////////////////////////////////////////

// Počítání s čísly
$vysledek = $cele + 5; // Dalš operace:  +  -  *  -  /
$zbytek = 13 % 5; // znak modulo -> zbytek po deleni

// Skládáme rovnice pomocí závorek
$v = 3 + 6 - ($cislo * 3) / $desetine;

$v = pow($zaklad, $mocnina); //+ Mocnina
$squareRoot = sqrt($zaklad); //+ Druhá odmocnina

// Zaokrouhlujeme round(), zaokr. nahoru ceil() a dolu floor()
// Modifikace proměnné [ +=  -=  /=  *= ]
$desetine += 10.2; // přičte a uloží
$desetine /= 2; // vydělí a uloží
$desetine++; $desetine--; // Přídá++ či Odebere-- číslo jedna

// Manipulace s řetězci (String)
$jmeno = "Pavle"; // Uvozovky dvojího typu ( " / ' )
$jmeno = 'Pavle';
$pozdrav = "Hello" . "World" . "<br>"; // Skládání tečkou (A . B)
// Skládání s proměnou
$pozdrav = "Ahoj, jak se máš " . $jmeno;

//+ Vložená proměnná (! pozor funguje pouze u dvojtých uvozovek "$prom")
$pozdrav = "Ahoj, jmenuji se $jmeno. Je mi $vek,";

// Modifikace proměnné stringu [ .= ]
$pozdrav .= " bydlím na moravě a tancuju polku.";



////////////////////////////////////////////
///     PODMÍNKY - logické operace       ///
////////////////////////////////////////////
// Podmínka dokáže pouze pracovat s pravdou/nepravdou
// Musím tedy nakládat s operátory porovnávání nebo skládat logické operátopry
// Např.: == (rovnost), != (nerovno), > (vetší), <= (menší a rovno)

// Logické operátory (jako v matematice výroky)
$pravda = true;
$nepravda = false;
$and = $pravda && $nepravda; // OBA musí být pravdou
$or = $pravda || $nepravda; // ALESPON JEDEN musí být pravdou

// Také můžeme skládat pomocí závorek ()
$maPropustku = false;
$slozene = ($pass == "heslo" && $vek >= 21) || $maPropustku;

// Lze se takto zeptat i na proměnnou
if ($slozene) {
    // Kód vykonaný v případě pravdy if,
    // pokud je nepravdívý, blok je přeskočen!
}


// Příklady else { } a podmínky v podmínkce
$vek = 55;
if ($vek < 15) {
    echo 'dítě';
} else { // Čistý else v případě ze neplatí if()

    if ($vek < 15) {
        echo 'teenager';
    } else if ($vek > 18) { // Druhá podmínka když neplatí if
        echo 'dospělí';
        
    } else { // Samotný else BEZ ZAVOREK () !!
        //... pokud neplatí ani jeden if nebo else if (libovolný počet elseifů)
    }

}


////////////////////////////////////////////
///     CYKLY - looping / opakování      ///
////////////////////////////////////////////
// Cyklus je jako podmínka jenom se jeji obsah může vykonat víckrát
// Základní cyklus je while()
while ($dokudPravda) {
    // ZDE Kód,
    // Co
    // Se
    // Opakuje! dokud platí podmínka
}
// Např.:
$pocitadlo = 10;
while ($pocitadlo != 0) {
    echo $pocitadlo; // Vypíše každé druhé číslo od 10
    $pocitadlo -= 2; // Kdybychom hodnotu nezměnily nikdy by cyklus nepřestal
}
echo "Vypíše se pouze jendou"; // Cyklus skončí } a pokračuje

///////////////////
///  for cykly  ///
///////////////////
// Pro lepší ovládání používáme "for loops"
for ($pocitadlo = 10; $pocitadlo != 0; $pocitadlo--) {
    echo $pocitadlo . "<br>"; // Vypíše každé číslo na řádek
}

#
##
###
####
// Příklad: Cyklus v Cyklu (2-render stromeček)
$znakPixelu = '#';
$vyska = 5;
for ($radky = 0; $radky < $vyska; $radky++) {
    // Bude víc a víc znaku na řáešk podle toho kolikátý řádek toe
    $kolikZnakuNaRadek = $radky + 1;

    for ($linka = 0; $linka < $kolikZnakuNaRadek; $linka++) {
        // Na kazdem probehne cyklu pro vypsání znaků za sebou
        echo $znakPixelu;
    }

    // Po dokončení znaků na řádku zakončíme a jdeme na další
    echo '<br>';
}
// !nad tímto příkladem je ukázka stromečku/trojúhelníku ze znaků



//////////////////////////////////////
///     POLE - list / seznam      ///
/////////////////////////////////////
/// DŮLEŽITÝ Koncept! - vše je založené na polých (anglicky ARRAY)
// Můžeme sepsat uživatele, produkty, itemy nebo čísla ke spočítání výdělků
$cisla = [3, 7, 9, 1, 10];
$jmena = ["Pepa", "Anna", "Greq"];

// Vloží nový prvek na konec!
$jmena[] = "Honza"; // ["Pepa", "Anna", "Greq", "Honza"]

// Ke konkrétnímu prvku pole přistoupíme takto
$jmena[0]; // nultý index je první člen/prvek
// Můžeme..
$jmena[0] = "Pepina"; // změní prvek 
$jmena[0] *= "Pepina"; // vynásobit (vydelit, secist, odecist, atd..)

// Pozor na rozdíl !!!
print_r($jmena[0]); // vypíše prvního => "Pepa"
print_r($jmena); // nebo vypíšeme celé pole ["Pepa", "Anna", "Greq"]


///     JAK RUČNĚ VYPSAT POLE      ///
$pocet = count($jmena);
for ($index = 0; $index < $pocet; $index++) {
    echo "Jmeno: " . $jmena[$index] . "je na indexu" . $index;
    echo "<br>";
}


///     JAK SEČÍST POLE      ///
$pocetCisel = count($cisla);
$celkem = 0; // zacneme na nule a budeme přičítat
for ($i = 0; $i < $pocetCisel; $i++) {
    $prvek = $cisla[$i];
    $celkem += $prvek;
}
echo "Součet: " . $celkem;
echo "Průměr: " . ($celkem / $pocetCisel);


/////////////
// FOREACH //
/////////////
// Namísto klasického for() použijeme foreach($array as $prvek)
// Jednoduší stavba, ale menší kontrola na cyklem
foreach ($jmena as $konkretniJmeno) {
    echo $jmeno . ', '; // Vypíšeme včechny prvky
}


///     JAK SEČÍST POLE      ///
// Oproti kódu for() je jednodužší (viz. víše)
$celkem = 0;
foreach ($jmena as $prvek) {
    $celkem += $prvek;
}
