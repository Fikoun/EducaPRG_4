
<?php
include_once("Animal.php");

class Pet extends Animal{
    // Vlastnosti
    public $type;

    public function __construct($new_name, $new_age, $new_type){
        // Volán konstruktor rodiče
        parent::__construct($new_name, $new_age);

        $this->type = $new_type;
    }

    // Metody
    public function makeSound() {
        echo "<br> ". $this->name ." dělá zvuk: ";
        switch ($this->type) {
            case 'dog':
                echo "bark";
                break;

             case 'cat':
                echo "meow";
                break;

            case 'sheep':
                echo "beee";
                break;

            case 'GOAT':
                echo "siiiiiiiiiii";
                break;
        }
    }

}

