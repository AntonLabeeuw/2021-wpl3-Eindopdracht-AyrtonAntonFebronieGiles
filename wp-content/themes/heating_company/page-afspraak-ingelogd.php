<?php
if (!defined('ABSPATH')) exit;
  get_header(); 
?>
<!-- mijn main -->
<main>
  <div class="container">
    <a class="o-button o-button-nav-active" href="#">Onderhoud</a>
    <a class="o-button o-button-nav" href="http://localhost/ingelogd-installatie/">Installatie</a>
    <a class="o-button o-button-nav" href="">Mijn profiel</a>
    <h1><?php echo get_theme_mod('setting-afspraak-ingelogd-h1'); ?> <?php echo $_SESSION["voornaam"] . " " . $_SESSION["naam"]; ?></h1>
  </div>
  <div class="container-fluid c-banner-klok">
    <p class="c-banner-klok-text">
      Het volgende onderhoud kan gepland worden vanaf
    </p>
    <?php 
      $laatste_onderhoud = $_SESSION["laatste_onderhoud"];
      $volgend_onderhoud_mogelijk = date("Y-m-d", strtotime(date("Y-m-d", strtotime($laatste_onderhoud)) . " + 1 year"));
    ?>
    <p class="c-banner-klok-text-xl"><?php echo $volgend_onderhoud_mogelijk; ?></p>
  </div>
  <div class="container">
    <h2><?php echo get_theme_mod('setting-afspraak-ingelogd-h2'); ?></h2>
    <?php
      $afspraak_gemaakt = $_SESSION["afspraak_gemaakt"];
      if ($afspraak_gemaakt == 0){
        echo '<p>' . get_theme_mod('setting-afspraak-ingelogd-p1') . '</p>';
        echo '<a class="o-button effect effect-1" href="' . get_theme_mod('setting-afspraak-ingelogd-button-link') . '">' . get_theme_mod("setting-afspraak-ingelogd-button-txt") . '</a>';
      }else{
        echo '<p>' . get_theme_mod("setting-afspraak-ingelogd-p2") . '</p>';
        $volgende_afspraak = $_SESSION["volgende_afspraak"];
        echo '<h3>' . $volgende_afspraak . '</h3>';
      }

    ?>

  </div>
  <div class="container-fluid c-banner-contact">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l8">
          <p class="c-banner-contact-text">
            Laat ons weten wat je van The Heating Company verwacht
          </p>
        </div>
        <div class="col s12 m6 l4">
          <a class="o-button effect effect-1 right" href="">Neem contact op</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer( );?>
