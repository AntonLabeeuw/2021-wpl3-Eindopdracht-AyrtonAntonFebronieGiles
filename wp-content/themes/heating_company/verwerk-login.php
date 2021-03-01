<?php 
session_start();

require_once dirname(__FILE__) . "/src/repository/repository.php";

if (isset($_POST["submit"])){
  $ingegevenGebr = $_POST["gebruikersnaam"];
  $ingegevenWacht = $_POST["wachtwoord"];

  $user = Repository::getUserByLogin($ingegevenGebr);

  if ($user){
    if (password_verify($ingegevenWacht, $user->wachtwoord)){
        $_SESSION["gebruiker_id"] = $user->gebruiker_id;
        $_SESSION["gebruikersnaam"] = $user->gebruikersnaam;
        $_SESSION["voornaam"] = $user->voornaam;
        $_SESSION["naam"] = $user->naam;
        $_SESSION["datum_installatie"] = $user->datum_installatie;
        $_SESSION["laatste_onderhoud"] = $user->laatste_onderhoud;
        $_SESSION["staat"] = $user->staat;
        $_SESSION["afspraak_gemaakt"] = $user->afspraak_gemaakt;
        $_SESSION["volgende_afspraak"] = $user->volgende_afspraak;
        $_SESSION["installatie"] = $user->installatie;

        header("location:http://localhost/afspraak-ingelogd/");
    }else{
        echo "niet overeen";
    }
  }else{
    echo "oei";
  }
}
else{
  echo "nieuw";
}

?>