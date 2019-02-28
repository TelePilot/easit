<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer" id="wrapper-footer">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">
                    <div class="row">

                        <div class="col-lg-3">
                            <h3>Kontaktuppgifter</h3>
                            <?php the_field('adress', 'option'); ?>
                            <p><strong>E-post</strong><br>
                                <?php the_field('mailadress', 'option'); ?>
                            </p>
                            <p><strong>Telefonnummer</strong><br>
                                <?php the_field('telefonnummer', 'option'); ?>
                            </p>
                        </div>
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-3">
                            <a href="https://www.youtube.com/channel/UCjcWpao2rq8YTX7EpLwB9qw" target="_blank">
                                <div class="areaicon">
                                    <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                                        <g>
                                            <polygon class="youtube-icon" points="175.2,162.6 175.2,338.1 336.4,250.3 	"></polygon>
                                            <path class="youtube-icon" d="M488,0.8H12c-6.6,0-12,5.4-12,12v475.1c0,6.6,5.4,12,12,12h476c6.6,0,12-5.4,12-12V12.8C500,6.2,494.6,0.8,488,0.8z
                                                     M487,486.9H13V13.8h474V486.9z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/easit/" target="_blank">
                                <div class="areaicon">
                                    <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="LinkedIn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve" fill="#fedfed">
                                        <g>
                                            <path class="linkedin-icon" d="M487,13v474H13V13H487 M488,0H12C5.4,0,0,5.4,0,12v476c0,6.6,5.4,12,12,12h476c6.6,0,12-5.4,12-12V12
                                                C500,5.4,494.6,0,488,0L488,0z"></path>
                                        </g>
                                        <path class="linkedin-icon" d="M159.2,414h-71V185.8h71V414z M123.7,154.6c-22.8,0-41.2-18.4-41.2-41.1s18.4-41.1,41.2-41.1c22.7,0,41.1,18.4,41.1,41.1
                                            S146.4,154.6,123.7,154.6z M424.8,414h-70.9V303c0-26.5-0.5-60.5-36.9-60.5c-36.9,0-42.5,28.9-42.5,58.6V414h-70.9V185.8h68V217h1
                                            c9.5-17.9,32.6-36.9,67.1-36.9c71.8,0,85.1,47.2,85.1,108.7V414z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.facebook.com/easit/" target="_blank">
                                <div class="areaicon">
                                    <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #9096a4;
                                            }
                                        </style>
                                        <g>
                                            <path class="facebook-icon" d="M487,13.3v474H13v-474H487 M488,0.3H12c-6.6,0-12,5.4-12,12v476c0,6.6,5.4,12,12,12h476c6.6,0,12-5.4,12-12v-476
                                                        C500,5.7,494.6,0.3,488,0.3L488,0.3z" />
                                            <path class="facebook-icon" d="M407.5,223.4h-64.7V181c0-15.9,10.6-19.7,18-19.7c7.4,0,45.7,0,45.7,0V91.2L343.5,91
                                                    c-69.8,0-85.7,52.3-85.7,85.7v46.7h-40.4v72.2h40.4c0,92.7,0,204.3,0,204.3h84.9c0,0,0-112.8,0-204.3h57.3L407.5,223.4z" />
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <hr class="displayunder992">
                            <div class="afp-c79ec57a8e72a87d8a69d2c6b8a2a8d4"></div>

                        </div>
                    </div>
                </footer><!-- #colophon -->

            </div>
            <!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- ScrollReveal -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        window.sr = ScrollReveal();
        sr.reveal('.slideintop', {
            duration: 700,
            origin: 'top',
            distance: '100px',
            mobile: false
        });
        sr.reveal('.slideinleft', {
            duration: 1700,
            origin: 'left',
            distance: '300px',
            mobile: false
        });
        sr.reveal('.slideinright', {
            duration: 1700,
            origin: 'right',
            distance: '300px',
            mobile: false
        });
        sr.reveal('.slideinbottom_300', {
            duration: 300,
            origin: 'bottom',
            distance: '50px',
            mobile: false
        });
        sr.reveal('.slideinbottom_500', {
            duration: 500,
            origin: 'bottom',
            distance: '50px',
            mobile: false
        });
        sr.reveal('.slideinbottom_700', {
            duration: 700,
            origin: 'bottom',
            distance: '50px',
            mobile: false
        });
        jQuery('#wpbs_slider input').click(function(e) {
            e.stopPropagation();
        });
    });
</script>
<!-- ScrollReveal - END -->

<!-- Active Header -->
<script>
    $(document).ready(function() {
        $(window).on("scroll", function() {
            if ($(window).scrollTop() >= 100) {
                $(".navbar").addClass("compressed");
                $(".logo").addClass("compressed");
            } else {
                $(".navbar").removeClass("compressed");
            }
        });

        // Adjust first vc row that's not an extra menu to have a top padding equal to the height of the main menu.
        let menuPadding = ($("#extra-menu-fixed").length > 0 ? "59px" : "99px");
        $($('.vc_row.wpb_row:not(.vc_inner):not(:has(#extra-menu-fixed))')[0]).css('padding-top', menuPadding);
    });
</script>
<!-- Active Header - END -->



<script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>

<script src="https://www.apsislead.com/forms/formbuilder.js"></script>

<script>
    (function() {

        var form = new ApsisLead.FormbuilderInstance();

        form.init({

            formId: 'c79ec57a8e72a87d8a69d2c6b8a2a8d4'

        });

    })();
</script>

<script>
    $(function() {
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#stickyheader').offset().top;

        $(window).scroll(function() {
            if ($(window).scrollTop() > stickyHeaderTop) {
                $('#stickyheader').css({
                    position: 'fixed',
                    top: '107px'
                });
                $('#stickyalias').css('display', 'block');
            } else {
                $('#stickyheader').css({
                    position: 'static',
                    top: '80px'
                });
                $('#stickyalias').css('display', 'none');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#search').on("click", (function(e) {
            $(".form-group").addClass("sb-search-open");
            e.stopPropagation()
        }));
        $(document).on("click", function(e) {
            if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
                $(".form-group").removeClass("sb-search-open");
            }
        });
        $(".form-control-submit").click(function(e) {
            $(".form-control").each(function() {
                if ($(".form-control").val().length == 0) {
                    e.preventDefault();
                    $(this).css('border', '2px solid red');
                }
            })
        })
    })
</script>
</body>

</html>