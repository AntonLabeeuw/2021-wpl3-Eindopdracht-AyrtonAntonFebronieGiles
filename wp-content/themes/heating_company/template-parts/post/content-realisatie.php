<article class="c-realisaties__item col s12 m12 l12 xl6" data-aos="zoom-in">
    <h2 class="c-realisaties__title"><?php echo get_the_title(); ?></h2>
    <div class="c-overlay">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="c-overlay-img c-realisaties__img"/>
        <div class="c-overlay-overlay overlay">
            <div class="c-overlay-text text">
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </div>
</article>