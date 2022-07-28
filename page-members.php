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
        <div class="member-dev container">
            <div class="dev-intro">
                <h2>Meet the Devs</h2>
                <div>So, you’re probably here because you are impressed by the smoothness of the site or absolutely love
                    the clickiness of the buttons and you NEED to find out who are the ones who made checking out a
                    website feel so good. <br><br>
                    Meet our developers who have stepped up to make this possible - all while juggling day jobs, being a
                    mother, and personal projects.</div>
            </div>
        </div>
        <div class="page-container member-img-section">
            <?php
                $args = array(  
                    'post_type' => 'member',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    );
        
                $loop = new WP_Query( $args ); 
                
                while ( $loop->have_posts() ) { ?>
            <div class="member-img">

                <?php $loop->the_post(); ?>
                <a href="<?php echo get_field('linkedin'); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
                <!-- <?php the_post_thumbnail('medium'); ?> -->
                <h4><?php the_title(); ?></h4>
                <!-- <p><?php the_excerpt(); ?></p> -->
            </div>
            <?php } ?>
        </div>


    </main>
</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>