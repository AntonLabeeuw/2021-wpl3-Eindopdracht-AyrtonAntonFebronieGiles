<?php get_header(); ?>

        <main>
            <div class="container">
                <h1> Dé absolute verwarmingsspecialist</h1>
                <p>The Heating Company is een ervaren dynamisch bedrijf dat zich specialiseert in plaatsing, onderhoud
                    en
                    herstelling van verwarmings-
                    installaties regio Kortrijk.</p>
                <h2> Ons team</h2>
                <section class="c-team">
                    <?php

                        $arg = array(
                            'post_type' => array ('teamleden'),
                            'nopaging' => false,
                            'posts_per_page' => '6',
                            'order' => 'ASC',
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($arg);

                        if ($query->have_posts()):
                            while ($query->have_posts()):$query->the_post();
                            get_template_part('template-parts/post/content', 'teamlid');
                            endwhile;
                        endif;
                        wp_reset_query();

                    ?>
                </section>
            </div>
            <div class="container-fluid c-banner-contact">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l8">
                            <p class="c-banner-contact-text">Laat ons weten wat je van The Heating Company verwacht</p>
                        </div>
                        <div class="col s12 m6 l4">
                            <a class="o-button o-button-effect o-button-effect-1 right" href="">Neem contact op</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php get_footer(); ?>