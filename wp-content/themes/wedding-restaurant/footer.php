<?php $Url = get_template_directory_uri(); ?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wedding_Restaurant
 */

?>

</div><!-- #content -->

<footer id="footer" class="footer__short">
    <div class="container">
        <div class="footerContainer">
            <div class="footer__navigation navigationFooter">
                <div class="menu-menu-footer-container">
                    <ul id="menu-menu-footer" class="menu-bottom">
                        <li id="menu-item-4137"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4137">
                            <a href="<?php echo get_site_url() ?>">Trang chủ</a></li>
                        <li id="menu-item-2531"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2531"><a
                                href="<?php echo get_site_url() ?>">Ưu đãi</a></li>
                        <li id="menu-item-2532"
                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1786 current_page_item menu-item-2532">
                            <a href="<?php echo get_site_url() ?>/lien-he">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix margin-top-20"></div>
            <div class="footer__navigation navigationFooter">
                <ul class="clearfix">
                    <li>
                        <a class="social-item facebook" href="https://www.facebook.com/bachvietwedding/"
                            target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="social-item youtube" href="" target="_blank">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

<script type='text/javascript' src='<?php echo $Url ?>/js/app.js?ver=2'></script>
<script type='text/javascript' src='<?php echo $Url ?>/js/jquery.easing.min.js'></script>
</body>

</html>