<article class="col s12 m12 l6 xl4">
                        <div class="c-logo__cards-item z-depth-1">
                            <a href="<?php echo get_post_meta($post->ID, '_site', true); ?>" target="_blank"><img class="c-logo__cards-img" src="images/vaillant-logo.png" alt="Vaillant" title="Vaillant"></a>
                            <h2 class="c-logo__cards-title"><?php echo get_the_title(); ?></h2>
                            <p class="c-logo__cards-text"><?php echo get_the_content(); ?></p>
                        </div>
                    </article>