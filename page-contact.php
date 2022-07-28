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
        <div class="contact-container container">
            <div class=" social col-md-6">
                <div class="content">
                    <h4 class='follow'>Follow us or send us a message on:</h4>

                    <div class="icons">
                        <a href="<?php echo get_field('linked_in') ?>" target="_blank"><img
                                src="<?php echo get_template_directory_uri() . '/img/linked_in.png' ?>" alt=""></a>
                        <a href="<?php echo get_field('meetup') ?>" target="_blank"><img
                                src="<?php echo get_template_directory_uri() . '/img/meetup.png' ?>" alt=""></a>
                        <a href="<?php echo get_field('slack') ?>" target="_blank"><img
                                src="<?php echo get_template_directory_uri() . '/img/slack.png' ?>" alt=""></a>

                    </div>
                </div>

            </div>

            <div class="contact-email col-md-6">
                <div class="content">
                    <h4 class="email">Send us an email at</h4>

                    <div class="email-address">
                        contact@codingsisterhood.com
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>