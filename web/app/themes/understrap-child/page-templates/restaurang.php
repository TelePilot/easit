<?php
/**
 * Template Name: Restaurang
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

        <div class="row topmarginforty text-center">
            
            <div class="col-lg-12 subtext">
                <h2>Lunchmeny v.<?php the_field('veckonummer'); ?>
                </h2>
                <hr>
                <h4>Måndag</h4>
                <p> 
                    <?php the_field('mandag'); ?>
                </p>
                <h4>Tisdag</h4>
                <p> 
                    <?php the_field('tisdag'); ?>
                </p>
                <h4>Onsdag</h4>
                <p> 
                    <?php the_field('onsdag'); ?>
                </p>
                <h4>Torsdag</h4>
                <p> 
                    <?php the_field('torsdag'); ?>
                </p>
                <h4>Fredag</h4>
                <p> 
                    <?php the_field('fredag'); ?>
                </p>
                <hr>
                <p> 
                    <?php the_field('ovrig_info'); ?>
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