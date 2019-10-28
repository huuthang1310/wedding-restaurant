<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php $Url = get_template_directory_uri(); ?>

<div class="financity-page-wrapper" id="financity-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 56px 0px 0px 0px;" id="gdlr-core-wrapper-1">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #172852 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb "
                            style="padding-bottom: 0px;">
                            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                data-source="gallery"
                                style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;"
                                    data-version="5.4.1">
                                    <ul>
                                        <?php
                                            $args = array(
                                                'category_name' => 'home_sideshow1'
                                            );
                                            $post_query = new WP_Query($args);
                                                if($post_query->have_posts() ) 
                                                {
                                                    while($post_query->have_posts() ) 
                                                    {
                                                        $post_query->the_post();
                                        ?>
                                        <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="<?php echo $Url ?>/upload/slider-1.jpg" data-rotate="0"
                                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                            data-param8="" data-param9="" data-param10="" data-description=""> <img
                                                src="<?php echo $Url ?>/upload/slider-1.jpg" alt="" title="slider-2-1"
                                                width="1800" height="1000" data-bgposition="center top"
                                                data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                                data-scalestart="100" data-scaleend="110" data-rotatestart="0"
                                                data-rotateend="0" data-blurstart="0" data-blurend="0"
                                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off"
                                                class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="29"
                                                data-y="center" data-voffset="30" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 128px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                <?php the_title(); ?></div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-6" data-x="37"
                                                data-y="center" data-voffset="-43" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; white-space: nowrap; font-size: 60px; font-weight: 400; color: #89a6ef; letter-spacing: 0px;font-family:Montserrat;">
                                                We deal with the</div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="38"
                                                data-y="center" data-voffset="157" data-width="['724']"
                                                data-height="['65']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":280,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; min-width: 724px; max-width: 724px; max-width: 65px; max-width: 65px; white-space: normal; font-size: 20px; line-height: 32px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                                                <?php the_excerpt(  ); ?></div>
                                            <a href="<?php echo get_site_url(); ?>/Contact">
                                                <div class="tp-caption rev-btn " id="slide-2-layer-4" data-x="36"
                                                    data-y="center" data-voffset="246" data-width="['auto']"
                                                    data-height="['auto']" data-type="button"
                                                    data-responsive_offset="on"
                                                    data-frames='[{"delay":640,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(55,64,176);bs:solid;bw:0 0 0 0;"}]'
                                                    data-textalign="['inherit','inherit','inherit','inherit']"
                                                    data-paddingtop="[21,21,21,21]" data-paddingright="[39,39,39,39]"
                                                    data-paddingbottom="[21,21,21,21]" data-paddingleft="[39,39,39,39]"
                                                    style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: #3740b0; letter-spacing: 0.5px;font-family:Asap;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                    Contact Us</div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php
                                            $args = array(
                                                'category_name' => 'home_sideshow2'
                                            );
                                            $post_query = new WP_Query($args);
                                                if($post_query->have_posts() ) 
                                                {
                                                    while($post_query->have_posts() ) 
                                                    {
                                                        $post_query->the_post();
                                        ?>
                                        <li data-index="rs-2" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="<?php echo $Url ?>/upload/slider-2.jpg" data-rotate="0"
                                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                            data-param8="" data-param9="" data-param10="" data-description=""> <img
                                                src="<?php echo $Url ?>/upload/slider-2.jpg" alt="" title="slider-2-1"
                                                width="1800" height="1000" data-bgposition="center top"
                                                data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                                data-scalestart="100" data-scaleend="110" data-rotatestart="0"
                                                data-rotateend="0" data-blurstart="0" data-blurend="0"
                                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off"
                                                class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="29"
                                                data-y="center" data-voffset="30" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 128px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                <?php the_title(); ?></div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-6" data-x="37"
                                                data-y="center" data-voffset="-43" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; white-space: nowrap; font-size: 60px; font-weight: 400; color: #89a6ef; letter-spacing: 0px;font-family:Montserrat;">
                                                We offer a 100% Money Back</div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="38"
                                                data-y="center" data-voffset="157" data-width="['724']"
                                                data-height="['65']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":280,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; min-width: 724px; max-width: 724px; max-width: 65px; max-width: 65px; white-space: normal; font-size: 20px; line-height: 32px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                                                <?php the_excerpt(  ) ?></div>
                                            <a href="<?php echo get_site_url(); ?>/Contact">
                                                <div class="tp-caption rev-btn " id="slide-2-layer-4" data-x="36"
                                                    data-y="center" data-voffset="246" data-width="['auto']"
                                                    data-height="['auto']" data-type="button"
                                                    data-responsive_offset="on"
                                                    data-frames='[{"delay":640,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(55,64,176);bs:solid;bw:0 0 0 0;"}]'
                                                    data-textalign="['inherit','inherit','inherit','inherit']"
                                                    data-paddingtop="[21,21,21,21]" data-paddingright="[39,39,39,39]"
                                                    data-paddingbottom="[21,21,21,21]" data-paddingleft="[39,39,39,39]"
                                                    style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: #3740b0; letter-spacing: 0.5px;font-family:Asap;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                    Contact Us</div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php
                                            $args = array(
                                                'category_name' => 'home_sideshow3'
                                            );
                                            $post_query = new WP_Query($args);
                                                if($post_query->have_posts() ) 
                                                {
                                                    while($post_query->have_posts() ) 
                                                    {
                                                        $post_query->the_post();
                                        ?>
                                        <li data-index="rs-3" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="<?php echo $Url ?>/upload/slider-1.jpg" data-rotate="0"
                                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                            data-param8="" data-param9="" data-param10="" data-description=""> <img
                                                src="<?php echo $Url ?>/upload/slider-1.jpg" alt="" title="slider-2-1"
                                                width="1800" height="1000" data-bgposition="center top"
                                                data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                                data-scalestart="100" data-scaleend="110" data-rotatestart="0"
                                                data-rotateend="0" data-blurstart="0" data-blurend="0"
                                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off"
                                                class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="29"
                                                data-y="center" data-voffset="30" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 80px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                <?php the_title(); ?></div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-6" data-x="37"
                                                data-y="center" data-voffset="-43" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; white-space: nowrap; font-size: 60px; font-weight: 400; color: #89a6ef; letter-spacing: 0px;font-family:Montserrat;">
                                                Your fund will be with held in</div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="38"
                                                data-y="center" data-voffset="157" data-width="['724']"
                                                data-height="['65']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":280,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; min-width: 724px; max-width: 724px; max-width: 65px; max-width: 65px; white-space: normal; font-size: 20px; line-height: 32px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                                                <?php the_excerpt(  ); ?></div>
                                                <a href="<?php echo get_site_url(); ?>/Contact"><div class="tp-caption rev-btn " id="slide-2-layer-4" data-x="36"
                                                data-y="center" data-voffset="246" data-width="['auto']"
                                                data-height="['auto']" data-type="button" data-responsive_offset="on"
                                                data-frames='[{"delay":640,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(55,64,176);bs:solid;bw:0 0 0 0;"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[21,21,21,21]" data-paddingright="[39,39,39,39]"
                                                data-paddingbottom="[21,21,21,21]" data-paddingleft="[39,39,39,39]"
                                                style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: #3740b0; letter-spacing: 0.5px;font-family:Asap;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                Contact Us</div></a>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php
                                            $args = array(
                                                'category_name' => 'home_sideshow4'
                                            );
                                            $post_query = new WP_Query($args);
                                                if($post_query->have_posts() ) 
                                                {
                                                    while($post_query->have_posts() ) 
                                                    {
                                                        $post_query->the_post();
                                        ?>
                                        <li data-index="rs-4" data-transition="fade" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="<?php echo $Url ?>/upload/slider-2.jpg" data-rotate="0"
                                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                            data-param8="" data-param9="" data-param10="" data-description=""> <img
                                                src="<?php echo $Url ?>/upload/slider-2.jpg" alt="" title="slider-2-1"
                                                width="1800" height="1000" data-bgposition="center top"
                                                data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                                data-scalestart="100" data-scaleend="110" data-rotatestart="0"
                                                data-rotateend="0" data-blurstart="0" data-blurend="0"
                                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off"
                                                class="rev-slidebg" data-no-retina="">
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="29"
                                                data-y="center" data-voffset="30" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 5; white-space: nowrap; font-size: 110px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                <?php the_title(); ?></div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-6" data-x="37"
                                                data-y="center" data-voffset="-43" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 6; white-space: nowrap; font-size: 60px; font-weight: 400; color: #89a6ef; letter-spacing: 0px;font-family:Montserrat;">
                                                To report any problems with</div>
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="38"
                                                data-y="center" data-voffset="157" data-width="['724']"
                                                data-height="['65']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":280,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="z-index: 7; min-width: 724px; max-width: 724px; max-width: 65px; max-width: 65px; white-space: normal; font-size: 20px; line-height: 32px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                                                <?php the_content() ?>
                                                <h3
                                                    style="transition: none 0s ease 0s; text-align: inherit; line-height: 43px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 700; font-size: 36px;margin-top: -15px;">
                                                    <a href="tel:8883944852"
                                                        style="color: white; transition: none 0s ease 0s; text-align: inherit; line-height: 43px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 700; font-size: 36px;">888-394-4852</a>
                                                </h3>
                                            </div>
                                            <a href="<?php echo get_site_url(); ?>/Contact"><div class="tp-caption rev-btn " id="slide-2-layer-4" data-x="36"
                                                data-y="center" data-voffset="246" data-width="['auto']"
                                                data-height="['auto']" data-type="button" data-responsive_offset="on"
                                                data-frames='[{"delay":640,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(55,64,176);bs:solid;bw:0 0 0 0;"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[21,21,21,21]" data-paddingright="[39,39,39,39]"
                                                data-paddingbottom="[21,21,21,21]" data-paddingleft="[39,39,39,39]"
                                                style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: #3740b0; letter-spacing: 0.5px;font-family:Asap;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                Contact Us</div></a>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                    </ul>

                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $args = array(
                'category_name' => 'home_content1'
            );
            $post_query = new WP_Query($args);
                if($post_query->have_posts() ) 
                    {
                        while($post_query->have_posts() ) 
                        {
                            $post_query->the_post();
        ?>
        <div class="gdlr-core-pbf-wrapper " id="kacit">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_f47b_12"
                    data-parallax-speed="0.08"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                            id="div_f47b_13">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_f47b_3">
                                    <?php the_title() ?>
                                    <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper " id="div_f47b_14">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp"
                data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-hover-box-item gdlr-core-item-pdb clearfix  gdlr-core-center-align">
                            <div
                                class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb  gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-hover-box  gdlr-core-outer-frame-element  clearfix"
                                    id="div_f47b_15">
                                    <div class="gdlr-core-hover-box-content-wrap" id="div_f47b_16">
                                        <div class="gdlr-core-hover-box-thumbnail-inside gdlr-core-media-image"><img
                                                src="<?php echo $Url ?>/upload/service-icon.png" alt="" width="60"
                                                height="60"></div>
                                        <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                            id="div_f47b_17">
                                            <p><?php the_content() ?></p>
                                        </div>
                                    </div>
                                    <a class="gdlr-core-hover-box-link" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>

        <?php
            $args = array(
                'category_name' => 'home_content2'
            );
            $post_query = new WP_Query($args);
                if($post_query->have_posts() ) 
                    {
                        while($post_query->have_posts() ) 
                        {
                            $post_query->the_post();
        ?>
        <div class="gdlr-core-pbf-wrapper " id="div_f47b_33" data-skin="Home CTA">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_f47b_34"
                    data-parallax-speed="0.2"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInLeft"
                data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-call-to-action-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-left-align-right-button">
                            <div class="gdlr-core-call-to-action-item-inner">
                                <div class="gdlr-core-call-to-action-item-content-wrap">
                                    <h3 class="gdlr-core-call-to-action-item-title" id="h3_f47b_10"><?php the_title() ?>
                                    </h3>
                                    <div class="gdlr-core-call-to-action-item-caption gdlr-core-title-font gdlr-core-skin-caption"
                                        id="div_f47b_35"><?php the_content() ?></div>
                                </div>
                                <div class="gdlr-core-call-to-action-item-button"><a
                                        class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border"
                                        href="<?php echo get_site_url(); ?>/contact" id="a_f47b_0"><span
                                            class="gdlr-core-content">Contact
                                            Us</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>

        <div style="padding-bottom: 0px;" class="gdlr-core-pbf-wrapper " id="div_f47b_41" data-skin="Purple Personnel">
            <div class="gdlr-core-pbf-background-wrap" id="div_f47b_42"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height="half-height"
                            data-sync-height-center="">
                            <div class="gdlr-core-pbf-background-wrap" id="div_f47b_43">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_f47b_44"
                                    data-parallax-speed="0.2"></div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                                        id="div_f47b_45">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                                            id="div_f47b_46">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
            $args = array(
                'category_name' => 'home_content3'
            );
            $post_query = new WP_Query($args);
                if($post_query->have_posts() ) 
                    {
                        while($post_query->have_posts() ) 
                        {
                            $post_query->the_post();
        ?>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_f47b_47"
                            data-sync-height="half-height">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"
                                data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms"
                                data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                id="h3_f47b_18"><?php the_title( ) ?><span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                        id="div_f47b_48">
                                        <div class="gdlr-core-text-box-item-content" id="div_f47b_49">
                                            <p><?php the_content( ) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border"
                                            href="<?php echo get_site_url(); ?>/Contact" id="a_f47b_2"><span class="gdlr-core-content">Read Our
                                                Story</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <?php
            $args = array(
                'category_name' => 'home_content4'
            );
            $post_query = new WP_Query($args);
                if($post_query->have_posts() ) 
                    {
                        while($post_query->have_posts() ) 
                        {
                            $post_query->the_post();
        ?>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_f47b_50"
                            data-sync-height="half-height-2" data-sync-height-center="">
                            <div class="gdlr-core-pbf-background-wrap" id="div_f47b_51"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"
                                data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms"
                                data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                        id="div_f47b_52">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                                id="h3_f47b_19"><?php the_title() ?><span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <ul>
                                            <li class=" gdlr-core-skin-divider" id="li_f47b_0"><span
                                                    class="gdlr-core-icon-list-icon-wrap"></span><span
                                                    class="gdlr-core-icon-list-content"
                                                    id="span_f47b_3"><?php the_content(  ) ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border"
                                            href="<?php echo get_site_url(); ?>/Contact" id="a_f47b_3"><span class="gdlr-core-content">Read Our
                                                Story</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height="half-height-2">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_f47b_55"
                                    data-parallax-speed="0.1"></div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="gdlr-core-pbf-column gdlr-core-column-first">
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-alert-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                            <div class="gdlr-core-alert-box-item-inner gdlr-core-skin-e-background gdlr-core-skin-border"
                                style="background-color: #49b7df ;border-color: #3d9bbd;border-width: 3px;">
                                <div class="gdlr-core-alert-box-remove gdlr-core-js btn-close"><i
                                        class="fa fa-remove"></i></div>
                                <div class="gdlr-core-alert-box-item-head">
                                    <div class="gdlr-core-alert-box-item-icon"><i class="fa fa-info-circle"></i></div>
                                    <h2 class="gdlr-core-alert-box-item-title gdlr-core-skin-title"
                                        style="color: #ffffff;">Disclaimer</h2>
                                </div>
                                <div class="gdlr-core-alert-box-item-content gdlr-core-skin-e-content"
                                    style="overflow-y:scroll; height:500px">
                                    <h4 style="color:white">We are not a government agency, the Department of Education,
                                        or your loan servicer.</h4>
                                    <p>Student Services Plus is a private company, not affiliated with any state or
                                        federal government, including the Department of Education. We work strictly on
                                        behalf of the borrower with the borrower’s best interest in mind. As a Client of
                                        Student Services Plus, you will always know that you have our trained advocates
                                        working hard for you every step of the way.</p>
                                    <h4 style="color:white">We do not make loan payments on your behalf and loans remain
                                        in your name.</h4>
                                    <p>We assist in identifying appropriate government loan repayment programs and
                                        assist in document preparation to apply for the programs. Any fees that you pay
                                        to Student Services Plus are for its services and will not be applied to your
                                        outstanding loan balance(s). You are responsible for repaying your loan
                                        separately to your loan servicer.</p>
                                    <h4 style="color:white">
                                        Do it yourself without a fee – all income driven or based loan repayment
                                        programs or loan consolidation programs can be enrolled without charge or for
                                        free through the Department of Education and you loan servicer.
                                    </h4>
                                    <p>With a record number of student loan borrowers falling victim to default each
                                        day, we at Student Services Plus know firsthand how difficult it can be to
                                        navigate and understand the numerous government programs available. For some,
                                        navigating through multiple loan servicers, loan structures, statuses, small
                                        print, and different payment due dates every month can be overwhelming. There is
                                        no one-size-fits-all solution. We attempt to take the stress out of finding
                                        programs that meet the financial needs of our clients and assist our clients
                                        obtain the loan repayment program appropriate for them. In doing so, we charge
                                        fees for our services.</p>
                                    <h4 style="color:white">We only receive payment for our work after your loan forms
                                        are prepared, submitted, and you make your first payment on the new program.
                                    </h4>
                                    <p>Student Services Plus will not take any upfront fees. When you make a payment for
                                        our initial services, that payment does not go to us. Instead, the payment is
                                        taken by a third-party company and placed into that third-party company’s
                                        Dedicated Client Trust Account until our services are complete. What this
                                        process means is that your money is held entirely for your benefit in an
                                        FDIC-insured bank account until we prove to the third-party company holding your
                                        funds that we completed our services—e.g. you obtain a new loan repayment
                                        program and make a payment to your lender. If at any time you want your funds
                                        back from the Dedicated Client Trust Account prior to our completion of services
                                        for you, all you have to do is ask. </p>
                                    <p>At Student Services Plus, our employees have helped thousands of consumers find a
                                        student loan repayment plan that is more in line with their current financial
                                        situation. You can count on us to evaluate and assist you in applying for a
                                        repayment plan that better suits your desired lifestyle.</p>
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
<style>
/* The Modal (background) */
.modal {
    /* Hidden by default */
    display: none;
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: none;
    margin: 10% auto;
    /* 15% from the top and centered */
    padding: 20px;
    width: 80%;
    /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
<?php get_footer(); ?>