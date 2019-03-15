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
    <div class="<?php echo esc_attr($container); ?>">
        <?php
        if (has_nav_menu('footer')) {
            wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container_id' => 'footer-menu',
                    'fallback_cb' => false
                )
            );
        }
        ?>
        <div class="footer-right-side">
            <div class="footer-newsletter footer-section">
                <h3 class="footer-title"><?php echo __("Newsletter", "understrap");?></h3>
                <input class="newsletter-field" type="email" placeholder="<?php echo __("Email", "understrap");?>"/>
                <p class="newsletter-policy">
                    Genom att fylla i formuläret godkänner du
                    att dina personuppgifter behandlas enligt vår
                    integritetspolicy.
                </p>
                <button id="newsletter-signup" class="btn"><?php echo __("Subscribe", "understrap")?></button>
            </div>
            <div class="footer-socials footer-section">
                <h3 class="footer-title"><?php echo __("Follow us", "understrap");?></h3>
            </div>
            <div class="footer-contact footer-section">
                <h3 class="footer-title"><?php echo __("Contact", "understrap");?></h3>
                <div class="contact-section">
                    <h4 class="footer-title"><?php echo __("Phone", "understrap");?></h4>
                    <p>0771-25 00 00</p>
                </div>
                <div class="contact-section">
                    <h4 class="footer-title"><?php echo __("Email", "understrap");?></h4>
                    <p>info@easit.se</p>
                </div>
                <div class="contact-section">
                    <h4 class="footer-title"><?php echo __("Address", "understrap");?></h4>
                    <p>
                        Trädgårdsgatan 7, 852 31 Sundsvall
                        Svetsarvägen 7, 171 41 Solna
                    </p>
                </div>
            </div>
        </div>
    </div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<!-- BS Modal for search function -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button id="search-button" class="btn sf-spacing"><?php echo __("Search", 'understrap'); ?></button>
                <div class="search-field-container">
                    <input id="search-field" class="sf-spacing" type="text" placeholder="Sök på hemsidan..." />
                </div>
                <i class="fa fa-times" data-dismiss="modal" aria-label="Close">
                </i>
                <div id="quick-search-container">
                    <?php
                    if (has_nav_menu('quick-search')) {
                        $menuName = get_term(get_nav_menu_locations()['quick-search'], 'nav_menu')->name;

                        echo "<h2 class='menu-title'>$menuName</h2>";

                        wp_nav_menu(array(
                                'theme_location' => 'quick-search',
                                'container_id' => 'quick-search-menu',
                                'fallback_cb' => false
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

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

        //DEBUG ONLY
        window.addEventListener("resize", function () {
            $(".element-is-sticky").each(function () {
                const newWidth = document.documentElement.clientWidth;
                $(this).css("width", newWidth);
            });
        });
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
    // SEARCH

    $(function(){

    });
</script>

<script>
    $(document).ready(function () {
        const tab = $(".wpcs_tab");
        if(tab) {
            const tabClone = $($(tab)[0]).clone();
            tabClone.html("<a href='https://google.com'>Demo</a>");
            tabClone.removeAttr("aria-label");
            tabClone.addClass("custom-tab-clone");
            tabClone.prependTo($("body"));
        }
    });
</script>

</body>

</html>