<?php get_header(); /* Template Name: Homepage */ ?>

<section class="bannerSectionhp">
    <?php if( have_rows('banner') ): ?>
        <?php while( have_rows('banner') ): the_row(); ?>
            <div class="bannerWrapper">
                <div class="bannerBg">
                    <video autoplay muted loop playsinline preload="metadata">
                        <source src="<?php bloginfo('template_directory'); ?>/images/banner-video.mp4" type="video/mp4">
                    </video>
                    <img src="<?php bloginfo('template_directory'); ?>/images/banner-img-hp.webp" alt="">
                </div>
                <div class="bannerContent">
                    <h1><?php echo get_sub_field('desk_banner'); ?></h1>
                    <h2><?php echo get_sub_field('desk_banner'); ?></h2>
                </div>
                <div class="bannerbtmLinks">
                    <ul>
                        <?php if( have_rows('banner') ): ?>
                            <?php while( have_rows('banner') ): the_row(); ?>
                                <li><?php echo get_sub_field('desk_banner'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="enterpriseSection">
    <?php if( have_rows('banner') ): ?>
        <?php while( have_rows('banner') ): the_row(); ?>
            <div class="enterpriseWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('desk_banner'); ?></h2>
                </div>
                <div class="enterpriseLogos">
                    <div class="logoDiv">
                        <?php if( have_rows('banner') ): ?>
                            <?php while( have_rows('banner') ): the_row(); ?>
                                <div class="innerBoxes">
                                    <?php $bannerimage = get_sub_field('banner_image'); if( !empty( $bannerimage ) ): ?>
                                        <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="pioneerSlidersec">
    <?php if( have_rows('banner') ): ?>
        <?php while( have_rows('banner') ): the_row(); ?>
            <div class="pionnerwrapper">
                <div class="secHeading">
                    <h3><?php echo get_sub_field('desk_banner'); ?></h3>
                    <h2><?php echo get_sub_field('desk_banner'); ?></h2>
                </div>
                <div class="pioneerSlider">
                    <?php if( have_rows('banner') ): ?>
                        <?php while( have_rows('banner') ): the_row(); ?>
                            <div class="innerSlides">
                                <div class="contentDiv">
                                    <h3><?php echo get_sub_field('desk_banner'); ?></h3>
                                    <p><?php echo get_sub_field('desk_banner'); ?></p>
                                </div>
                                <div class="imageDiv">
                                    <div class="mainImg">
                                        <?php $bannerimage = get_sub_field('banner_image'); if( !empty( $bannerimage ) ): ?>
                                            <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="dots">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/hp-pioneer-slide-dots.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="onboardingJourneysec">
    <div class="innerWrapper">
        <div class="secHeading">
            <h2>IDfy as a Platform</h2>
            <p>Fighting Fraud at Scale with the Least Possible Friction</p>
            <a href="#" class="ctaRed">Explore IDfy 360</a>
        </div>
        <div class="journeyData">
            <div class="contentDiv">
                <div class="innerBoxes">
                    <h3>Plug & Play:</h3>
                    <div class="journeyinnerData">
                        <h4>Bring your own Stack</h4>
                        <ul>
                            <li>Integrate with your own systems easily</li>
                            <li>Go-live in a jiffy</li>
                        </ul>
                    </div>
                </div>
                <div class="innerBoxes">
                    <h3>Comprehensive:</h3>
                    <div class="journeyinnerData">
                        <h4>End to End Solutions</h4>
                        <ul>
                            <li>Choose from our suite of 140+ onboarding and risk APIs</li>
                            <li>Or bring your own APIs</li>
                        </ul>
                    </div>
                </div>
                <div class="innerBoxes">
                    <h3>Customize:</h3>
                    <div class="journeyinnerData">
                        <h4>Build your journey from scratch</h4>
                        <ul>
                            <li>No-code; Drag & drop workflows></li>
                            <li>White label the user experience</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="centerCirclediv">
                <div class="outerborderDiv">
                    <div class="mainImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                    <div class="journeyIcons">
                        <img src="<?php bloginfo('template_directory'); ?>/images/journey-icon.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="contentDiv">
                <div class="innerBoxes">
                    <h3>Insights:</h3>
                    <div class="journeyinnerData">
                        <h4>Outsmart your competition</h4>
                        <ul>
                            <li>Gather Intel with real-time data dashboards</li>
                            <li>Track and optimize your journeys</li>
                        </ul>
                    </div>
                </div>
                <div class="innerBoxes">
                    <h3>Mitigate Risk:</h3>
                    <div class="journeyinnerData">
                        <h4>The latest fraud-busting tech</h4>
                        <ul>
                            <li>Detect document tampering, impersonation and more</li>
                            <li>Proprietary and predictive risk-modeling</li>
                        </ul>
                    </div>
                </div>
                <div class="innerBoxes">
                    <h3>Enterprise Ready:</h3>
                    <div class="journeyinnerData">
                        <h4>Grow with confidence</h4>
                        <ul>
                            <li>ISO and SOC 2, Type 2 certified platforms</li>
                            <li> Highly resilient and highly scalable across process and tech</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="productfamSection">
    <div class="innerWrapper">
        <div class="secHeading">
            <h2>Product Families</h2>
        </div>
        <div class="prodfamSlides">
            <div class="innerDiv">
                <ul class="tabs">
                    <li class="tab" data-slide="1">
                        <h3>KYC API Suite</h3>
                    </li>
                    <li class="tab" data-slide="2">
                        <h3>Privy</h3>
                    </li>
                    <li class="tab" data-slide="3">
                        <h3>Background verifications</h3>
                    </li>
                    <li class="tab" data-slide="4">
                        <h3>Video solutions</h3>
                    </li>
                    <li class="tab" data-slide="5">
                        <h3>Crime Check</h3>
                    </li>
                    <li class="tab" data-slide="6">
                        <h3>Risk & Fraud</h3>
                    </li>
                </ul>
            </div>
            <div class="slider">
                <div class="slide">
                    <div class="dataImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                    </div>
                    <div class="dataContent">
                        <h4>KYC API Suite</h4>
                        <h3>150+ APIs to help you with onboarding </h3>
                        <p>Come and explore our iBeta Certified,
                            ML-powered,highly-scalable and secure API suite.</p>
                        <a href="#" class="ctaRed">Explore API Documentation</a>
                    </div>
                </div>
                <div class="prodfamSlides">
                    <div class="tabs">
                        <?php if( have_rows('banner') ): ?>
                            <?php $counter=1; while( have_rows('banner') ): the_row(); ?>
                                <button class="tab" data-slide="<?php echo $counter; ?>">
                                    <h3><?php echo get_sub_field('desk_banner'); ?></h3>
                                </button>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="slider">
                        <?php if( have_rows('banner') ): ?>
                            <?php while( have_rows('banner') ): the_row(); ?>
                                <div class="slide">
                                    <div class="dataImg">
                                        <?php $bannerimage = get_sub_field('banner_image'); if( !empty( $bannerimage ) ): ?>
                                            <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="dataContent">
                                        <h4><?php echo get_sub_field('desk_banner'); ?></h4>
                                        <h3><?php echo get_sub_field('desk_banner'); ?></h3>
                                        <p><?php echo get_sub_field('desk_banner'); ?></p>
                                        <a href="<?php echo get_sub_field('desk_banner'); ?>" class="ctaRed"><?php echo get_sub_field('desk_banner'); ?></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="fraudstoriesSec fixed-section" id="fixedSection">
    <?php if( have_rows('banner') ): ?>
        <?php while( have_rows('banner') ): the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('desk_banner'); ?></h2>
                    <p><?php echo get_sub_field('desk_banner'); ?></p>
                </div>
                <div class="boxContent">
                    <div class="box-container">
                        <?php if( have_rows('banner') ): ?>
                            <?php $counter=1; while( have_rows('banner') ): the_row(); ?>
                                <div class="box <?php if($counter==1) { echo 'activeBoxes'; } ?>" id="boxesData">
                                    <p><?php echo get_sub_field('desk_banner'); ?></p>
                                    <a href="<?php echo get_sub_field('desk_banner'); ?>" class="ctaBlue"><?php echo get_sub_field('desk_banner'); ?></a>
                                </div>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="box-container-two">
                        <?php if( have_rows('banner') ): ?>
                            <?php $counter=1; while( have_rows('banner') ): the_row(); ?>
                                <div class="box <?php if($counter==1) { echo 'active-two'; } ?>" id="boxesImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                                    <div class="dotsInner">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                                    </div>
                                </div>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
                        <div class="box" id="boxesImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                            <div class="dotsInner">
                                <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                            </div>
                        </div>
                        <div class="box" id="boxesImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                            <div class="dotsInner">
                                <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<section class="fraudStoryslidermbl">
    <div class="fraudStoryslider">
        <div class="boxSlides">
            <div class="imgDiv">
                <div class="innerImg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                </div>
                <div class="dotsInner">
                    <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                </div>
            </div>
            <div class="contentDiv">
                <p>Agni was enjoying his Sunday Agni was enjoying his Sunday morning cup of tea, morning cup of tea, when morning cup tea, when he got a call from the police...</p>
                <a href="#" class="ctaBlue">Read More</a>
            </div>
        </div>
        <div class="boxSlides">
            <div class="imgDiv">
                <div class="innerImg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                </div>
                <div class="dotsInner">
                    <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                </div>
            </div>
            <div class="contentDiv">
                <p>Agni was enjoying his Sunday Agni was enjoying his Sunday morning cup of tea, morning cup of tea, when morning cup tea, when he got a call from the police...</p>
                <a href="#" class="ctaBlue">Read More</a>
            </div>
        </div>
        <div class="boxSlides">
            <div class="imgDiv">
                <div class="innerImg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                </div>
                <div class="dotsInner">
                    <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                </div>
            </div>
            <div class="contentDiv">
                <p>Agni was enjoying his Sunday Agni was enjoying his Sunday morning cup of tea, morning cup of tea, when morning cup tea, when he got a call from the police...</p>
                <a href="#" class="ctaBlue">Read More</a>
            </div>
        </div>
        <div class="boxSlides">
            <div class="imgDiv">
                <div class="innerImg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/pionner-slider-img.webp" alt="">
                </div>
                <div class="dotsInner">
                    <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                </div>
            </div>
            <div class="contentDiv">
                <p>Agni was enjoying his Sunday Agni was enjoying his Sunday morning cup of tea, morning cup of tea, when morning cup tea, when he got a call from the police...</p>
                <a href="#" class="ctaBlue">Read More</a>
            </div>
        </div>
    </div>
</section>


<section class="clientsSection">
    <div class="innerWrapper">
        <div class="secHeading">
            <h2>Hear from our clients</h2>
        </div>
        <div class="clientSlider">
            <div class="clientsliderSlides">
                <div class="imgnameDiv">
                    <div class="imgBox">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                        <div class="dotsInner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="nameDiv">
                        <h4>Priyanka Krishnan</h4>
                        <h5>Founder, Vahan</h5>
                    </div>
                </div>
                <div class="contentDiv">
                    <h3>"Digital onboarding from companies like IDfy has helped e-commerce players onboard people in huge numbers even in the difficult year of the pandemic."</h3>
                </div>
            </div>
            <div class="clientsliderSlides">
                <div class="imgnameDiv">
                    <div class="imgBox">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                        <div class="dotsInner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="nameDiv">
                        <h4>Priyanka Krishnan</h4>
                        <h5>Founder, Vahan</h5>
                    </div>
                </div>
                <div class="contentDiv">
                    <h3>" Digital onboarding from companies like IDfy has helped e-commerce players onboard people in huge numbers even in the difficult year of the pandemic. "</h3>
                </div>
            </div>
            <div class="clientsliderSlides">
                <div class="imgnameDiv">
                    <div class="imgBox">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                        <div class="dotsInner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="nameDiv">
                        <h4>Priyanka Krishnan</h4>
                        <h5>Founder, Vahan</h5>
                    </div>
                </div>
                <div class="contentDiv">
                    <h3>" Digital onboarding from companies like IDfy has helped e-commerce players onboard people in huge numbers even in the difficult year of the pandemic. "</h3>
                </div>
            </div>
            <div class="clientsliderSlides">
                <div class="imgnameDiv">
                    <div class="imgBox">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                        <div class="dotsInner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="nameDiv">
                        <h4>Priyanka Krishnan</h4>
                        <h5>Founder, Vahan</h5>
                    </div>
                </div>
                <div class="contentDiv">
                    <h3>" Digital onboarding from companies like IDfy has helped e-commerce players onboard people in huge numbers even in the difficult year of the pandemic. "</h3>
                </div>
            </div>
            <div class="clientsliderSlides">
                <div class="imgnameDiv">
                    <div class="imgBox">
                        <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                        <div class="dotsInner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                        </div>
                    </div>
                    <div class="nameDiv">
                        <h4>Priyanka Krishnan</h4>
                        <h5>Founder, Vahan</h5>
                    </div>
                </div>
                <div class="contentDiv">
                    <h3>" Digital onboarding from companies like IDfy has helped e-commerce players onboard people in huge numbers even in the difficult year of the pandemic. "</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="awardscertificateSec">
    <div class="innerWrapper">
        <div class="secHeading">
            <h2>Awards & Certificates</h2>
        </div>
        <div class="awardCertiInner">
            <div class="awardDiv">
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/technofast-awards.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>Technology Fast 50 2023 India</h3>
                    </div>
                </div>
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/technofast-awards.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>Technology Fast 50 2023 India</h3>
                    </div>
                </div>
            </div>
            <div class="certificateDiv">
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/aicpa-certificate.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>AICPA SOC 2</h3>
                    </div>
                </div>
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/aicpa-certificate.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>AICPA SOC 2</h3>
                    </div>
                </div>
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/aicpa-certificate.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>AICPA SOC 2</h3>
                    </div>
                </div>
                <div class="imgBox">
                    <div class="imgDiv">
                        <img src="<?php bloginfo('template_directory'); ?>/images/aicpa-certificate.png" alt="">
                    </div>
                    <div class="contentDiv">
                        <h3>AICPA SOC 2</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>