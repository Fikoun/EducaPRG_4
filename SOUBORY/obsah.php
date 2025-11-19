<?php
print_r($obsah);

///////////////////////////
///  ÚKOL - Načti data  ///
///////////////////////////

// ROZEBER OBSAH SOUBORU NA ŘÁDKY A SLOUPCE (mappování)
// - Z původní proměnné $obsah chceme proměnou za každý řádek (pole)
// - Každý řádek bude také pole
// - Sloupce (vlastnosti) jsou jako ASSOC pole


/** VÝSLEDEK
 * 
 * $radky = [
 *      [
 *          "name"  => <jmeno>,
 *          "surname"  => <surname>,
 *          "age"  => <age>,
 *      ],
 *      [
 *          <řádek druhý>
 *      ], [...], [...], ... další řádky
 * 
 * ]
 * 
 * print_r($radky);
 * */