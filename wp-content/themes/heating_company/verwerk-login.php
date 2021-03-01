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
        $_SESSION["voornaam"] = $user->voornaam;
        $_SESSION["naam"] = $user->naam;
        $_SESSION["gebruikersnaam"] = $user->gebruikersnaam;
        $_SESSION["email"] = $user->email;
        $_SESSION["telefoon"] = $user->telefoon;
        $_SESSION["straat"] = $user->straat;
        $_SESSION["nummer"] = $user->nummer;
        $_SESSION["bus"] = $user->bus;
        $_SESSION["postcode"] = $user->postcode;
        $_SESSION["gemeente"] = $user->gemeente;
        $_SESSION["soort_gebouw"] = $user->soort_gebouw;
        $_SESSION["installatie"] = $user->installatie;
        $_SESSION["datum_installatie"] = $user->datum_installatie;
        $_SESSION["laatste_onderhoud"] = $user->laatste_onderhoud;
        $_SESSION["staat"] = $user->staat;
        $_SESSION["afspraak_gemaakt"] = $user->afspraak_gemaakt;
        $_SESSION["volgende_afspraak"] = $user->volgende_afspraak;

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