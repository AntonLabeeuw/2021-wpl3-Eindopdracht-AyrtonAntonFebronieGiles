<?php get_header( );?>
<!-- mijn main -->
<main>
  <div class="container">
    <a class="o-button o-button-nav-active" href="">Onderhoud</a>
    <a class="o-button o-button-nav" href="">Installatie</a>
    <a class="o-button o-button-nav" href="">Mijn profiel</a>
    <h1><?php echo get_theme_mod('setting-afspraak-ingelogd-h1'); ?> Freddy Desmet</h1>
  </div>
  <div class="container-fluid c-banner-klok">
    <p class="c-banner-klok-text">
      Het volgende onderhoud kan gepland worden vanaf
    </p>
    <p class="c-banner-klok-text-xl">22/02/2021</p>
  </div>
  <div class="container">
    <h2><?php echo get_theme_mod('setting-afspraak-ingelogd-h2'); ?></h2>
    <?php
      $i = false;
      if($i == true){
        echo '        
        <p>
        '
        ?>
        <?php echo get_theme_mod('setting-afspraak-ingelogd-p1');
        echo '
        </p>
        <a class="o-button effect effect-1" href="'
        ?>
        <?php echo get_theme_mod('setting-afspraak-ingelogd-button-link');
        echo '">
        '
        ?>
        <?php echo get_theme_mod('setting-afspraak-ingelogd-button-txt');
        echo '
        </a>';

      }else{
        echo '        
        <p>
        '
        ?>
        <?php echo get_theme_mod('setting-afspraak-ingelogd-p2');
        echo '
        </p>
        <h3>
        '
        ?>
        <?php echo get_theme_mod('setting-afspraak-ingelogd-h3');
        echo '
        </h3>';
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
