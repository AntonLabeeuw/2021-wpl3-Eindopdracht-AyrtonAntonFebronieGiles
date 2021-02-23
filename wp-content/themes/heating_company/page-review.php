<?php get_header(); ?>
        <main>
        <?php
        $arg = array(
            'post_type' => array ('reviews'),
            'nopaging' => false,
            'posts_per_page' => '3',
             'order' => 'ASC',
            'orderby' => 'date'
        );

        $query = new WP_Query($arg);

        if ($query->have_posts()):
            while ($query->have_posts()):$query->the_post();
            get_template_part('template-parts/post/content', 'review');
            endwhile;
        endif;
        wp_reset_query();

        ?>
        </main>
<?php get_footer(); ?>