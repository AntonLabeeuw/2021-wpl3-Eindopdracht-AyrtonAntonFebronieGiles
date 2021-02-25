<?php get_header(); ?>

<main>
        <section class="c-carousel container">
            <?php

                $arg = array(
                    'post_type' => array ('carousels'),
                    'nopaging' => false,
                    'posts_per_page' => '20',
                    'order' => 'ASC',
                    'orderby' => 'date'
                );

                $query = new WP_Query($arg);

                if ($query->have_posts()):
                    while ($query->have_posts()):$query->the_post();
                    get_template_part('template-parts/post/content', 'carousel');
                    endwhile;
                endif;
                wp_reset_query();

            ?>         


            <!-- <a href="images/carousel1-groot.jpg" data-lightbox="mygallery"><img src="images/carousel1.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a>
            <a href="images/carousel2-groot.jpg" data-lightbox="mygallery"><img src="images/carousel2.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a>
            <a href="images/carousel3-groot.jpg" data-lightbox="mygallery"><img src="images/carousel3.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a>
            <a href="images/carousel4-groot.jpg" data-lightbox="mygallery"><img src="images/carousel4.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a>
            <a href="images/carousel5-groot.jpg" data-lightbox="mygallery"><img src="images/carousel5.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a>
            <a href="images/carousel6-groot.jpg" data-lightbox="mygallery"><img src="images/carousel6.png" alt="Installatie van The Heating Company" title="Installatie van The Heating Company"></a> -->
        </section>
        <div class="container">
            <h1><?php echo get_theme_mod('setting-home-h1'); ?></h1>
            <p><?php echo get_theme_mod('setting-home-p1'); ?></p>
            <section class="row c-button-menu">
                <article class="col l4 m6 s12 c-button-menu-item">
                    <h2 class="c-button-menu-title"><?php echo get_theme_mod('setting-home-button1_h2'); ?></h2>
                    <p class="c-button-menu-text"><?php echo get_theme_mod('setting-home-button1_p'); ?></p>
                    <a class="o-button o-button-effect o-button-effect-1" href="<?php echo get_theme_mod('setting-home-button1_link'); ?>"><?php echo get_theme_mod('setting-home-button1_txt'); ?></a>
                </article>
                <article class="col l4 m6 s12 c-button-menu-item">
                    <h2 class="c-button-menu-title"><?php echo get_theme_mod('setting-home-button2_h2'); ?></h2>
                    <p class="c-button-menu-text"><?php echo get_theme_mod('setting-home-button2_p'); ?></p>
                    <a class="o-button o-button-effect o-button-effect-1" href="<?php echo get_theme_mod('setting-home-button2_link'); ?>"><?php echo get_theme_mod('setting-home-button2_txt'); ?></a>
                </article>
                <article class="col l4 m12 s12 c-button-menu-item">
                    <h2 class="c-button-menu-title"><?php echo get_theme_mod('setting-home-button3_h2'); ?></h2>
                    <p class="c-button-menu-text"><?php echo get_theme_mod('setting-home-button2_p'); ?></p>
                    <a class="o-button o-button-effect o-button-effect-1" href="<?php echo get_theme_mod('setting-home-button1_link'); ?>"><?php echo get_theme_mod('setting-home-button3_txt'); ?></a>
                </article>
            </section>
        </div>
        <section class="c-uspbanner__background">
            <div class="c-uspbanner row container c-uspbanner__center">
                <!-- start icon 1 ------------------------------->
                <article class="c-uspbanner__icon col s12 m12 l3 xl3" data-aos="fade-right" data-aos-delay="100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65">
                        <path id="clock"
                            d="M32.5,0A32.5,32.5,0,1,0,65,32.5,32.536,32.536,0,0,0,32.5,0ZM47.957,49.31a2.706,2.706,0,0,1-3.829,0L30.585,35.769a2.7,2.7,0,0,1-.793-1.915V16.25a2.708,2.708,0,0,1,5.416,0V32.733L47.957,45.481a2.705,2.705,0,0,1,0,3.829Zm0,0"
                            fill="#f29100" />
                    </svg>
                    <h1 class="c-uspbanner__text">24/7 bereikbaar</h1>
                </article>
                <!-- einde icoon 1 -------------------------------------->
                <!-- start icon 2 --------------------------------------->
                <article class="c-uspbanner__icon col s12 m12 l3 xl3" data-aos="fade-right" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="67.103" height="64.818"
                        viewBox="0 0 67.103 64.818">
                        <path id="Path_46" data-name="Path 46"
                            d="M65.158,47.98l-7.6-8.047v-16.8a3.864,3.864,0,0,0-3.875-3.948H50.4a3.912,3.912,0,0,0-3.875,3.948v5.112l-5.52-5.807a9.811,9.811,0,0,0-7.385-3.252,10.339,10.339,0,0,0-7.458,3.252L1.926,47.992C-2.181,52.332.878,58.139,5.509,58.139H9.53V77.725A6.186,6.186,0,0,0,15.574,84H51.522a6.187,6.187,0,0,0,6.044-6.276v-19.6h4.107C66.279,58.127,69.265,52.319,65.158,47.98ZM33.767,77.105a14.97,14.97,0,0,1-14.7-15.259,15.443,15.443,0,0,1,5.593-11.918c.743-.544,1.267,0,1.048.392-2.388,5.731-.67,11.387,3.351,12.538a19.644,19.644,0,0,1-1.34-9.6,19.345,19.345,0,0,1,6.263-12.311,1.043,1.043,0,0,1,.743-.392c.219,0,.378.228.292.544a21.833,21.833,0,0,0-.524,3.024A19.511,19.511,0,0,0,36.814,55.66c2.839,0,4.021-3.4,4.326-5.732,0-.544.451-.924,1.267-.3a15.315,15.315,0,0,1,6.044,12.235A14.957,14.957,0,0,1,33.767,77.105Z"
                            transform="translate(0 -19.183)" fill="#f29100" />
                    </svg>

                    <h1 class="c-uspbanner__text">Grote vakkennis</h1>
                </article>
                <!-- einde icon 2 ------------------------------------------------------------>
                <!-- start icon 3 ------------------------------------------------------------>
                <article class="c-uspbanner__icon col s12 m12 l3 xl3" data-aos="fade-right" data-aos-delay="300">
                    <svg id="medal" xmlns="http://www.w3.org/2000/svg" width="46.148" height="64.193"
                        viewBox="0 0 46.148 64.193">
                        <path id="Path_47" data-name="Path 47"
                            d="M105.3,44.988l2.935-4.763,5.3-1.807.587-5.564,3.986-3.924-1.895-5.267L118.11,18.4l-3.985-3.924-.587-5.564L108.24,7.1,105.3,2.34l-5.552.67L95.036,0,90.32,3.01l-5.552-.67L81.832,7.1l-5.3,1.807-.587,5.564L71.962,18.4l1.895,5.267-1.895,5.267,3.985,3.924.587,5.564,5.3,1.807,2.935,4.763,5.552-.67,4.717,3.01,4.717-3.01Zm-26.5-21.324A16.227,16.227,0,1,1,95.036,39.891,16.246,16.246,0,0,1,78.809,23.664Z"
                            transform="translate(-71.962 0)" fill="#f29100" />
                        <path id="Path_48" data-name="Path 48"
                            d="M169.054,89.333A12.464,12.464,0,1,0,181.517,101.8,12.478,12.478,0,0,0,169.054,89.333Z"
                            transform="translate(-145.98 -78.133)" fill="#f29100" />
                        <path id="Path_49" data-name="Path 49"
                            d="M96.909,347.8l-6.6.8-3.49-5.663-1.186-.4-5.117,15.994,9.212-.507,7.207,5.76,4.241-13.256Z"
                            transform="translate(-79.439 -299.589)" fill="#f29100" />
                        <path id="Path_50" data-name="Path 50"
                            d="M281.058,342.94l-3.49,5.663-6.6-.8-4.263,2.721,4.241,13.256,7.207-5.76,9.212.507-5.117-15.994Z"
                            transform="translate(-242.285 -299.589)" fill="#f29100" />
                    </svg>

                    <h1 class="c-uspbanner__text">Kwaliteit en netheid</h1>
                </article>
                <!-- einde icon 3 --------------------------------------------------->
                <!-- start icon 4 --------------------------------------------------->
                <article class="c-uspbanner__icon col s12 m12 l3 xl3" data-aos="fade-right" data-aos-delay="400">
                    <svg id="glyph" xmlns="http://www.w3.org/2000/svg" width="74.165" height="64.747"
                        viewBox="0 0 74.165 64.747">
                        <rect id="Rectangle_24" data-name="Rectangle 24" width="15.989" height="7.524" rx="3.762"
                            transform="translate(39.501)" fill="#f29100" />
                        <path id="Path_51" data-name="Path 51"
                            d="M57.538,188H45.766a1.766,1.766,0,1,0,0,3.532H57.538a1.766,1.766,0,1,0,0-3.532Z"
                            transform="translate(-38.114 -162.101)" fill="#f29100" />
                        <path id="Path_52" data-name="Path 52"
                            d="M43.3,285.766A1.766,1.766,0,0,0,41.538,284H29.766a1.766,1.766,0,1,0,0,3.532H41.538A1.766,1.766,0,0,0,43.3,285.766Z"
                            transform="translate(-24.468 -243.974)" fill="#f29100" />
                        <path id="Path_53" data-name="Path 53"
                            d="M70.006,332H61.766a1.766,1.766,0,0,0,0,3.532h8.241a1.766,1.766,0,0,0,0-3.532Z"
                            transform="translate(-51.759 -284.911)" fill="#f29100" />
                        <path id="Path_54" data-name="Path 54"
                            d="M22.836,237.766A1.766,1.766,0,0,0,21.07,236H5.766a1.766,1.766,0,1,0,0,3.532h15.3A1.766,1.766,0,0,0,22.836,237.766Z"
                            transform="translate(-4 -203.038)" fill="#f29100" />
                        <path id="Path_55" data-name="Path 55"
                            d="M212.013,156.013V136a20.013,20.013,0,1,0,20.013,20.013Z"
                            transform="translate(-164.335 -117.753)" fill="#f29100" />
                        <path id="Path_56" data-name="Path 56"
                            d="M193.855,83.383l1.893-1.894a1.766,1.766,0,1,0-2.5-2.5l-1.971,1.971a26.378,26.378,0,0,0-13.262-5.784V72h-7.063v3.178a26.378,26.378,0,0,0-13.262,5.783l-1.971-1.971a1.766,1.766,0,1,0-2.5,2.5l1.893,1.894a26.488,26.488,0,1,0,38.736,0Zm-19.368,39.826a21.779,21.779,0,1,1,21.779-21.779A21.779,21.779,0,0,1,174.487,123.209Z"
                            transform="translate(-126.81 -63.171)" fill="#f29100" />
                    </svg>
                    <h1 class="c-uspbanner__text">Snelle afspraken en plaatsing</h1>
                </article>
                <!-- einde icon 4 ------------------------------------->
            </div>
        </section>
        <div class="container">
            <h2><?php echo get_theme_mod('setting-home-h2.1'); ?></h2>
            <p><?php echo get_theme_mod('setting-home-p2'); ?></p>
            <h2><?php echo get_theme_mod('setting-home-h2.2'); ?></h2>
            <p><?php echo get_theme_mod('setting-home-p3'); ?></p>
        </div>
    </main>

    <?php get_footer(); ?>