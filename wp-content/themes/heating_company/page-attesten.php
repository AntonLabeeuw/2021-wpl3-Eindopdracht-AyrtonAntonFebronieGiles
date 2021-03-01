<?php get_header(); ?>

    <main>
      <div class="container">
        <h1><?php echo get_theme_mod('setting-txt-h1'); ?></h1>
        <p>
        <?php echo get_theme_mod('setting-txt-p1'); ?>
        </p>
        <h2><?php echo get_theme_mod('setting-txt-h2'); ?></h2>
      </div>

      <!-- list -->
      <div class="container">
        <!-- voorbeeld van list -->
        <ul class="c-list">
          <li class="c-list-item"><?php echo get_theme_mod('setting-txt-li1'); ?>
          </li>
          <li class="c-list-item"><?php echo get_theme_mod('setting-txt-li2'); ?>
          </li>
          <li class="c-list-item"><?php echo get_theme_mod('setting-txt-li3'); ?>
          </li>
          <li class="c-list-item"><?php echo get_theme_mod('setting-txt-li4'); ?>
          </li>
          <li class="c-list-item"><?php echo get_theme_mod('setting-txt-li5'); ?>
          </li>
        </ul>
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
    </main>

    <?php get_footer(); ?>