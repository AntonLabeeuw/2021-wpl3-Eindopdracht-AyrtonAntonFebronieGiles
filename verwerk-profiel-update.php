<?php 
session_start();

    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/helper/debug.php";
    require_once dirname(__FILE__) . "/wp-content/themes/heating_company/src/repository/repository.php";
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/model/gebruiker.php";

    if(isset($_POST["submit"])){
        $gebruiker = new Gebruiker($_SESSION["gebruiker_id"], $_POST["voornaam"], $_POST["naam"], $_POST["gebruikersnaam"], $_SESSION["wachtwoord"], $_POST["email"], $_POST["telefoon"], $_POST["straat"], $_POST["nummer"], $_POST["bus"], $_POST["postcode"], $_POST["gemeente"], $_POST["soort_gebouw"], $_POST["installatie"], $_POST["datum_installatie"], $_POST["laatste_onderhoud"], $_POST["staat"], $_SESSION["afspraak_gemaakt"], $_SESSION["volgende_afspraak"]);
        // echo ($gebruiker);

        $aantalRijen = Repository::updateGebruiker($gebruiker);
        if($aantalRijen > 0){
            $_SESSION["gebruikersnaam"] = $_POST["gebruikersnaam"];
            header("location:http://localhost/afspraak-ingelogd/");
        }
        else{
            echo "er zijn geen records aangepast";
        }
    }

?>