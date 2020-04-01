<?php
/*
*   Template name: Статьи
*/
get_header('other-pages');
?>

    <div class="breadcrumbs">
        <div class="box">
            <a href="<?php echo get_home_url(); ?>" class="breadcrumbs__link">Главная</a>
            <span class="breadcrumb-text">Статьи</span>
        </div>
    </div>
    <article class="articles">
        <div class="box">
            <?php
            if (have_posts()):
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <div class="articles__item-container">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    "post_type" => "post",
    "posts_per_page" => 12,
    "paged" => $paged );
$articles = query_posts($args);?>
    <!-- the loop -->
<? foreach ($articles as $article) { ?>
                <a href="<?php echo $article->guid ?>" class="articles__item">
                    <img src="<?php
                    if(get_post_thumbnail_id($article->ID)) {
                        $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($article->ID),'medium', true);
                        echo $thumb_url[0];
                    }
                    else
                    {
                        echo the_field('картинка_статьи', $article->ID);
                    }?>" alt="<?php the_title(); ?>" class="articles__item-img">
                    <h3 class="articles__item-title"><?php echo wp_trim_words( $article->post_title, 12 ); ?></h3>
                    <p class="articles__item-text">
                        <?php echo wp_trim_words( $article->post_content, 20 ); ?>
                    </p>
                    <span class="articles__item-link">Читать дальше...</span>
                </a>
<? } ?>
            </div>
    <div id="pagination">
        <!-- pagination -->
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
    </div>
        </div>
    </article>

<?php
get_footer();
?>