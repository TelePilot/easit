<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>


<?php
if( have_rows('tjanster') ):
	$postCount = 1;
	while( have_rows('tjanster') ) : the_row(); ?>

<?php
			$header = get_sub_field('orangeheader');
			$backgroundimage = get_sub_field('bakgrundsbild');
			$content = get_sub_field('brodtext');
		?>
<?php $postCount++; ?>
<div class="parent-class tjanster">
    <?php if ( ($postCount % 2) == 1 ): ?>
    
    <div class="container-fluid fixedback">
        <div class="row">
            <div class="col-lg-6 displayimage" style="background-image: url('<?php echo $backgroundimage;?>')">
            </div>
            <div class="col-lg-6 displaypadding">
                <div class="slideinbottom_700">
                    <h2 class="orangerubrik">
                        <?php echo $header;?>
                    </h2>
                    <p>
                        <?php echo $content;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php else : ?>
    
    <div class="container-fluid fixedback">
        <div class="row">
            <div class="col-lg-6 displaypadding">
                <div class="slideinbottom_700">
                    <h2 class="orangerubrik">
                        <?php echo $header;?>
                    </h2>
                    <p>
                        <?php echo $content;?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 displayimage" style="background-image: url('<?php echo $backgroundimage;?>')">
                
            </div>
        </div>
    </div>
    
    <?php endif;  ?>
    
</div>

<?php endwhile;

endif;
?>