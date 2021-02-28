<?php

//database importeren
require_once dirname(__FILE__)."/../database/database.php";
//dataklasse ophalen
require_once dirname(__FILE__)."/../model/gebruiker.php";

class Repository{

    //om gebruiker op te vragen op basis van gebruikersnaam
    public static function getUserByLogin($login){
        $item = Database::getSingleRow("SELECT * FROM gebruikers WHERE gebruikersnaam=?" , [$login], "Gebruiker");
        return $item;
    }

    //om gebruiker toe te voegen
    public static function createUser($parUser){
        $res = Database::execute("INSERT INTO gebruikers (voornaam, naam, gebruikersnaam, wachtwoord, email, telefoon, straat, nummer, bus, postcode, gemeente, soort_gebouw, installatie, datum_installatie, laatste_onderhoud, staat, afspraak_gemaakt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$parUser->voornaam, $parUser->naam, $parUser->gebruikersnaam, $parUser->wachtwoord, $parUser->email, $parUser->telefoon, $parUser->straat, $parUser->nummer, $parUser->bus, $parUser->postcode, $parUser->gemeente, $parUser->soort_gebouw, $parUser->installatie, $parUser->datum_installatie, $parUser->laatste_onderhoud, $parUser->staat, $parUser->afspraak_gemaakt, $parUser->volgende_afspraak]);
        return $res;
    }

}

?>