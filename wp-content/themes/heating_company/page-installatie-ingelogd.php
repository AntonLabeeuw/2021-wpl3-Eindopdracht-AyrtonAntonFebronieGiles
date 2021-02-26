<?php get_header( );?>
<!-- mijn main -->
<!-- nav voor de user -->
<div class="container">
        <a class="o-button o-button-nav" href="">Onderhoud</a>
        <a class="o-button o-button-nav-active" href="">Installatie</a>
        <a class="o-button o-button-nav" href="">Mijn profiel</a>
    </div>

    <!-- verwarmingsoplossingen component-->
    <div class="container">
      <h1><?php echo get_theme_mod('setting-installatie-ingelogd-h1'); ?></h3>
      <div class="c-installatie row">
        <div class="col s12 m12 l12 xl5">
          <img
            class="c-installatie__img"
            src="<?php echo get_the_post_thumbnail_url()?>"
            alt=""
          />
        </div>
        <div class="col s12 m12 l12 xl7">
          <h2 class="c-installatie__title">Condensatieketel</h2>
          <p class="c-installatie__text">
            Een condensatieketel recupereert de warmte van de rookgassen om het
            water voor de centrale verwarming voor te verwarmen. Zo halen ze een
            erg hoog rendement, waardoor je flink kan besparen op je
            energiefactuur (tot wel 35%).
          </p>
          <p class="c-installatie__text">
            Wil je je oude gas- of mazoutketel vervangen? Dan is een nieuwe
            condenserende verwarmingsketel de meest budgetvriendelijke optie. Je
            kan je bestaande leidingen en warmtetoestellen namelijk gewoon
            blijven gebruiken. Zo spaar je heel wat arbeidskosten uit.
          </p>
          <ul class="c-installatie__info">
            <li>Energiebron: gas of mazout</li>
            <li>
              Prijs condensatieketel: € 2.500 à € 5.000, incl. btw en excl.
              plaatsing
            </li>
            <li>Prijs verbruik: zeer goed</li>
          </ul>

          <ul class="c-installatie__info">
            <li>Geïnstalleerd op: 10/04/2020</li>
            <li>Laatste onderhoud: 10/04/2020</li>
            <li>Staat: uitmuntend</li>
          </ul>
        </div>
      </div>
    </div>
</div>


<?php get_footer( );?>
