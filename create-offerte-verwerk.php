
<?php
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/helper/debug.php";
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/repository/repository.php";
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/model/offerte.php";

    //controleren of er effectief op de submitknop geklikt werd
    if(isset($_POST["submit"])){
        //controleren of alles werd ingevuld
        if (isset($_POST["eigenaar"], $_POST["soort_woning"], $_POST["woning"], $_POST["huidig_verwarmingstype"], $_POST["gewenst_verwarmingstype"], $_POST["wanneer"], $_POST["voornaam"], $_POST["naam"], $_POST["email"], $_POST["tel"], $_POST["straat"], $_POST["nummer"], $_POST["postcode"], $_POST["gemeente"])){

            $nieuweOfferte = new Offerte(null, $_POST["eigenaar"], $_POST["soort_woning"], $_POST["woning"], $_POST["huidig_verwarmingstype"], $_POST["gewenst_verwarmingstype"], $_POST["wanneer"], $_POST["voornaam"], $_POST["naam"], $_POST["email"], $_POST["tel"], $_POST["straat"], $_POST["nummer"], $_POST["bus"], $_POST["postcode"], $_POST["gemeente"], $_POST["opmerkingen"]);
            $aantalRijen = Repository::addOfferte($nieuweOfferte);
            if ($aantalRijen > 0){
                header("location:page-offerte.php");
            }
            else{
                echo "Offerte versturen mislukt";
            }
        }
        else{
            echo "Je hebt foutieve gegevens meegegeven";
        }
    }
    else{
        echo "Versturen mislukt";
    } 
?>


