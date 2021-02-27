<?php

//database importeren
require_once dirname(__FILE__)."/../database/database.php";
//dataklasse ophalen
require_once dirname(__FILE__)."/../model/contact.php";
require_once dirname(__FILE__)."/../model/gebruiker.php";

class Repository{

    //om een bericht toe te voegen in de tabel contact
    public static function addBericht($parBericht){
        $int = Database::execute("INSERT INTO contact (naam, voornaam, email, telefoon, bericht, privacy) VALUES (?, ?, ?, ?, ?, ?)", [$parBericht->naam, $parBericht->voornaam, $parBericht->email, $parBericht->telefoon, $parBericht->bericht, $parBericht->privacy]);
        return $int;
    }

    //om een offerte toe te voegen in de tabel offerte
    public static function addOfferte($parOfferte){
        $int = Database::execute("INSERT INTO offertes (soort_persoon, soort_woning, staat_woning, huidig_verwarmingstype, gewenst_verwarmingstype, wanneer, voornaam, naam, email, telefoon, straat, nummer, bus, postcode, gemeente, opmerkingen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$parOfferte->soort_persoon, $parOfferte->soort_woning, $parOfferte->staat_woning, $parOfferte->huidig_verwarmingstype, $parOfferte->gewenst_verwarmingstype, $parOfferte->wanneer, $parOfferte->voornaam, $parOfferte->naam, $parOfferte->email, $parOfferte->telefoon, $parOfferte->straat, $parOfferte->nummer, $parOfferte->bus, $parOfferte->postcode, $parOfferte->gemeente, $parOfferte->opmerkingen]);
        return $int;
    }

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