<?php session_start(); ?>
<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pagename ;?></title>
    <meta name="google-site-verification" content="5kcMQE4up5EbZLW-8IN7PsTUiTyOhahNvVeVVDUCRWk" />
    
    <?php wp_head(  )?>
    
</head>

<body <?php body_class(  ) ?>>
    <header>
        <div class="c-topnav container">
        <a  class="c-topnav__logo col s12 m12" href="<?php echo get_option("siteurl"); ?>">
        <?php
        echo '
                <img
                class=""
                src= "'. get_template_directory_uri() .'/icons/logo-groot.svg"
                alt="The Heating Company logo"
                />'; 
        ?>
        </a>
            <nav>
                <ul>
                    <li><a class="c-topnav__link" href="<?php echo site_url('/over-ons'); ?>">Over ons</a></li>
                    <li><a class="c-topnav__link" href="<?php echo site_url('/attesten'); ?>">Attesten</a></li>
                </ul>
            </nav>
            <div class="c-topnav__knoppen">
                <a class="o-button o-button-nav o-button--offerte c-topnav__knop c-topnav__knop--offerte"
                    href="<?php echo site_url('/offerte'); ?>">Offerte</a>
                <a class="o-button o-button--noodnummer c-topnav__knop"
                    href="tel:+32 56 56 56 16"><span>Noodnummer</span></a>
            </div>
        </div>
        
        <div class="nav-wrapper">
        <div class="container">
            <!-- <div class="container"> -->
                <a href="#" data-activates="primary-mobile-menu" class="button-collapse">
                                <i class="material-icons nav__hamburger">menu</i>
                </a>
                 <!-- mobile and tablet menu content -->
                <?php
                    wp_nav_menu( array(
                        'menu' => 'main-menu',
                        'menu_id' => 'primary-mobile-menu',
                        'theme_location'=>'main-menu',
                        'menu_class' => 'side-nav',
                        'container' => '',
                        'walker' => new Materialize_Walker_Nav_Menu()
                    ));
                ?>
                <?php
                    wp_nav_menu( array(
                            'menu' => 'main-menu',
                            'theme_location'=>'main-menu',
                            'menu_id'=>'primary-menu',
                            'menu_class' => 'hide-on-med-and-down',
                            'container' => '',
                            'walker' => new Materialize_Walker_Nav_Menu()
                        ));
                      
                ?>                
                       
               
            </div>
                    <!-- </div> -->
        </div>
    </header>