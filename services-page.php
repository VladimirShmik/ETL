<?php
/**
 * Template Name: Шаблон услуг
 */
?>

<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-block">
                        <h1><?php the_title(); ?></h1>
                        <h2>ТОО «Электролаборатория» предлагает услуги в сфере монтажных работ,
                            электролаборатории а так же энергоэкспертизы.</h2>
                        <div class="news-grid">
                            <?php
                            $query = new WP_Query(['category_name' => 'services']);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <a href="<?php get_permalink(); ?>" class="news-item">
                                        <?php get_the_post_thumbnail(); ?>
                                        <div class="news-block">
                                            <p class="news-block__title"><?php the_title(); ?></p>
                                        </div>
                                    </a>
                                    <?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            } else
                                echo 'Записей нет.';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>