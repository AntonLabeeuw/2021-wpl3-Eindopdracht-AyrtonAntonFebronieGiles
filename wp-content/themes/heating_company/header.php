<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name') ;?></title>
    <?php wp_head(  )?>
   
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
          <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js">
    </script>
    <!-- eigen CSS -->
    <link rel="stylesheet" href="css/screen.css" />
    <!-- javascript onze -->
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/effect.js">></script>

    
    
   
</head>
<body>
    <header>
        <div class="c-topnav container">
        <?php
        echo '
                <img
                class="c-footer__logo-groot"
                src= "'. get_template_part('icons/inline', 'footer-logo-groot.svg') .'"
                alt="The Heating Company logo"
                />'; 
        ?>
            <nav>
                <ul>
                    <li><a href="#">Over ons</a></li>
                    <li><a href="#">Attesten</a></li>
                </ul>
            </nav>
            <div class="c-topnav__knoppen">
                <a class="o-button o-button-nav o-button--offerte c-topnav__knop c-topnav__knop--offerte"
                    href="">Offerte</a>
                <a class="o-button o-button--noodnummer c-topnav__knop"
                    href="tel:+32 56 56 56 16"><span>Noodnummer</span></a>
            </div>
        </div>
        
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse">
                                <i class="material-icons nav__hamburger">menu</i>
                </a>
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'main-menu',
                            'theme_location'=>'main-menu',
                            'menu_class' => 'hide-on-med-and-down',
                            'container' => '',
                            'walker' => new wp_materialize_navwalker()
                        ));
                    ?>
                <!-- mobile and tablet menu content -->
                <?php
                        wp_nav_menu( array(
                            'menu' => 'main-menu',
                            'menu_id' => 'mobile-menu',
                            'theme_location'=>'main-menu',
                            'menu_class' => 'side-nav',
                            'container' => '',
                            
                            'walker' => new wp_materialize_navwalker()
                        ));
                    ?>
            </div>
        </div>
     
    </header>