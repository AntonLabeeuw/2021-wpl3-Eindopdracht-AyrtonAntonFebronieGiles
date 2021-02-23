<?php get_header();?>

    <!-- mijn main -->
    <main class="container">
      <h1>Realisaties en referenties</h1>
      <p>
        Bekijk hier enkele realisaties van installaties van verwarmingsketels en
        kom te weten wat klanten over ons zeggen.
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
          <button type="button" class="btn btn__active">Alles</button>
          <button type="button" class="btn btn__notactive">Woning</button>
          <button type="button" class="btn btn__notactive">Residenties</button>
        </div>
        <div class="c-realisaties row">
            <?php

                $arg = array(
                    'post_type' => array ('realisaties'),
                    'nopaging' => false,
                    'posts_per_page' => '20',
                    'order' => 'ASC',
                    'orderby' => 'date'
                );

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
                    Laat ons weten wat je van The Heating Company verwacht
                  </p>
                </div>
                <div class="col s12 m6 l4">
                  <a
                    class="o-button o-button-effect o-button-effect-1 right"
                    href=""
                    >Neem contact op</a
                  >
                </div>
              </div>
            </div>
    </div>

   <?php get_footer(); ?>