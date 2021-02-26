<?php get_header(); ?>

    <main>
        <div class="container">
        <h1><?php echo get_theme_mod('setting-plaatsing-txt-h1'); ?></h1>
        <p><?php echo get_theme_mod('setting-plaatsing-txt-p'); ?></p>
        <h2><?php echo get_theme_mod('setting-plaatsing-txt-h2'); ?></h2>
            <!-- de 2 cards -->
            <div class="row c-ketels">
                <div class="col s12 m6">
                    <a href="https://wpl3.antonlabeeuw.be/verwarmingsketel-plaatsen-woning/">
                        <div class="card c-ketels-cards">
                            <div class="card-content white-text c-ketels-card">
                                <span class="card-title c-ketels-title">Woning</span>
                                <img src="<?php echo get_template_directory_uri()?>/icons/woning.svg" class="c-ketels-img" alt="icoon van een huis">
                            </div>
                        </div>
                </div></a>
                <div class="col s12 m6">
                    <a href="https://wpl3.antonlabeeuw.be/verwarmingsketel-plaatsen-residentie/">
                        <div class="card c-ketels-cards">
                            <div class="card-content white-text c-ketels-card">
                                <span class="card-title c-ketels-title">Residentie</span>
                                <img src="<?php echo get_template_directory_uri()?>/icons/residentie.svg" class="c-ketels-img" alt="icoon van een residentie">
                            </div>
                        </div>
                </div></a>
            </div>
        </div>
        <!-- contact -->
      <div class="container-fluid c-banner-contact">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l8">
              <p class="c-banner-contact-text">
              <?php echo get_theme_mod('setting-txt-banner'); ?>
              </p>
            </div>
            <div class="col s12 m6 l4">
              <a
                class="o-button o-button-effect o-button-effect-1 right"
                href="<?php echo get_theme_mod('setting-txt-btnlink'); ?>"
                ><?php echo get_theme_mod('setting-txt-btn'); ?></a
              >
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>