<?php get_header(); ?>
        <main>
            <div class="container">
                <h1><?php echo get_theme_mod('setting-txt-oplossing-h1'); ?></h1>
                <p><?php echo get_theme_mod('setting-txt-oplossing-p.1'); ?></p>
                <section>   
                    <h2><?php echo get_theme_mod('setting-txt-oplossing-h2.1'); ?></h2>
                    <?php

                        $arg = array(
                            'post_type' => array ('verwarmingsketels'),
                            'nopaging' => false,
                            'posts_per_page' => '10',
                            'order' => 'ASC',
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($arg);

                        if ($query->have_posts()):
                            while ($query->have_posts()):$query->the_post();
                            get_template_part('template-parts/post/content', 'verwarmingsketel');
                            endwhile;
                        endif;
                        wp_reset_query();

                    ?>
                </section>
                <section>
                    <h2><?php echo get_theme_mod('setting-txt-oplossing-h2.2'); ?></h2>
                    <p><?php echo get_theme_mod('setting-txt-oplossing-p.2'); ?></p>
                    <div class="c-logo__cards row">
                        <?php

                            $arg = array(
                                'post_type' => array ('merken'),
                                'nopaging' => false,
                                'posts_per_page' => '6',
                                'order' => 'ASC',
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($arg);

                            if ($query->have_posts()):
                                while ($query->have_posts()):$query->the_post();
                                get_template_part('template-parts/post/content', 'merk');
                                endwhile;
                            endif;
                            wp_reset_query();

                        ?>
                    </div>
                </section>
            </div>
            <div class="container-fluid c-banner-contact">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l8">
                            <p class="c-banner-contact-text"><?php echo get_theme_mod('setting-txt-banner'); ?></p>
                        </div>
                        <div class="col s12 m6 l4 c-banner-contact-btn">
                            <a class="o-button o-button-effect o-button-effect-1 right" href="<?php echo get_theme_mod('setting-txt-btnlink'); ?>"><?php echo get_theme_mod('setting-txt-btn'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php get_footer(); ?>