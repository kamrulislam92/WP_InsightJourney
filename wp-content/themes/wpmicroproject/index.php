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
    <img src="<?php echo esc_url( get_theme_mod('kamrul_logo') ); ?>" alt="Logo" class="img-fluid">
</a>

                    </div>
                    <div class="col-md-9">
                      <!-- <ul id="nav">
                          <li><a href="http://">Home</a></li>
                          <li><a href="http://">About Us</a></li>
                          <li><a href="http://">Media</a></li>
                          <li><a href="http://">Download</a></li>
                          <li><a href="http://">Project</a></li>
                          <li><a href="http://">Service</a>
                            <ul>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a>
                                    <ul>
                                        <li><a href="http://">Dropdown Menu</a></li>
                                        <li><a href="http://">Dropdown Menu</a></li>
                                        <li><a href="http://">Dropdown Menu</a></li>
                                        <li><a href="http://">Dropdown Menu</a></li>
                                        <li><a href="http://">Dropdown Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a></li>
                                <li><a href="http://">Dropdown Menu</a></li>

                            </ul>
                          </li>
                          <li><a href="http://"></a></li>
                          <li><a href="http://">Home</a></li>
                          <li><a href="http://">Home</a></li>
                          <li><a href="http://">Home</a></li>
                          <li><a href="http://">Home</a></li>

                      </ul> -->
                      <div class="container py-5">
  
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          
            <li class="dropdown dropend">
                <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action 1</a>
                <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu1">
                  
                    <li class="dropdown dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action 2</a>
                        <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu2">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <!-- <li class="dropdown dropend">
                <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel 2</a>
                <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu1">
                    <li><a class="dropdown-item" href="#">2 Action</a></li>
                    <li><a class="dropdown-item" href="#">2 Another action</a></li>
                    <li><a class="dropdown-item" href="#">2 Something else here</a></li>
                </ul>
            </li> -->
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
        </ul>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    <?php wp_footer(); ?>
</body>
</html>
<script>
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
dropdowns.forEach((dd)=>{
    dd.addEventListener('click', function (e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display==='block'?'none':'block'
    })
})
</script>