<?php
/**
 * Template Name: Шаблон контаков
 */
?>
<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-block">
                    <h1><?php the_title(); ?></h1>
                    <div class="contacts-grid">
                        <div class="contacts-block">
                            <?php the_content(''); ?>
                        </div>
                        <div class="contacts-form">
                            <h2 class="contacts-form__title">Свяжитесь с нами</h2>
                            <div class="form">
                                <?php echo do_shortcode('[contact-form-7 id="85" title="Форма обратной связи"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div style="position:relative;overflow:hidden;">
                        <a href="https://yandex.kz/maps/164/karaganda/?utm_medium=mapframe&utm_source=maps"
                           style="color:#eee;font-size:12px;position:absolute;top:0px;">Караганда</a>
                        <a href="https://yandex.kz/maps/164/karaganda/house/Y0oYdwNoTkQPQFpjfXt5d3ljZQ==/?from=mapframe&ll=73.148718%2C49.786501&source=mapframe&utm_medium=mapframe&utm_source=maps&z=16.99"
                           style="color:#eee;font-size:12px;position:absolute;top:14px;">Микрорайон Степной-3, 2/3
                            — Яндекс Карты</a>
                        <iframe src="https://yandex.kz/map-widget/v1/?from=mapframe&ll=73.148718%2C49.786501&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgozMzk0NDI4MjQ1ElXSmtCw0LfQsNKb0YHRgtCw0L0sINKa0LDRgNCw0pPQsNC90LTRiywg0KHRgtC10L_QvdC-0LktMyDRiNCw0pPRi9C9INCw0YPQtNCw0L3RiywgMi8zIgoNJUySQhVgJUdC&source=mapframe&utm_source=mapframe&z=16.99"
                                width="100%" height="400" frameborder="1" allowfullscreen="true"
                                style="position:relative;"></iframe>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
