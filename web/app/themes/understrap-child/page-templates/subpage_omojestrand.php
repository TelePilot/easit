<?php
/**
 * Template Name: Undersida - Om Öjestrand
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
            <div class="col-lg-12 subtext">
                <p>
                    <?php the_field('undersidetext'); ?>
                   </p>
                
                <h2 class="text-center">Personal</h2>
                <p>
                    <?php get_template_part( 'loop-templates/personal', 'page' ); ?>
                </p>
                <hr>
                <h2 class="text-center">Styrelse</h2>
                <p>
                    <?php get_template_part( 'loop-templates/styrelse', 'page' ); ?>
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
<!-- Wrapper end -->


<!-- Wrapper end -->

<?php get_footer(); ?>