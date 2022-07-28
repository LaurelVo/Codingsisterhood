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
        <div class="page-container whats-on row">
            <?php
                $args = array(  
                    'post_type' => 'event',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    );
        
                $loop = new WP_Query( $args ); 
                
                while ( $loop->have_posts() ) { ?>
            <div class="event col-md-12">
                <?php $loop->the_post(); ?>
                <!--  col 4 -->
                <div class="col-md-5 img-wrapper">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <!-- col 8 -->
                <div class="col-md-7 info-wrapper">
                    <div class="info">
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                    </div>
                </div>

            </div>

            <?php } ?>

            <div class="event comming-event">
                <div class="info">
                    <h2>Coming Soon: Hackathon</h2>
                    <div>A hack-off in collaboration with GovHack 2022</div>
                </div>
            </div>
        </div>


    </main>
</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>