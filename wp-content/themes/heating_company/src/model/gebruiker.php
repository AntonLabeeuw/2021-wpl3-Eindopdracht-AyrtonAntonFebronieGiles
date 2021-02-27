<?php

    class Gebruiker{

        public $gebruiker_id;
        public $voornaam;
        public $naam;
        public $gebruikersnaam;
        public $wachtwoord;
        public $email;
        public $telefoon;
        public $straat;
        public $nummer;
        public $bus;
        public $postcode;
        public $gemeente;
        public $soort_gebouw;
        public $installatie;
        public $datum_installatie;
        public $laatste_onderhoud;
        public $staat;
        public $afspraak_gemaakt;
        public $volgende_afspraak;

        public function __construct($gebruiker_id = -1, $voornaam = "", $naam = "", $gebruikersnaam = "", $wachtwoord = "", $email = "", $telefoon = "", $straat = "", $nummer= "", $bus = "", $postcode = "", $gemeente = "", $soort_gebouw = "", $installatie = "", $datum_installatie = 0000-00-00, $laatste_onderhoud = 0000-00-00, $staat = "", $afspraak_gemaakt = 0, $volgende_afspraak = 0000-00-00){
            $this->gebruiker_id = $gebruiker_id;
            $this->voornaam = $voornaam;
            $this->naam = $naam;
            $this->gebruikersnaam = $gebruikersnaam;
            $this->wachtwoord = $wachtwoord;
            $this->email = $email;
            $this->telefoon = $telefoon;
            $this->straat = $straat;
            $this->nummer = $nummer;
            $this->bus = $bus;
            $this->postcode = $postcode;
            $this->gemeente = $gemeente;
            $this->soort_gebouw = $soort_gebouw;
            $this->installatie = $installatie;
            $this->datum_installatie = $datum_installatie;
            $this->laatste_onderhoud = $laatste_onderhoud;
            $this->staat = $staat;
            $this->afspraak_gemaakt = $afspraak_gemaakt;
            $this->volgende_afspraak = $volgende_afspraak;

        }
    }

?>