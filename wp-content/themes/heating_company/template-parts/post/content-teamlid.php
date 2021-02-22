<article class="c-team__collega row" data-aos="zoom-in">
                    <div class="col s12 m12 l12 xl4">
                        <img class="c-team__collega-img z-depth-1" src="images/collega01.png" alt="vrouw">
                    </div>
                    <div class="col  s12 m12 l12 xl8">
                        <h3 class="c-team__collega-naam"><?php echo get_the_title(); ?></h3>
                        <p class="c-team__collega-functie"><?php echo get_post_meta($post->ID, '_functie', true); ?></p>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </article>