<?php
/**
Template Name: News
*/
?>
<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'category_name' => 'news',
    'paged' => $paged,
    'posts_per_page' => 4,
    'current_article_number' => get_query_var('current_post')
);

//query_posts($args);
$query = new WP_Query($args);

?>
<div id="news-articles">
    <div class="container pt-md-4 pb-5">
        <div class="row pb-md-3">
            <?php
            while ($query->have_posts()) : $query->the_post();
                /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */
                $current_post = $query->current_post;
                get_template_part('template-parts/post/content', get_post_format());
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous page', 'twentysixteen'),
                'next_text' => __('Next page', 'twentysixteen'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
            ));
            ?>
        </div>
    </div>
</div>


<?php
get_footer();
?>
