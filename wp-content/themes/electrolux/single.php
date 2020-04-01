<?php
get_header('other-pages');
?>
    <div class="breadcrumbs">
        <div class="box">
            <a href="<?php echo get_home_url(); ?>" class="breadcrumbs__link">Главная</a>
            <a href="<?php echo get_home_url(null, "articles/");?>" class="breadcrumbs__link">Статьи</a>
            <span class="breadcrumb-text"><?php the_title(); ?></span>
        </div>
    </div>
    <section class="article-page">
        <div class="box">
            <img src="<?php the_field('картинка_статьи'); ?>" alt="Статья" class="article__image">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="article__title"><?php the_title(); ?></h1>

                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="article__button-container"><a href="<?php echo get_home_url(); ?>" class="article__button-home">Вернуться на главную</a></div>
        </div>
    </section>

<?php
get_footer();
