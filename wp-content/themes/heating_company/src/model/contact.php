<?php

    class Contact{

        public $bericht_id;
        public $voornaam;
        public $naam;
        public $email;
        public $telefoon;
        public $bericht;
        public $privacy;

        public function __construct($bericht_id = -1, $voornaam = "", $naam = "", $email = "", $telefoon = "", $bericht = "", $privacy = false){
            $this->bericht_id = $bericht_id;
            $this->voornaam = $voornaam;
            $this->naam = $naam;
            $this->email = $email;
            $this->telefoon = $telefoon;
            $this->bericht = $bericht;
            $this->privacy = $privacy;
        }
    }

?>