<?php

//database importeren
require_once dirname(__FILE__)."/../database/database.php";
//dataklasse ophalen
require_once dirname(__FILE__)."/../model/contact.php";

class Repository{

    //om een bericht toe te voegen in de tabel contact
    public static function addBericht($parBericht){
        $int = Database::execute("INSERT INTO contact (naam, voornaam, email, telefoon, bericht, privacy) VALUES (?, ?, ?, ?, ?, ?)", [$parBericht->naam, $parBericht->voornaam, $parBericht->email, $parBericht->telefoon, $parBericht->bericht, $parBericht->privacy]);
        return $int;
    }
}

?>