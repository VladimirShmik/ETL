<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ETL
 */

?>
<!--footer-->
<div class="footer">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-grid">
                        <a href="" class="footer-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/ETL-logo.png" alt="" class="footer-logo__img">
                        </a>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container' => 'nav',
                            'container_class' => 'footer-menu',
                            'menu_class'      => 'footer-nav',
                            'menu_id'         => 'footer-menu',
                        ) );
                        ?>
                        <div class="footer-block">
                            <a href="https://www.3klik.kz/" class="block-link">
                                <img src="<?php echo get_template_directory_uri(); ?>./img/footer/3klik.png" alt="" class="block-link__img">
                            </a>
                            <a href="https://metrika.yandex.kz/promo?" class="block-link">
                                <img src="<?php echo get_template_directory_uri(); ?>./img/footer/metrika.png" alt="" class="block-link__img">
                            </a>
                            <a href="https://zdesign.kz/" class="block-link">
                                <img src="<?php echo get_template_directory_uri(); ?>./img/footer/zdesign.png" alt="" class="block-link__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
