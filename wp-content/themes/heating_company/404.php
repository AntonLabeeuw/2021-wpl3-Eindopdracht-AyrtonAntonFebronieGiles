<?php get_header(); ?>

<main>
    <div class="c-404">
        <?php
        echo '
                <img
                class="c-404-img"
                src= "'. get_template_directory_uri() .'/images/404.svg"
                alt="404 afbeelding met robot"
                />'; 
        ?>
        <!-- <a class="o-button o-button-effect o-button-effect-1 right c-404-btn" href="">Ga terug naar home</a> -->
    </div>
</main>

<?php get_footer(); ?>