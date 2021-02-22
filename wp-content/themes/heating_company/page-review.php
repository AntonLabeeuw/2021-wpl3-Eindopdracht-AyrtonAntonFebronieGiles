<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verwarmingsoplossingen</title>

        <!-- jQuery -->
        <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->

        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/72aae3cd92.js" crossorigin="anonymous"></script>
        
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- eigen css -->
        <link rel="stylesheet" href="css/screen.css">
    </head>
    <body>
        <header>
            Dit is een header.
        </header>
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
            get_template_part('template-parts/post/content', 'reviews');
            endwhile;
        endif;
        wp_reset_query();

        ?>
    <footer>
        Dit is een footer
    </footer>
    </body>
</html>