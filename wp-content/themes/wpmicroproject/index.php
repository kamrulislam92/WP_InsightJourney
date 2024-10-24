<?php
/*
    This template the displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="header_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <a href="#">
                            <img src="<?php echo esc_url( get_theme_mod('kamrul_logo') ); ?>" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9">
                       <nav id="primary_nav_wrap">
                            <ul>
                                <li class="current-menu-item"><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Download</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Service</a>
                                    <ul>
                                    <li><a href="#">Sub Menu 1</a></li>
                                    <li><a href="#">Sub Menu 2</a></li>
                                    <li><a href="#">Sub Menu 3</a></li>
                                    <li><a href="#">Sub Menu 4</a>
                                        <ul>
                                        <li><a href="#">Deep Menu 1</a>
                                            <ul>
                                            <li><a href="#">Sub Deep 1</a></li>
                                            <li><a href="#">Sub Deep 2</a></li>
                                            <li><a href="#">Sub Deep 3</a></li>
                                                <li><a href="#">Sub Deep 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Deep Menu 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sub Menu 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <?php wp_footer(); ?>
</body>
</html>
