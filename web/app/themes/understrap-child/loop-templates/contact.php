<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class=" container-fluid kontakt">
    <div class="row">
        <div class="col-lg-6 kontaktbild slideinleft" style="background-image: url('<?php the_field('kontaktbakgrund', 'option'); ?>')">
            <span class="anchor" id="contact"></span>
        </div>
        <div class="col-lg-6 kontakttext slideinright">
            
            <p><?php the_field('kontakttext', 'option'); ?></p>
                            <p><strong>E-post</strong><br>
                            <?php the_field('mailadress', 'option'); ?></p>
                            <p><strong>Telefonnummer</strong><br>
                                <?php the_field('telefonnummer', 'option'); ?></p>
            <p><?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?></p>
        </div>
    </div>
</div>