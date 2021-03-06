<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<div class="container-fluid displayarea" style="background-image: url('<?php the_field('boende_bakgrundsbild'); ?>')">
    <div class="row">
        <div class="col-lg-6 wrap-flexbox displaypadding">
            <div class="slideinbottom_700">
                <h2 class="orangerubrik">
                    <?php the_field('boende_rubrik'); ?>
                </h2>
                <p class="displaypaddingtext">
                    <?php the_field('boende_text'); ?>
                    <a href="/bo/"><button type="button" class="btn btn-outline-light">Läs mer</button></a>
                </p>
            </div>
        </div>
        <div class="col-lg-6 nomobile displayimage">
        </div>
    </div>
</div>