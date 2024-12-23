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
        <!-- <div id="header_area" class="<?php //echo get_theme_mod('kamrul_menu_position'); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img src="<?php //echo esc_url( get_theme_mod('kamrul_logo') ); ?>" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <?php// wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id'=> 'nav')); ?>
                    </div>
                </div>
            </div>
        </div> -->
        <header id="header_area" class="<?php echo esc_attr(get_theme_mod('kamrul_menu_position', 'right_menu')); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url(get_theme_mod('kamrul_logo')); ?>" alt="Logo" class="logo_img">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                    </div>
                </div>
            </div>
        </header>
        <section id="body_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer_area">
            <section id="copyright_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p><?php echo get_theme_mod('kamrul_copyright_section'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    <?php wp_footer(); ?>
</body>
</html>
