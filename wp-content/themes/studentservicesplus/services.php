<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
<?php $Url = get_template_directory_uri(); ?>
<div class="financity-page-wrapper" id="financity-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper  gdlr-core-hide-in-mobile" style="padding: 300px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(<?php echo $Url ?>/upload/about-team-bg1.jpg);background-size: cover;background-position: top center;"
                    data-parallax-speed="0"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container"></div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 10px 0px 10px 40px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-breadcrumbs-item gdlr-core-item-pdlr gdlr-core-item-pdb "> <span
                                property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="<?php echo get_site_url(); ?>"
                                    class="home"><span property="name">Home</span></a>
                                <meta property="position" content="1">
                            </span>•<span property="itemListElement" typeof="ListItem"><a property="item"
                                    typeof="WebPage" title="Go to Our Services." href="#"
                                    class="post post-page"><span property="name">Our Services</span></a>
                                <meta property="position" content="2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                                            $args = array(
                                                'category_name' => 'Our_Services_content'
                                            );
                                            $post_query = new WP_Query($args);
                                                if($post_query->have_posts() ) 
                                                {
                                                    while($post_query->have_posts() ) 
                                                    {
                                                        $post_query->the_post();
                                        ?>
        <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 0px 40px;">
            <div
                class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right"
                    style="padding: 60px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                            style="padding-bottom: 20px;">
                                            <div class="gdlr-core-text-box-item-content">
                                                <p><?php the_content( ) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

                <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  financity-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
                    style="padding: 60px 25px 30px 0px;">
                    <div class="gdlr-core-sidebar-item">
                        <div id="text-9" class="widget widget_text financity-widget">
                            <div class="textwidget">
                                <h3 class="large-widget-title"><?php the_title(  ) ?></h3> <span
                                    class="gdlr-core-space-shortcode" style="margin-top: -25px;"></span>
                            </div>
                        </div>

                        <div id="text-8" class="widget widget_text financity-widget">
                            <div class="textwidget">
                                <p>

                                    <span class="gdlr-core-space-shortcode" style="margin-top: 25px;"></span>
                                    <div class="gdlr-core-widget-box-shortcode"
                                        style="color: #3b3b3b;padding: 35px 35px 15px;border: 2px solid #313787;">
                                        <h3 class="gdlr-core-widget-box-shortcode-title" style="color: #3e4494;">Need
                                            Help ?</h3>
                                        <div class="gdlr-core-widget-box-shortcode-content">
                                            <p>Please feel free to contact us. We will get back to you with 1-2 business
                                                days. Or just call us now</p>
                                            <p><span style="font-size: 16px;"><i class="fa fa-phone"
                                                        style="font-size: 16px;color: #f68b46;margin-right: 10px;"></i>
                                                    <a href="#"> 888-394-4852</a></span>
                                                <br> <span style="font-size: 13px;"><i class="fa fa-envelope-open-o"
                                                        style="font-size: 16px;color: #f68b46;margin-right: 10px;"></i>
                                                    <a href="#"> Support@studentservicesplus.com</a></span>
                                            </p>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div id="myModal" class="modal" style="display: none !important">
                            <!-- Modal content -->
                            <div class="modal-content" style="display: none !important">
                                <div class="gdlr-core-pbf-column gdlr-core-column-first" style="display: none !important">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-alert-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-alert-box-item-inner gdlr-core-skin-e-background gdlr-core-skin-border"
                                                        style="background-color: #49b7df ;border-color: #3d9bbd;border-width: 3px;">
                                                        <div class="gdlr-core-alert-box-remove gdlr-core-js btn-close">
                                                            <i class="fa fa-remove"></i></div>
                                                        <div class="gdlr-core-alert-box-item-head">
                                                            <div class="gdlr-core-alert-box-item-icon"><i
                                                                    class="fa fa-info-circle"></i></div>
                                                            <h2 class="gdlr-core-alert-box-item-title gdlr-core-skin-title"
                                                                style="color: #ffffff;">Disclaimer</h2>
                                                        </div>
                                                        <div class="gdlr-core-alert-box-item-content gdlr-core-skin-e-content"
                                                            style="overflow-y:scroll; height:500px">
                                                            <h4 style="color:white">We are not a government agency, the
                                                                Department of Education, or your loan servicer.</h4>
                                                            <p>Student Services Plus is a private company, not
                                                                affiliated
                                                                with any state or federal government, including the
                                                                Department of Education. We work strictly on behalf of
                                                                the
                                                                borrower with the borrower’s best interest in mind. As a
                                                                Client of Student Services Plus, you will always know
                                                                that
                                                                you have our trained advocates working hard for you
                                                                every
                                                                step of the way.</p>
                                                            <h4 style="color:white">We do not make loan payments on your
                                                                behalf and loans remain in your name.</h4>
                                                            <p>We assist in identifying appropriate government loan
                                                                repayment programs and assist in document preparation to
                                                                apply for the programs. Any fees that you pay to Student
                                                                Services Plus are for its services and will not be
                                                                applied
                                                                to your outstanding loan balance(s). You are responsible
                                                                for
                                                                repaying your loan separately to your loan servicer.</p>
                                                            <h4 style="color:white">
                                                                Do it yourself without a fee – all income driven or
                                                                based
                                                                loan repayment programs or loan consolidation programs
                                                                can
                                                                be enrolled without charge or for free through the
                                                                Department of Education and you loan servicer.
                                                            </h4>
                                                            <p>With a record number of student loan borrowers falling
                                                                victim
                                                                to default each day, we at Student Services Plus know
                                                                firsthand how difficult it can be to navigate and
                                                                understand
                                                                the numerous government programs available. For some,
                                                                navigating through multiple loan servicers, loan
                                                                structures,
                                                                statuses, small print, and different payment due dates
                                                                every
                                                                month can be overwhelming. There is no one-size-fits-all
                                                                solution. We attempt to take the stress out of finding
                                                                programs that meet the financial needs of our clients
                                                                and
                                                                assist our clients obtain the loan repayment program
                                                                appropriate for them. In doing so, we charge fees for
                                                                our
                                                                services.</p>
                                                            <h4 style="color:white">We only receive payment for our work
                                                                after your loan forms are prepared, submitted, and you
                                                                make
                                                                your first payment on the new program.</h4>
                                                            <p>Student Services Plus will not take any upfront fees.
                                                                When
                                                                you make a payment for our initial services, that
                                                                payment
                                                                does not go to us. Instead, the payment is taken by a
                                                                third-party company and placed into that third-party
                                                                company’s Dedicated Client Trust Account until our
                                                                services
                                                                are complete. What this process means is that your money
                                                                is
                                                                held entirely for your benefit in an FDIC-insured bank
                                                                account until we prove to the third-party company
                                                                holding
                                                                your funds that we completed our services—e.g. you
                                                                obtain a
                                                                new loan repayment program and make a payment to your
                                                                lender. If at any time you want your funds back from the
                                                                Dedicated Client Trust Account prior to our completion
                                                                of
                                                                services for you, all you have to do is ask. </p>
                                                            <p>At Student Services Plus, our employees have helped
                                                                thousands
                                                                of consumers find a student loan repayment plan that is
                                                                more
                                                                in line with their current financial situation. You can
                                                                count on us to evaluate and assist you in applying for a
                                                                repayment plan that better suits your desired lifestyle.
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer" style="text-align:center">
                                                            <br /><br />
                                                            <a class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border btn-close"
                                                                href="#" onclick="modal.style.display='one';">
                                                                <span class="gdlr-core-content">Close</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>

    </div>
</div>

<?php get_footer(); ?>
<script>
        jQuery(document).ready(function () {
            jQuery(".menu-item").removeClass("current-menu-item");
            jQuery(".menu-item-service").addClass("current-menu-item");
        });
    </script>