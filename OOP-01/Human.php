
<?php
include_once("Animal.php");

class Human extends Animal {
    // Vlastnosti (navíc od rodiče)
    public $pets;
    
    public function __construct($new_name, $new_age){
        // Volán konstruktor rodiče
        parent::__construct($new_name, $new_age);
        
        // To co je navíc oproti rodiči
        $this->pets = []; // Mazlíčci jsou prázdné pole jako výchozí
    }

    // Metody
    public function addPet($pet) {
        $this->pets[] = $pet; // nový prvek pole
        echo "<br> - Přidán mazlíček: " . $pet->name;
    }


    public function sayHi() {
        echo "<br> Ahoj já jsem " . $this->name; 
        echo " a je mi " . $this->age. " let";
    }
}
