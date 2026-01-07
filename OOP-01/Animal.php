
<?php

// Rodičovská třída (dědíme pomocí "extends")
class Animal {
    // Vlastnosti
    public $name;
    public $age;

    public function __construct($new_name, $new_age){
        $this->name = $new_name;
        $this->age = $new_age;
    }

    // Metody
    public function celebrateBirthday(){
        echo "<br>Happy B-DAY " . $this->name . "<br>";
        $this->age++;
    }
}

