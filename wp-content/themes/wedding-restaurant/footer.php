<?php $Url = get_template_directory_uri(); ?>
<footer>
    <div class="financity-footer-wrapper ">
        <div class="financity-footer-container financity-container clearfix">
            <div class="financity-footer-column financity-item-pdlr financity-column-20">
                <div id="text-2" class="widget widget_text financity-widget">
                    <div class="textwidget">
                        <p><img src="<?php echo $Url1 ?>/upload/color-bg.svg" alt=""></p>
                        <p>
                            <span class="gdlr-core-space-shortcode" id="span_f47b_8"></span> <i class="fa fa-phone"
                                id="i_f47b_6"></i> 888-394-4852
                            <br> <span class="gdlr-core-space-shortcode" id="span_f47b_9"></span> <i
                                class="fa fa-envelope-open-o" id="i_f47b_7"></i> Support@studentservicesplus.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="financity-footer-column financity-item-pdlr financity-column-15">
                <div id="nav_menu-1" class="widget widget_nav_menu financity-widget">
                    <h3 class="financity-widget-title">Useful Links</h3>
                    <div class="menu-useful-links-container">
                        <ul id="menu-useful-links" class="menu">
                            <li class="menu-item"><a href="<?php echo get_site_url();?>/about">About Us</a></li>
                            <li class="menu-item"><a href="<?php echo get_site_url(); ?>/services">Our Services</a></li>
                            <li class="menu-item"><a href="<?php echo get_site_url(); ?>/learnmore">Learn More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="financity-copyright-wrapper">
        <div class="financity-copyright-container financity-container clearfix">
            <div class="financity-copyright-left financity-item-pdlr">Copyright 2019, All Right Reserved, Student
                Services Plus</div>
        </div>
    </div>
</footer>
</div>

</div>

<script src="<?php echo $Url ?>/js/jquery.min.js"></script>
<script src="<?php echo $Url ?>/plugins/goodlayers-core/include/js/page-builder.js"></script>

<script>
jQuery(document).ready(function() {
    jQuery(".menu-item").removeClass("current-menu-item");
    jQuery(".menu-item-home").addClass("current-menu-item");
    //jQuery("#exampleModal").dialog();
});

// Get the modal
</script>

<?php wp_footer(); ?>
<script type="text/javascript">
/*<![CDATA[*/
function revslider_showDoubleJqueryError(sliderID) {
    var errorMessage =
        "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
    errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
    errorMessage +=
        "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
    errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
    errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
    jQuery(sliderID).show().html(errorMessage);
} /*]]>*/
</script>
<script>
/*<![CDATA[*/
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
var htmlDivCss = "";
if (htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement("div");
    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
} /*]]>*/
</script>
<script type="text/javascript">
/*<![CDATA[*/
var setREVStartSize = function() {
    try {
        var e = new Object,
            i = jQuery(window).width(),
            t = 9999,
            r = 0,
            n = 0,
            l = 0,
            f = 0,
            s = 0,
            h = 0;
        e.c = jQuery('#rev_slider_1_1');
        e.gridwidth = [1300];
        e.gridheight = [810];
        e.sliderLayout = "auto";
        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
            .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
            .sliderLayout) {
            var u = (e.c.width(), jQuery(window).height());
            if (void 0 != e.fullScreenOffsetContainer) {
                var c = e.fullScreenOffsetContainer.split(",");
                if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                    .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) /
                    100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e
                        .fullScreenOffset, 0))
            }
            f = u
        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
        e.c.closest(".rev_slider_wrapper").css({
            height: f
        })
    } catch (d) {
        console.log("Failure at Presize of Slider:" + d)
    }
};
setREVStartSize();
var tpj = jQuery;
var revapi1;
tpj(document).ready(function() {
    if (tpj("#rev_slider_1_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_1_1");
    } else {
        revapi1 = tpj("#rev_slider_1_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "//demo.goodlayers.com/financity/wp-content/plugins/revslider/public/assets/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    style: "uranus",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "uranus",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 10,
                    tmp: '<span class="tp-bullet-inner"></span>'
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1300,
            gridheight: 810,
            lazyType: "none",
            parallax: {
                type: "mouse",
                origo: "enterpoint",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
}); /*]]>*/
</script>
</body>

</html>