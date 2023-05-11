<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ETL
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--mobile-wrap-->
<div class="mobile-wrap">
    <button class="mobile-wrap__close">&#215;</button>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'mobile-menu',
        'container' => 'nav',
        'container_class' => 'mobile-menu',
        'menu_class'      => 'mobile-nav',
        'menu_id'         => 'mobile-menu',
    ) );
    ?>
</div>
<!--header-->
<div class="header">
    <!--header-navbar-->
    <div class="navbar-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-navbar">
                        <div class="header-call">
                            <p class="header-call__title">Звоните:</p>
                            <a href="tel: +7 (775) 184 66 66" class="header-call__link">+7 (775) 184 66 66</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--header-menu-->
                <div class="header-menu">
                    <a href="/" class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>./img/ETL-logo.png" alt=""
                        class="header-logo__img">
                    </a>
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container' => 'nav',
                            'container_class' => 'nav-container',
                            'menu_class'      => 'header-nav',
                            'menu_id'         => 'header-menu',
                    ) );
                    ?>
                    <!--mobile-hamburger-->
                    <div class="hamburger-menu">
                        <span class="bar-top"></span>
                        <span class="bar-middle"></span>
                        <span class="bar-bottom"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
