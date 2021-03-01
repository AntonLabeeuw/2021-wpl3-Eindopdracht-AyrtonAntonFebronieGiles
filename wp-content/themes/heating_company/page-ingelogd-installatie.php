<?php get_header(); ?>

    <!-- nav voor de user -->
    <div class="container">
        <a class="o-button o-button-nav" href="http://localhost/afspraak-ingelogd/">Onderhoud</a>
        <a class="o-button o-button-nav-active" href="#">Installatie</a>
        <a class="o-button o-button-nav" href="http://localhost/ingelogd-profiel/">Mijn profiel</a>
    </div>

    <!-- verwarmingsoplossingen component-->
    <div class="container">
      <h1>Geïnstalleerde apparatuur in uw woning/residentie </h3>
      <?php

        $arg = array(
            'post_type' => array ('verwarmingsketels'),
            'nopaging' => false,
            'posts_per_page' => '10'
        );

        $query = new WP_Query($arg);

        if ($query->have_posts()):
            while ($query->have_posts()):$query->the_post();
            if (strtolower(get_the_title()) == strtolower($_SESSION["installatie"])){
              get_template_part('template-parts/post/content', 'verwarmingsketel');
            }
            endwhile;
        endif;
        wp_reset_query();

      ?>

      <p>Geïnstalleerd op: <?php echo $_SESSION["datum_installatie"]; ?></br>Laatste onderhoud: <?php echo $_SESSION["laatste_onderhoud"]; ?></br>Staat: <?php echo $_SESSION["staat"]; ?></p>
      </div>
    </div>

   <?php get_footer(); ?>