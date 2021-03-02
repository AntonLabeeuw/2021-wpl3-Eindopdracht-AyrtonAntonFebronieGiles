<?php get_header();?>

    <!-- mijn main -->
    <main class="container">
      <h1><?php echo get_theme_mod('setting-realisaties-h1'); ?></h1>
      <p>
      <?php echo get_theme_mod('setting-realisaties-p1'); ?>
      </p>

      <section class="c-reviews">
        <?php

            $arg = array(
                'post_type' => array ('reviews'),
                'meta_key'     => '_zichtbaarheid',
                'meta_value'   => '1',
                'meta_compare' => '==',
                'nopaging' => false,
                'posts_per_page' => '20',
                'order' => 'ASC',
                'orderby' => 'date'
            );

            $query = new WP_Query($arg);

            if ($query->have_posts()):
                while ($query->have_posts()):$query->the_post();
                get_template_part('template-parts/post/content', 'review');
                endwhile;
            endif;
            wp_reset_query();

        ?>
      </section>

      <section>
        <div class="c-realisaties__btns">
          <?php
            if ($_GET["gebouw"] == "1"){
              ?>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/" class="btn btn__notactive">Alles</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=1" class="btn btn__active">Woningen</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=2" class="btn btn__notactive">Residenties</a>
              <?php
            } elseif ($_GET["gebouw"] == "2"){
              ?>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/" class="btn btn__notactive">Alles</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=1" class="btn btn__notactive">Woningen</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=2" class="btn btn__active">Residenties</a>
              <?php
            } else{
              ?>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/" class="btn btn__active">Alles</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=1" class="btn btn__notactive">Woningen</a>
              <a href="https://wpl3.antonlabeeuw.be/realisatie/?gebouw=2" class="btn btn__notactive">Residenties</a>
              <?php
            }
          ?>
        </div>
        <div class="c-realisaties row">
            <?php

              if ($_GET["gebouw"]){

                if ($_GET["gebouw"] == "1"){
                  $arg = array(
                    'post_type' => array ('realisaties'),
                    'meta_key'     => '_soortGebouw',
                    'meta_value'   => 'woning',
                    'meta_compare' => '==',
                    'nopaging' => false,
                    'posts_per_page' => '20',
                    'order' => 'ASC',
                    'orderby' => 'date'
                  );
                } elseif($_GET["gebouw"] == "2"){
                  $arg = array(
                    'post_type' => array ('realisaties'),
                    'meta_key'     => '_soortGebouw',
                    'meta_value'   => 'residentie',
                    'meta_compare' => '==',
                    'nopaging' => false,
                    'posts_per_page' => '20',
                    'order' => 'ASC',
                    'orderby' => 'date'
                  );
                }
              }
              else{
                $arg = array(
                  'post_type' => array ('realisaties'),
                  'nopaging' => false,
                  'posts_per_page' => '20',
                  'order' => 'ASC',
                  'orderby' => 'date'
                );
              }
                  $query = new WP_Query($arg);

                  if ($query->have_posts()):
                      while ($query->have_posts()):$query->the_post();
                      get_template_part('template-parts/post/content', 'realisatie');
                      endwhile;
                  endif;
                  wp_reset_query();
                  
            ?>
        </div>
      </section>
    </main>

    <!-- banner contact -->
    <div class="container-fluid c-banner-contact">
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l8">
                  <p class="c-banner-contact-text">
                  <?php echo get_theme_mod('setting-txt-banner'); ?>
                  </p>
                </div>
                <div class="col s12 m6 l4 c-banner-contact-btn">
                  <a
                    class="o-button o-button-effect o-button-effect-1 right"
                    href="<?php echo get_theme_mod('setting-txt-btnlink'); ?>"
                ><?php echo get_theme_mod('setting-txt-btn'); ?></a
                  >
                </div>
              </div>
            </div>
    </div>

   <?php get_footer(); ?>