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
        <nav class="z-depth-0">
            <div class="nav-wrapper bg-color">
                <div class="container">
                    <!-- <a href="#" data-activates="mobile-menu" class="button-collapse">
                        <i class="material-icons nav__hamburger">menu</i>
                    </a> -->
                    <!-- desktop menu content -->
                    <ul class="left hide-on-med-and-down">
                    <?php
                              section_subnav()
                                
                    ?>

                    </ul>         
                    <!-- mobile and tablet menu content -->
                </div>
            </div>
        </nav>
    </header>