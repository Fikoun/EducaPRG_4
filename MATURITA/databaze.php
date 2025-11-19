<?php
/// Databáze ///
// Trénujte SQL dotazy, CRUD operace (INSERT, SELECT, UPDATE, DELETE), JOIN, GROUP BY, ORDER BY
// Také pozor na zadání které může být ve formě UML diagramu
// Je důležité ukládat dotazy a příkazy které jste použili do souboru pro pozdější kontrolu

// Dostanete prázný MySQL server a uživatele s heslem (připojení pomocí příkazu mysql -u root -p)
// Vytvoříte si tabulky potřebné pro zadání a budete s nimi pracovat podle zadání (dodržujeme NORMALIZACI 1-3NF)


/// Příklad ///
// Máme databázi obsahující se známkami a studenty:
$GradeTable = "CREATE TABLE grades (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    student_id INT,
    subject VARCHAR(100),
    grade INT,

    FOREIGN KEY (student_id) REFERENCES students(id)
)";

$StudentTable = "CREATE TABLE students (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    surname VARCHAR(100),
    age INT
)";

// Napiště SQL dotazy, které získají následující informace:
//      1. Všechny jména studentů, kteří mají známku větší než 3
//      2. Nejlepší známku z studenta "Jan Novák"
//      3. Všechny známky z Matematiky a žáka, který k nim patří

$reseni1 = "SELECT name FROM students WHERE id IN (SELECT student_id FROM grades WHERE grade > 3)";
$reseni2 = "SELECT MAX(grade) FROM grades WHERE student_id IN (SELECT id FROM students WHERE name = 'Jan' AND surname = 'Novák')";
$reseni3 = "SELECT grade FROM grades WHERE subject = 'Matematika' AND student_id IN (SELECT id FROM students)";
