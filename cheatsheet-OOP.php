<?php
/****---------------------****/
/***       TAHÁK OOP       ***/
/**-------------------------**/
/**  
 * Níže je příklad jednoduchého OOP kódu, který simuluje RPG hru.
 *                        
 *  Mimo základ OOP syntaxe by bylo dobré vědět a popsat:
 *     - Co je to třída a co objekt
 *     - Co je to metoda a čím se liší od funkce
 *     - Kdy vzniká instance objektu (jaká metoda ho skládá)
 *     - Význam proměnné "$this" a na co odkazuje
 *     - Zapouzdření a rozdíl mezi private/public
 *     - K čemu a kdy vytvářet getter/setter
 *     - Co je to dědičnost a jak mohu vytvořit potomka (child)
 * 
 *  Důležité chápat Rámec (SCOPE)  ->  Neboli KDE se nějaká část kódu nachází [funkce, metoda, objekt, globalní rámec]
 *  Přemyšlet nad tím co dělám a čeho chci dosáhnout je klíčové, aby jsme si mohli uvědomit jaké struktury/nástroje k tomu máme dostupné !!!
 *  Dokážu vygooglit specifiký problém/pojem (php.net, w3school, stackoverflow, chatgpt/gemini, atd) 🙌
 *  Nejlepší je si vždy spustit/otestovat kousek a přidávat postupně...
 */


// Rodičovská třída "bytosti" např. z pohledu hry
class Entity {
    // Základní vlastnosti této třídy na kterých budeme stavět
    public $name;

    // Protected vlastnosti, 
    //  které nechceme měnit zvenčí, ale budou dostupné z potomků (children)
    protected $health;
    protected $damage;


    // Konstruktor - zavolaný při vytvoření instance
    function __construct($name) {
        $this->name = $name;
        // Ne vždy musíme předat hodnot -> můžeme nastavit výchozí hodnoty
        $this->health = 100;
        $this->damage = 1;
    }

    // Metoda pro vypsání stavu entity
    public function printInfo() {
        echo "<br>~ $this->name ~ <br>";
        echo "HP: $this->health <br>";
        echo "DMG: $this->damage <br>";
    } 

    // Metoda pro zjištění stavu života
    public function isAlive() {
        return $this->health > 0;
    }


    // Metoda pro útok na jinou entitu 
    //   ! všimněte si, že metoda přijímá objekt typu Entity (zde musíme zadat typ proměnné)
    public function attack(Entity $target) {
        $damage = $this->damage;

        echo $this->name . " ~~~> " . $target->name;
        echo " -$damage HP <br>";

        $target->health -= $this->damage;
    }
}



// Dědičnost - třída nepřítel dědí vlastnosti a metody z třídy "Entity"
class Enemy extends Entity {
    // Přidáváme nové vlastnosti
    public $deathSound;

    function __construct($name, $health, $damage, $deathSound) {
        // Přidáváme nové vlastnosti
        $this->deathSound = $deathSound;

        // Nastavíme vlastnosti z rodičovské třídy
        $this->health = $health;
        $this->damage = $damage;
        $this->name = $name;

        // Můžeme taky volat původní konstruktor rodiče,
        //  zde není třeba jelikož všechny hodnoty jsou nastaveny
        //parent::__construct($name);
    }

    // Přepisujeme metodu z rodičovské třídy
    public function printInfo() {
        echo "<br>~ $this->name ~ <br>";
        echo "HP: $this->health <br>";
        echo "DMG: $this->damage <br>";
    }

    // Přepisujeme metodu smrti
    public function isAlive() {
        if ($this->health <= 0) {
            echo "<br> $this->deathSound <br>";
            return false;
        }
        return true;
    }
}


// Dědičnost - třída "hráč" dědí vlastnosti a metody z třídy "Entity"
class Player extends Entity {
    // Přidáváme nové vlastnosti
    public $level = 1; // Zde taky můžeme nastavit výchozí hodnotu

    // POKUD NEPOTŘEBUJEME KONSTRUKTOR, NEMUSÍME HO PŘEPISOVAT
    // function __construct() { ... }

    // Přepisujeme metodu z rodičovské třídy
    public function printInfo() {
        echo "<br>~ $this->name ~ <br>";
        echo "HP: $this->health <br>";
        echo "DMG: $this->damage <br>";
        echo "LVL: $this->level <br>";
    }

    // Přidáváme novou metodu
    public function levelUp() {
        $this->level++;
        $this->health += 10;
        $this->damage += 2;
    }
}


//////////////////////////////////
/// SESTAVENÍ HERNÍCH OBJEKTŮ  ///
//////////////////////////////////

// Vytvoření instance objektu "hráč"
$player = new Player("Hráč");
$player->printInfo();
$player->levelUp();

// Vytvoření instance objektu "nepřítel"
$enemy = new Enemy("Nepřítel", 50, 5, "Aaaaaaargh");
$enemy->printInfo();




////////////////////
///  HRA ZAČÍNÁ  ///
////////////////////

// Deathmatch loop -> dokud jsou oba živí, útočí na sebe
$round = 1;
while ($player->isAlive() && $enemy->isAlive()) {
    echo "<h3> ROUND $round </h3>";
    
    $player->attack($enemy);
    $enemy->attack($player);

    $round++;
    echo "<hr>";
}

// Výsledek hry
if ($player->isAlive()) {
    echo "<h1> VYHRÁL JSI </h1>";
} else {
    echo "<h1> PROHRÁL JSI </h1>";
}
