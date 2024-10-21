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
        
    <?php wp_footer(); ?>
</body>
</html>