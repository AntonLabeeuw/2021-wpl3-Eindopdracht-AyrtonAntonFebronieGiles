<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name') ;?></title>
    
    
   
    
    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
          <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  

    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- font awesome -->
    <!-- <script src="https://kit.fontawesome.com/e3d5c31b7b.js" crossorigin="anonymous"></script> -->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script> -->
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script> -->
    <!-- eigen CSS -->
    <!-- <link rel="stylesheet" href="css/screen.css" /> -->
    <!-- javascript onze -->
    <!-- <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/effect.js"></script> -->

    
   

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
                src= "'. get_template_directory_uri() .' /icons/logo-groot.svg"
                alt="The Heating Company logo"
                />'; 
        ?>
        </a>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url('/over-ons'); ?>">Over ons</a></li>
                    <li><a href="<?php echo site_url('/attesten'); ?>">Attesten</a></li>
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