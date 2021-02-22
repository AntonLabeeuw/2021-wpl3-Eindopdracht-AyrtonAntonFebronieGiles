<article class="c-ketel-soort row">
    <div class="col s12 m12 l6 xl7">
        <h2 class="c-ketel-soort__title"><?php echo get_the_title(); ?></h2>
        <p class="c-ketel-soort__text"><?php echo get_the_content(); ?></p>
        <!-- <p class="c-ketel-soort__text">Wil je je oude gas- of mazoutketel vervangen? Dan is een nieuwe condenserende verwarmingsketel de meest budgetvriendelijke optie. Je kan je bestaande leidingen en warmtetoestellen namelijk gewoon blijven gebruiken. Zo spaar je heel wat arbeidskosten uit.</p> -->
        <ul class="c-ketel-soort__info">
            <li>Energiebron: <?php echo get_post_meta($post->ID, '_energiebron', true); ?></li>
            <li>Prijs condensatieketel: € <?php echo get_post_meta($post->ID, '_minprijs', true); ?> à € <?php echo get_post_meta($post->ID, '_maxprijs', true); ?>, incl. btw en excl. plaatsing</li>
            <li>Prijs verbruik: <?php echo get_post_meta($post->ID, '_prijsverbruik', true); ?></li>
        </ul>
    </div>
    <div class="col s12 m12 l6 xl5">
        <img class="c-ketel-soort__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
    </div>
</article>