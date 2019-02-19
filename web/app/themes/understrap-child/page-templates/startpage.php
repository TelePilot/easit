<?php
/**
 * Template Name: Startpage
 *
 * Template for displaying the Startpage.
 *
 * @package understrap
 */
?>
<?php get_header(); ?>

<!-- Wrapper -->
<div class="startpage wrapper" id="full-width-page-wrapper">

    <?php get_template_part( 'loop-templates/starttop', 'page' ); ?>

    <?php get_template_part( 'loop-templates/enterpriseservice', 'page' ); ?>

    <?php get_template_part( 'loop-templates/datamanagement', 'page' ); ?>

    <?php get_template_part( 'loop-templates/systemutveckling', 'page' ); ?>
    
    <?php get_template_part( 'loop-templates/kalender', 'page' ); ?>
    
    <?php get_template_part( 'loop-templates/nyheter', 'page' ); ?>
    
    <?php get_template_part( 'loop-templates/academy', 'page' ); ?>
    
    <?php get_template_part( 'loop-templates/kunder', 'page' ); ?>

    <!-- Kontakta oss -->
    <span class="anchor" id="kontakt"></span>
    <?php get_template_part( 'loop-templates/contact', 'page' ); ?>
    <!-- Kontakta oss - SLUT -->
</div>
<!-- Wrapper end -->

<?php get_footer(); ?>