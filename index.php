<?php
/**
 * Template Name: Шаблон главной страницы
 */
?>
<?php get_header(); ?>
<!--main-->
<main class="main">
    <!--start-section-->
    <section class="start-section">
        <div class="container-fluid">
            <div class="start-wrapper">
                <div class="start-slider">
                    <?php echo do_shortcode('[slide-anything id="45"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--info-section-->
    <section class="info-section">
        <div class="container-fluid">
                    <div class="info-grid">
                        <div class="info-block">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/info/info-icon-1.png" alt=""
                                 class="info-block__img">
                            <h3 class="info-block__title">ЭЛЕКТРОЛАБОРАТОРИЯ</h3>
                        </div>
                        <div class="info-block">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/info/info-icon-2.png" alt=""
                                 class="info-block__img">
                            <h3 class="info-block__title">ЭКСПЕРТИЗА ЭЛЕКТРОУСТАНОВОК</h3>
                        </div>
                        <div class="info-block">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/info/info-icon-3.png" alt=""
                                 class="info-block__img">
                            <h3 class="info-block__title">Монтаж релейной
                                защиты</h3>
                        </div>
                        <div class="info-block">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/info/info-icon-4.png" alt=""
                                 class="info-block__img">
                            <h3 class="info-block__title">ПРОВЕРКА СИЗ</h3>
                </div>
            </div>
        </div>
    </section>
    <!--about-section-->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrapper">
                        <div class="about-block">
                            <h2 class="h2-title">О компании</h2>
                            <p class="about-block__text">Компания ТОО «Электролаборатория»
                                предлагает не только качественное
                                выполнение электромонтажных работ, но и приемлемые цены. Современное оборудование,
                                используемое
                                нашими сотрудниками, значительно удешевляет стоимость работ.</p>
                            <p class="about-block__text">Наша организация всегда придерживается установленных сроков
                                выполнения работ.</p>
                            <a href="<?php bloginfo('url'); ?>/about-company/" class="about-block__link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--station-section-->
    <section class="station-section">
        <div class="station-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="station-wrapper">
                            <div class="station-block">
                                <h2 class="h2-title h2-title--white">Почему мы?</h2>
                                <p class="station-block__text">Наша электромонтажная организация давно зарекомендовала
                                    себя
                                    на
                                    отечественном рынке, как надежная специализарованная стабильная
                                    компания, выполняющая электромонтажные работы с высоким
                                    уровнем качества.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--partners-section-->
    <section class="partners-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-wrapper">
                        <div class="h2-title">Наши партнеры</div>
                        <div class="partners-slider">
                            <?php echo do_shortcode('[slide-anything id="28"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
