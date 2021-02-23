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
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- font awesome -->
     <script src="https://kit.fontawesome.com/e3d5c31b7b.js" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <!--Import AOS effect-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/effect.js"></script>
  
   
   
</head>
<body>
    <header>
        <div class="c-topnav container">
            <img src="icons/logo-groot.svg" class="c-topnav__logo col s12 m12" alt="The Heating Company logo">
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
        <div class="container">
        <?php
            wp_nav_menu( array(
                'menu' => 'main-menu',
                'theme_location'=>'main-menu',
                'menu_class' => 'hide-on-med-and-down',
                'walker' => new wp_materialize_navwalker()
            ));
        ?>
        </div>
    </header>