<?php
session_start();

// require_once dirname(__FILE__)."/src/helper/debug.php";
require_once dirname(__FILE__)."/src/repository/repository.php";
require_once dirname(__FILE__)."/src/model/gebruiker.php";

//controleren of er effectief op de submitbtn geklikt werd
if(isset($_POST["submit"])){
    //controleren of alles werd ingevuld
    if(isset($_POST["voornaam"], $_POST["naam"], $_POST["email"], $_POST["telefoon"], $_POST["straat"], $_POST["nummer"], $_POST["postcode"], $_POST["gemeente"], $_POST["soort_gebouw"], $_POST["installatie"], $_POST["datum_installatie"], $_POST["laatste_onderhoud"], $_POST["staat"], $_POST["gebruikersnaam"], $_POST["wachtwoord"])){

        $gehashtWachtwoord = password_hash($_POST["wachtwoord"], PASSWORD_BCRYPT);

        $nieuweGebruiker = new Gebruiker(null, $_POST["voornaam"], $_POST["naam"], $_POST["gebruikersnaam"], $gehashtWachtwoord, $_POST["email"], $_POST["telefoon"], $_POST["straat"], $_POST["nummer"], $_POST["bus"], $_POST["postcode"], $_POST["gemeente"], $_POST["soort_gebouw"], $_POST["installatie"], $_POST["datum_installatie"], $_POST["laatste_onderhoud"], $_POST["staat"], 0, 0000-00-00);

        $aantalRijen = Repository::createUser($nieuweGebruiker);
        if ($aantalRijen > 0){
            header("location:http://localhost/login/");
            $_SESSION["login"] = "registratieGelukt";
        }
        else{
            echo "toevoegen mislukt";
            print_r_pre($nieuweGebruiker);
        }
    }
    else{
        echo "Er zijn foutieve dingen ingevuld in het formulier";
    }
}
else{
    echo "toevoegen is mislukt";
}

?>