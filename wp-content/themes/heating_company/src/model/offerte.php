<?php

    class Offerte{

        public $offerte_id;
        public $soort_persoon;
        public $soort_woning;
        public $staat_woning;
        public $huidig_verwarmingstype;
        public $gewenst_verwarmingstype;
        public $wanneer;
        public $voornaam;
        public $naam;
        public $email;
        public $telefoon;
        public $straat;
        public $nummer;
        public $bus;
        public $postcode;
        public $gemeente;
        public $opmerkingen;

        public function __construct($offerte_id = -1, $soort_woning = "", $staat_woning = "", $huidig_verwarmingstype = "", $gewenst_verwarmingstype = "", $wanneer = "", $voornaam = "", $naam = "", $email = "", $telefoon = "", $straat = "", $nummer = 1, $bus = "", $postcode = "", $gemeente = "", $opmerkingen = ""){
            $this->offerte_id = $offerte_id;
            $this->soort_woning = $soort_woning;
            $this->staat_woning = $staat_woning;
            $this->huidig_verwarmingstype = $huidig_verwarmingstype;
            $this->gewenst_verwarmingstype = $gewenst_verwarmingstype;
            $this->wanneer = $wanneer;
            $this->voornaam = $voornaam;
            $this->naam = $naam;
            $this->email = $email;
            $this->telefoon = $telefoon;
            $this->straat = $straat;
            $this->nummer = $nummer;
            $this->bus = $bus;
            $this->postcode = $postcode;
            $this->gemeente = $gemeente;
            $this->opmerkingen = $opmerkingen;

        }
    }

?>