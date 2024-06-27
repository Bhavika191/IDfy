<?php get_header(); /* Template Name: Homepage */ ?>

<section class="bannerSectionhp">
    <?php if( have_rows('banner_section') ): ?>
        <?php while( have_rows('banner_section') ): the_row(); ?>
            <div class="bannerWrapper">
                <div class="bannerBg">
                    <video autoplay muted loop playsinline preload="metadata">
                        <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
                    </video>
                    <?php $bannerimage = get_sub_field('banner_image_placeholder'); if( !empty( $bannerimage ) ): ?>
                        <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="bannerContent">
                    <h1><?php echo get_sub_field('banner_heading'); ?></h1>
                    <h2><?php echo get_sub_field('banner_description'); ?></h2>
                </div>
                <div class="bannerbtmLinks">
                    <ul>
                        <?php if( have_rows('key_pointers') ): ?>
                            <?php while( have_rows('key_pointers') ): the_row(); ?>
                                <li><?php echo get_sub_field('pointers_text'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="enterpriseSection">
    <?php if( have_rows('elevating_enterprise') ): ?>
        <?php while( have_rows('elevating_enterprise') ): the_row(); ?>
            <div class="enterpriseWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="enterpriseLogos">
                    <div class="logoDiv">
                        <?php if( have_rows('enterprise_logos') ): ?>
                            <?php while( have_rows('enterprise_logos') ): the_row(); ?>
                                <div class="innerBoxes">
                                    <?php $companylogo = get_sub_field('company_logos'); if( !empty( $companylogo ) ): ?>
                                        <img src="<?php echo esc_url($companylogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($companylogo['alt']); ?>" />
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
    <?php if( have_rows('pioneer_section') ): ?>
        <?php while( have_rows('pioneer_section') ): the_row(); ?>
            <div class="pionnerwrapper">
                <div class="secHeading">
                    <h3><?php echo get_sub_field('section_sub_heading'); ?></h3>
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="pioneerSlider">
                    <?php if( have_rows('pioneer_content') ): ?>
                        <?php while( have_rows('pioneer_content') ): the_row(); ?>
                            <div class="innerSlides">
                                <div class="contentDiv">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                </div>
                                <div class="imageDiv">
                                    <div class="mainImg">
                                        <?php $pioneerimg = get_sub_field('card_image'); if( !empty( $pioneerimg ) ): ?>
                                            <img src="<?php echo esc_url($pioneerimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($pioneerimg['alt']); ?>" />
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
        <div class="onboardingSliderData">
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
            <div class="onboardingSlider">
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
    <?php if( have_rows('product_families_section') ): ?>
        <?php while( have_rows('product_families_section') ): the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="prodfamSlides">
                    <div class="innerDiv">
                        <ul class="tabs">
                            <?php if( have_rows('product_families_content') ): ?>
                                <?php $counter=1; while( have_rows('product_families_content') ): the_row(); ?>
                                    <li class="tab" data-slide="<?php echo $counter; ?>">
                                        <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    </li>
                                <?php $counter=$counter+1; endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="slider">
                        <?php if( have_rows('product_families_content') ): ?>
                            <?php while( have_rows('product_families_content') ): the_row(); ?>
                                <div class="slide">
                                    <div class="dataImg">
                                        <?php $profamimg = get_sub_field('card_image'); if( !empty( $profamimg ) ): ?>
                                            <img src="<?php echo esc_url($profamimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($profamimg['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="dataContent">
                                        <h4><?php echo get_sub_field('card_heading'); ?></h4>
                                        <h3><?php echo get_sub_field('card_intro_heading'); ?></h3>
                                        <p><?php echo get_sub_field('card_description'); ?></p>
                                        <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('cta_text'); ?></a>
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
    <?php if( have_rows('fraud_stories_section') ): ?>
        <?php while( have_rows('fraud_stories_section') ): the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                    <p><?php echo get_sub_field('section_description'); ?></p>
                </div>
                <div class="boxContent">
                    <div class="box-container">
                        <?php if( have_rows('fraud_stories_content') ): ?>
                            <?php $counter=1; while( have_rows('fraud_stories_content') ): the_row(); ?>
                                <div class="box <?php if($counter==1) { echo 'activeBoxes'; } ?>" id="boxesData">
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaBlue"><?php echo get_sub_field('cta_text'); ?></a>
                                </div>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="box-container-two">
                        <?php if( have_rows('fraud_stories_content') ): ?>
                            <?php $counter=1; while( have_rows('fraud_stories_content') ): the_row(); ?>
                                <div class="box <?php if($counter==1) { echo 'active-two'; } ?>" id="boxesImg">
                                    <?php $fraudimg = get_sub_field('card_image'); if( !empty( $fraudimg ) ): ?>
                                        <img src="<?php echo esc_url($fraudimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($fraudimg['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="dotsInner">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                                    </div>
                                </div>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
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
    <?php if( have_rows('clients_section') ): ?>
        <?php while( have_rows('clients_section') ): the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="clientSlider">
                    <?php if( have_rows('clients_reviews') ): ?>
                        <?php while( have_rows('clients_reviews') ): the_row(); ?>
                            <div class="clientsliderSlides">
                                <div class="imgnameDiv">
                                    <div class="imgBox">
                                        <?php $clientimg = get_sub_field('client_image'); if( !empty( $clientimg ) ): ?>
                                            <img src="<?php echo esc_url($clientimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientimg['alt']); ?>" />
                                        <?php endif; ?>
                                        <div class="dotsInner">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/client-slider-dots.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="nameDiv">
                                        <h4><?php echo get_sub_field('clients_name'); ?></h4>
                                        <h5><?php echo get_sub_field('clients_designation'); ?></h5>
                                    </div>
                                </div>
                                <div class="contentDiv">
                                    <h3>"<?php echo get_sub_field('clients_review_text'); ?>"</h3>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="awardscertificateSec">
    <?php if( have_rows('awards_certificates_section') ): ?>
        <?php while( have_rows('awards_certificates_section') ): the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="awardCertiInner">
                    <div class="awardDiv">
                        <?php if( have_rows('awards_content') ): ?>
                            <?php while( have_rows('awards_content') ): the_row(); ?>
                                <div class="imgBox">
                                    <div class="imgDiv">
                                        <?php $awardlogo = get_sub_field('award_logo'); if( !empty( $awardlogo ) ): ?>
                                            <img src="<?php echo esc_url($awardlogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($awardlogo['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="contentDiv">
                                        <h3><?php echo get_sub_field('award_name'); ?></h3>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="certificateDiv">
                        <?php if( have_rows('certificates_content') ): ?>
                            <?php while( have_rows('certificates_content') ): the_row(); ?>
                                <div class="imgBox">
                                    <div class="imgDiv">
                                        <?php $certificateslogo = get_sub_field('certificates_logo'); if( !empty( $certificateslogo ) ): ?>
                                            <img src="<?php echo esc_url($certificateslogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($certificateslogo['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="contentDiv">
                                        <h3><?php echo get_sub_field('certificates_name'); ?></h3>
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

<?php get_footer(); ?>