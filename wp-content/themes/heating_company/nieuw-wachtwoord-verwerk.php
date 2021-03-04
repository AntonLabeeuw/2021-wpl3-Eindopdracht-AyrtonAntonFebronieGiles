<?php 
session_start();

require_once dirname(__FILE__) . "/src/repository/repository.php";

if (isset($_POST["submit"])){
    $oudWachtwoord = $_POST["oudWachtwoord"];
    $nieuwWachtwoord = $_POST["nieuwWachtwoord"];
    $nieuwWachtwordBevestiging = $_POST["nieuwWachtwoordBevestiging"];

    if (password_verify($oudWachtwoord, $_SESSION["wachtwoord"])){
        if ($nieuwWachtwoord == $nieuwWachtwordBevestiging){
            $gehashtWachtwoord = password_hash($nieuwWachtwoord, PASSWORD_BCRYPT);


            $aantalRijen = Repository::UpdateLogin($gehashtWachtwoord, $_SESSION["gebruiker_id"]);

            if ($aantalRijen > 0){
                $_SESSION["login"] = "wachtwoordGewijzigd";
                header("location:http://localhost/afspraak-ingelogd/");
            }
            else{
                echo "er zijn geen records aangepast";
            }  
        }
        else{
            $_SESSION["login"] = "foutBevestiging";
            header("location:http://localhost/wachtwoord-wijzigen/");
        }
    }else{
        $_SESSION["login"] = "foutOudWachtwoord";
        header("location:http://localhost/wachtwoord-wijzigen/");
    }
}
else{
  echo "nieuw";
}

?>