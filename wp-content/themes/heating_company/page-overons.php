<!doctype html>
<html lang="nl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Over ons</title>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/e3d5c31b7b.js" crossorigin="anonymous"></script>
        <!--Import AOS effect-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/effect.js"></script>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <!-- eigen CSS -->
        <link rel="stylesheet" href="css/screen.css" />

        <!--Import AOS effect-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/effect.js"></script>
        <!-- javascript onze -->
        <script type="text/javascript" src="js/navbar.js"></script>
    </head>

    <body>
        <header>
            dit is een header
        </header>

        <main>
            <div class="container">
                <h1> Dé absolute verwarmingsspecialist</h1>
                <p>The Heating Company is een ervaren dynamisch bedrijf dat zich specialiseert in plaatsing, onderhoud
                    en
                    herstelling van verwarmings-
                    installaties regio Kortrijk.</p>
                <h2> Ons team</h2>
                <section class="c-team">
                    <?php

                        $arg = array(
                            'post_type' => array ('teamleden'),
                            'nopaging' => false,
                            'posts_per_page' => '6',
                            'order' => 'ASC',
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($arg);

                        if ($query->have_posts()):
                            while ($query->have_posts()):$query->the_post();
                            get_template_part('template-parts/post/content', 'teamlid');
                            endwhile;
                        endif;
                        wp_reset_query();

                    ?>
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
        <footer class="c-footer">
            <div class="c-footer__row container">
                <div class="c-footer__logo">
                    <img src="icons/footer-logo.svg" class="c-footer__logo-klein" alt="The Heating Company logo"
                        title="The Heating Company logo" />
                    <img src="icons/logo-groot.svg" class="c-footer__logo-groot" alt="The Heating Company logo"
                        title="The Heating Company logo" />
                </div>
                <div class="c-footer__copyright">
                    <p>© 2021 The Heating Company</p>
                </div>

                <div class="c-footer__icons">
                    <a href="https://www.google.com/maps/place/Howest,+Campus+Kortrijk+Weide+-+Gebouw+A/@50.8240996,3.2479844,17z/data=!4m8!1m2!2m1!1skortrijk+campus+weide!3m4!1s0x47c33ae91da1e207:0xf60becfabc37b39c!8m2!3d50.8240996!4d3.2501731"
                        target="_blank">
                        <svg id="mark_met_hover" data-name="mark met hover" xmlns="http://www.w3.org/2000/svg"
                            width="20.924" height="30" viewBox="0 0 20.924 30">
                            <path id="icon-map-1" data-name="Path 59" class="c-locationicon"
                                d="M86.462,0a10.549,10.549,0,0,0-8.892,16.084l8.183,13.5a.826.826,0,0,0,.593.4.865.865,0,0,0,.889-.422l8.207-13.624A10.551,10.551,0,0,0,86.462,0Zm0,15.82a5.274,5.274,0,1,1,5.231-5.273A5.245,5.245,0,0,1,86.462,15.82Z"
                                transform="translate(-76)" fill="#f29100" />

                            <path id="icon-map-2" data-name="Path 60" class="c-locationicon"
                                d="M256,0V5.273a5.274,5.274,0,0,1,0,10.547V30a.862.862,0,0,0,.773-.432l8.207-13.624A10.551,10.551,0,0,0,256,0Z"
                                transform="translate(-245.538)" fill="#e84e1b" />
                        </svg></a>
                    <a href="tel:+32 56 56 56 16"><svg class="c-footer__icons--tel c-footer__icon" id="phone_met_hover"
                            data-name="phone met hover" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 30 30">
                            <g id="icon-phone-1" data-name=" Circle Grid">
                                <circle id="icon-phone-8" data-name="Ellipse 1" cx="15" cy="15" r="15" fill="#023c48" />
                            </g>
                            <g id="icon-phone-2" transform="translate(4.818 5.667)">
                                <path id="icon-phone-3" data-name="Path 26"
                                    d="M28.931,36.078c1.972,1.972,3.9,2.772,4.6,2.076l.957-.957a1.686,1.686,0,0,1,2.384,0l2.146,2.146a1.686,1.686,0,0,1,0,2.384L37.347,43.4c-1.58,1.58-6.252-.529-10.73-5.007a23.141,23.141,0,0,1-4.655-6.332c-.949-1.984-1.142-3.609-.352-4.4l1.672-1.672a1.686,1.686,0,0,1,2.384,0l2.146,2.146a1.686,1.686,0,0,1,0,2.384l-.957.957C26.159,32.174,26.959,34.107,28.931,36.078Z"
                                    transform="translate(-21.118 -25.397)" fill="#f29100" />
                                <g id="icon-phone-4" data-name="Group 7" transform="translate(9.721)">
                                    <path id="icon-phone-5" data-name="Path 27"
                                        d="M71.8,33.828a7.72,7.72,0,0,0-7.711-7.711V25.054a8.784,8.784,0,0,1,8.775,8.775Z"
                                        transform="translate(-64.093 -25.054)" fill="#ffd290" />
                                    <path id="icon-phone-6" data-name="Path 28"
                                        d="M69.145,42.923a5.058,5.058,0,0,0-5.052-5.052V36.808a6.123,6.123,0,0,1,6.116,6.115Z"
                                        transform="translate(-64.093 -34.149)" fill="#ffd290" />
                                    <path id="icon-phone-7" data-name="Path 29"
                                        d="M66.487,52.019a2.4,2.4,0,0,0-2.393-2.393V48.563a3.461,3.461,0,0,1,3.457,3.456Z"
                                        transform="translate(-64.094 -43.245)" fill="#ffd290" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="mailto:info@theheatingcompany.be?subject=Contacteer mij&"><svg
                            class="c-footer__icons--mail c-footer__icon" id="email_met_hover" data-name="email met hover"
                            xmlns="http://www.w3.org/2000/svg" width="34.952" height="33.432" viewBox="0 0 34.952 33.432">
                            <path id="icon-mail-1" data-name="Path 20"
                                d="M43.535,12.233l-12.78,9.239-2.1,1.52a3.146,3.146,0,0,1-3.738,0l-2.1-1.52-12.8-9.224a3.778,3.778,0,0,1,3.085-1.58H40.465A3.8,3.8,0,0,1,43.535,12.233Z"
                                transform="translate(-9.313 -10.668)" fill="#ffd290" />
                            <g id="icon-mail-2" data-name="Group 5" transform="translate(0 1.565)">
                                <path id="icon-mail-3" data-name="Path 21"
                                    d="M.714,32.855l12.8,9.224-12.4,12.4A3.8,3.8,0,0,1,0,51.79V35.074A3.754,3.754,0,0,1,.714,32.855Z"
                                    transform="translate(0 -32.84)" fill="#f29100" />
                                <path id="icon-mail-4" data-name="Path 22"
                                    d="M314.523,34.876V51.592a3.8,3.8,0,0,1-1.109,2.69l-12.4-12.4,12.78-9.239A3.777,3.777,0,0,1,314.523,34.876Z"
                                    transform="translate(-279.572 -32.642)" fill="#f29100" />
                            </g>
                            <path id="Path_23" data-name="Path 23"
                                d="M141.677,255.97c-1.009,0-1.52-.76-1.52-2.279a3.845,3.845,0,1,0-.925,2.457,2.709,2.709,0,0,0,2.445,1.342c3.039,0,3.039-2.86,3.039-3.8a8.358,8.358,0,1,0-2.547,6.007.762.762,0,1,0-1.064-1.093h0a6.838,6.838,0,1,1,2.091-4.914C143.2,255.394,142.813,255.97,141.677,255.97Zm-5.319,0a2.279,2.279,0,1,1,2.279-2.279A2.279,2.279,0,0,1,136.358,255.97Z"
                                transform="translate(-118.882 -228.616)" fill="#023c48" />
                            <path id="icon-mail-5" data-name="Path 24"
                                d="M35.907,162.348l-2.1,1.52a3.146,3.146,0,0,1-3.738,0l-2.1-1.52-12.4,12.4a3.8,3.8,0,0,0,2.69,1.109H22.1a9.867,9.867,0,0,1,19.678,0h3.839a3.8,3.8,0,0,0,2.69-1.109Z"
                                transform="translate(-14.464 -151.543)" fill="#e84e1b" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>