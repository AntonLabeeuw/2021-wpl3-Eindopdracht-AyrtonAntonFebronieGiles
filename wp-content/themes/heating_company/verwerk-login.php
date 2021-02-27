<?php 
session_start();

require_once dirname(__FILE__) . "/src/helper/debug.php";
require_once dirname(__FILE__) . "/src/repository/repository.php";

if (isset($_POST["submit"])){
  echo "is postback";
  $ingegevenGebr = $_POST["gebruikersnaam"];
  $ingegevenWacht = $_POST["wachtwoord"];

  $user = Repository::getUserByLogin($ingegevenGebr);

  if ($user){
    if ($ingegevenWacht == $user->wachtwoord){//password_verify($ingegevenWacht, $user->wachtwoord
        echo "paswoord komt overeen";
        $_SESSION["gebruiker_id"] = $user->gebruiker_id;
        $_SESSION["gebruikersnaam"] = $user->gebruikersnaam;
        $_SESSION["voornaam"] = $user->voornaam;
        $_SESSION["naam"] = $user->naam;
        $_SESSION["laatste_onderhoud"] = $user->laatste_onderhoud;
        $_SESSION["afspraak_gemaakt"] = $user->afspraak_gemaakt;
        $_SESSION["volgende_afspraak"] = $user->volgende_afspraak;

        header("location:http://localhost/afspraak-ingelogd/");
    }else{
        echo "niet overeen";
    }
  }else{
    echo "oei";
  }
  // echo $ingegevenGebr;

}
else{
  echo "nieuw";
}

?>