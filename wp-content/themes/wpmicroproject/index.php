<?php
/*
    This template the displaying the header
*/
?>
<!DOCTYPE html>
<!-- language setting and no-js add korar karon holo purano kono js plagin load hote bada dibe jodi load hoy conflict korte pare -->
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
                        <!-- <a href="#">
                            <img src="<?php //echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="img-fluid">
                        </a> -->
                        <a href="#">
                            <img src="<?php echo get_theme_mod('kamrul_logo'); ?>" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-9">
                      <h1> Content for the right side can go here </h1>
                    </div>
                </div>
            </div>
        </div>
    <?php wp_footer(); ?>
</body>
</html>
