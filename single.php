<?php
/**
 * Template Name: Базовый шаблон
 */
?>
<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-block">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(''); ?>
                    <?php endwhile; else: ?>
                        <?php _e('<br><br>Скоро здесь будет много интересного, а пока начните просмотр с главной страницы...'); ?>
                        <br>
                    <?php endif; ?><br>
                    <?php wp_reset_postdata(); ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
