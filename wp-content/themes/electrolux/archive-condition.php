<?php
// Template name: Страница кондиционеров
get_header('other-pages');
$term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

    <div class="page-catalog">
        <div class="breadcrumbs" typeof="v:Breadcrumb">
            <div class="container">
                <a class="breadcrumb" href="<?php echo get_home_url(); ?>" rel="v:url" property="v:title">Главная</a>
                >
                <div class="breadcrumb" rel="v:url" property="v:title">Каталог</div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>