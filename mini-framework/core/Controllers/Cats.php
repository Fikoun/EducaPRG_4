<?php

namespace Controllers;
use View;

class Cats {

    public function main() {
        /// CONNECT TO DB AND GET ALL CATS

        View::render("cats");
    }


    public function catId() {

        /// CONNECT TO DB AND GET CAT $_GET["id"]

        echo "<h2>Cat with id: " . $_GET["id"] . "</h2>";

        echo "<br><br> <a href='/cats'>Back to cats list</a>";
    }

    public function add() {

        // AFTER FORM IS SENT
        if(isset($_POST["name"])) {
            $name = $_POST["name"];
            /// CONNECT TO DB AND ADD NEW CAT
            return;
        }

        echo "<h2>Add a new cat</h2>";

       echo "<form method='POST' action='/cats/add'>
           <input type='text' name='name' placeholder='Cat Name' required>
           <input type='submit' value='Add Cat'>
       </form>";
    }

    /// Přidat metodu pro smazání kočky
    /// Přidat metodu pro editování kočky

}