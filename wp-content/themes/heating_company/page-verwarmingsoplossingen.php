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
        <main>
            <div class="container">
                <h1>Verwarmingsketel kiezen en vergelijken</h1>
                <p>Er bestaan veel verschillende soorten verwramingsketels. Welk type het meest geschikt is, hangt af van het gewenste comfort, de oppervlakte van je woning, het aantal gezinsleden en het beschikbare budget.</p>
                <section>   
                    <h2>Soorten verwarmingsketels</h2>
                    <?php

                        $arg = array(
                            'post_type' => array ('verwarmingsketels'),
                            'nopaging' => false,
                            'posts_per_page' => '6',
                            'order' => 'ASC',
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($arg);

                        if ($query->have_posts()):
                            while ($query->have_posts()):$query->the_post();
                            get_template_part('template-parts/post/content', 'verwarmingsketel');
                            endwhile;
                        endif;
                        wp_reset_query();

                    ?>
                </section>
                <section>
                    <h2>Kwaliteitsketels van topmerken</h2>
                    <p>Kies samen met onze expert het merk dat best bij jouw situatie past.</p>
                    <div class="c-logo__cards row">
                        <?php

                            $arg = array(
                                'post_type' => array ('merken'),
                                'nopaging' => false,
                                'posts_per_page' => '6',
                                'order' => 'ASC',
                                'orderby' => 'date'
                            );

                            $query = new WP_Query($arg);

                            if ($query->have_posts()):
                                while ($query->have_posts()):$query->the_post();
                                get_template_part('template-parts/post/content', 'merk');
                                endwhile;
                            endif;
                            wp_reset_query();

                        ?>
                    </div>
                </section>
            </div>
            <div class="container-fluid c-banner-contact">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l8">
                            <p class="c-banner-contact-text">Laat ons weten wat je van The Heating Company verwacht</p>
                        </div>
                        <div class="col s12 m6 l4">
                            <a class="o-button o-button-effect o-button-effect-1 right" href="">Neem contact op</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            Dit is een footer
        </footer>
    </body>
</html>