<?php $article_data = substr(get_the_content(), 0, 400); ?>

<article class="c-team__collega row" data-aos="zoom-in">
    <div class="col s12 m12 l12 xl4">
        <img class="c-team__collega-img z-depth-1" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
    </div>
    <div class="col  s12 m12 l12 xl8">
        <h3 class="c-team__collega-naam"><?php echo get_the_title(); ?></h3>
            <p class="c-team__collega-functie"><?php echo get_post_meta($post->ID, '_functie', true); ?></p>
            <p><?php 
                if(strlen(get_the_content()) > 400){
                    echo "" . $article_data . "...";
                }
                else{
                    echo get_the_content();
                }
            ?></p>
    </div>
</article>