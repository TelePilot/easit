<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<?php 
	//Get header
	get_header(); 
	//Get image slider
	get_template_part( 'parts/parts-image-slider' );	
    $kategorier=array("Personal");
?>
       

                <div class="container personal">
                    <?php
                foreach($kategorier as $kategori){
                    ?>
                        <div class="row slideinbottom_700">
                                <?php
                            $args 	= array('post_type' => 'Personal','posts_per_page' => 12, 'post_status' => 'publish' ,'tax_query' => array(array('taxonomy' => 'personalkategorier','field' => 'name', 'terms' => $kategori)));
                    
                                
                            // The Query
                            $the_query = new WP_Query( $args );
                            $x = 0;
                            // The Loop
                            if ( $the_query->have_posts() ) {
                                
                                while ( $the_query->have_posts() ) {

                                    $the_query->the_post();

                                    //Get the data
                                    $id 			= get_the_ID();

                                   //Get the data
                                    $title 			= get_the_title();
                                    $image 			= get_field('personalbild');
                                    $position 		= get_field('personalposition');
                                    $epost 			= get_field('personalmailadress');
                                    $tel 			= get_field('personaltelefonnummer');
                                    $mobil 			= get_field('personalmobilnummer');
                                    //Start printing
                        ?>

                                    <div class="col-md-6 col-xs-12 topmarginforty" >
                                        <div class="personalbild centerimage" style="background-image: url('<?php the_field('personalbild'); ?>')"></div>
                                        <div class="text-center ">
                                            <div class="topmargintwenty">
                                               <span class="personalnamn"><?php echo $title; ?></span><br>
                                                <?php if( get_field('personalposition') ): ?><span class="personalposition"><?php the_field('personalposition'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('personaltelefonnummer') ): ?><span class="personaltelefonnummer"><?php the_field('personaltelefonnummer'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('personalmobilnummer') ): ?><span class="personalmobilnummer"><?php the_field('personalmobilnummer'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('personalmailadress') ): ?><span class="personalmailadress"><a href="mailto:<?php the_field('personalmailadress'); ?>"><?php the_field('personalmailadress'); ?></a><?php endif; ?></span>
                                            </div>
                                        </div>
                                    </div>
                            

                                    <?php }}?>
                                        <?php wp_reset_postdata(); ?>
                            </div>


                        <?php } ?>
                </div>