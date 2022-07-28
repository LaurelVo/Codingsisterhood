<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?>
<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
    <main id="main" class="site-main" role="main">
        <?php 
            while (have_posts()) {
                the_post();
        ?>

        <img src="<?php echo get_template_directory_uri(); ?>/img/orange.png" class="orange-bg img-responsive">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pink.png" class="pink-bg img-responsive">
        <img src="<?php echo get_template_directory_uri(); ?>/img/purple.png" class="purple-bg img-responsive">
        <img src="<?php echo get_template_directory_uri(); ?>/img/red.png" class="red-bg img-responsive">

        <div class="container about-info">
            <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-9'); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <div class="clearfix"></div>
                    <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic'),
                    'after'  => '</div>',
                    'separator' => ''
                ));
                ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->
        </div>
        <?php 
                echo "\n\n";
                
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                }

                echo "\n\n";

            } //endwhile;
        ?>
    </main>
</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>