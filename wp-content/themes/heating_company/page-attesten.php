<?php get_header(); ?>

    <main>
      <div class="container">
        <h1>Attesten en certificaten</h1>
        <p>
          De installateurs van The Heating Company beschikken over de nodige
          attesten en certificaten om elke opdracht tot een goed einde te
          brengen.
        </p>
        <h2>Behaalde attesten en certificaten:</h2>
      </div>

      <!-- list -->
      <div class="container">
        <!-- voorbeeld van list -->
        <ul class="c-list">
          <li class="c-list-item">Onderhouden en afstellen van stookolieinstallaties : TV9189
          </li>
          <li class="c-list-item">Onderhouden van gasinstallaties: SGA016
          </li>
          <li class="c-list-item">Tanktechnicus : SV00666
          </li>
          <li class="c-list-item">Aardgashabilitatie : 02-01661-N
          </li>
          <li class="c-list-item">Energiedeskundige : 2007-350-EAP – EPO8489
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