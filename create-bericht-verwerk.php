
<?php
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/helper/debug.php";
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/repository/repository.php";
    require_once dirname(__FILE__)."/wp-content/themes/heating_company/src/model/contact.php";

    //controleren of er effectief op de submitknop geklikt werd
    if(isset($_POST["submit"])){
        //controleren of alles werd ingevuld
        if (isset($_POST["naam"], $_POST["voornaam"], $_POST["email"], $_POST["tel"], $_POST["opmerkingen"], $_POST["privacy"])){
            //controleren of privacy werd aangevinkt
            if(isset($_POST["privacy"])){
                $privacy = 1;
            }
            else{
                $privacy = 0;
            }

            $nieuwBericht = new Contact(null, $_POST["naam"], $_POST["voornaam"], $_POST["email"], $_POST["tel"], $_POST["opmerkingen"], $privacy);
            $aantalRijen = Repository::addBericht($nieuwBericht);
            if ($aantalRijen > 0){
                header("location:page-contact.php");
            }
            else{
                echo "Bericht versturen mislukt";
            }
        }
        else{
            echo "Je hebt foutieve data ingevuld in het formulier";
        }
    }
    else{
        echo "Versturen mislukt";
    } 
?>


