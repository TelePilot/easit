<?php
/**
 * Template Name: Startpage Visual
 *
 * Template for displaying the Startpage.
 *
 * @package understrap
 */
?>
<?php get_header(); ?>

<!-- Wrapper -->
<div class="startpage wrapper" id="full-width-page-wrapper">

    <!--<?php get_template_part( 'loop-templates/starttop', 'page' ); ?>-->
<div class="container">
    <?php get_template_part( 'loop-templates/content-visual', 'page' ); ?>
</div>
    <!-- Kontakta oss -->
    <span class="anchor" id="kontakt"></span>
    <?php get_template_part( 'loop-templates/contact-visual', 'page' ); ?>
    <!-- Kontakta oss - SLUT -->
</div>
<!-- Wrapper end -->

<?php get_footer(); ?>