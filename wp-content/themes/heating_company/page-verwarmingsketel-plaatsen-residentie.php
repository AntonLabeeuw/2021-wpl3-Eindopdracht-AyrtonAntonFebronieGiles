<?php get_header(); ?>

    <main>
        <div class="container">

            <h2><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h2.1'); ?></h2>
            <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.1'); ?></p>
            <a class="o-button o-button-effect o-button-effect-1" href="<?php echo get_theme_mod('setting-plaatsing-residentie-button_link'); ?>"><?php echo get_theme_mod('setting-plaatsing-residentie-button_text'); ?></a>

            <div class="row">
                <div class="col l7 m12">
                    <h2><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h2.2'); ?></h2>
                    <h3><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h3.1'); ?></h3>
                    <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.2'); ?></p>
                    <h3><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h3.2'); ?></h3>
                    <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.3'); ?></p>
                    <h3><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h3.3'); ?></h3>
                    <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.4'); ?></p>
                    <h3><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h3.4'); ?></h3>
                    <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.5'); ?></p>
                    <h3><?php echo get_theme_mod('setting-plaatsing-residentie-txt-h3.5'); ?></h3>
                    <p><?php echo get_theme_mod('setting-plaatsing-residentie-txt-p.6'); ?></p>
                    <a class="o-button o-button-effect o-button-effect-1" href="<?php echo get_theme_mod('setting-plaatsing-residentie-button_link.1'); ?>"><?php echo get_theme_mod('setting-plaatsing-residentie-button_text.1'); ?></a>
                </div>
                <div class="col l5 m12">
                    <img src="<?php echo get_the_post_thumbnail_url()?>" class="c-plaatsen__img" alt="Installatie in een residentie" title="Installatie in een residentie">
                </div>
            </div>
        </div>
        <div class="container-fluid c-banner-contact">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l8">
                        <p class="c-banner-contact-text"><?php echo get_theme_mod('setting-txt-banner'); ?></p>
                    </div>
                    <div class="col s12 m6 l4">
                        <a class="o-button o-button-effect o-button-effect-1 right" href="<?php echo get_theme_mod('setting-txt-btnlink'); ?>"
                ><?php echo get_theme_mod('setting-txt-btn'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>