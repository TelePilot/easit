<?php
/**
 * Template Name: Bokningsida
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Wrapper -->
<div class="subpage wrapper" id="full-width-page-wrapper">
    <?php get_template_part( 'loop-templates/subtop', 'page' ); ?>

    <div class="<?php echo esc_attr( $container ); ?>" id="content">
        
        <div class="row topmarginforty">
            <div class="col-lg-12 topmargin">
                <p>
                    <?php the_field('undersidetext'); ?>
                </p>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->

    </div>
    <!-- Container end -->

    <div>
        <?php get_template_part( 'loop-templates/contact', 'page' ); ?>
    </div>
</div>
<!-- Wrapper end -->


<!-- Wrapper end -->

<?php get_footer(); ?>