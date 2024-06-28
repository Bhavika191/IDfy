<?php get_header(); /* Template Name: Homepage */ ?>

<section class="bannerSectionhp">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="bannerWrapper">
                <div class="bannerBg">
                    <video autoplay muted loop playsinline preload="metadata">
                        <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
                    </video>
                    <?php $bannerimage = get_sub_field('banner_image_placeholder');
                    if (!empty($bannerimage)) : ?>
                        <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="bannerContent">
                    <h1><?php echo get_sub_field('banner_heading'); ?></h1>
                    <h2><?php echo get_sub_field('banner_description'); ?></h2>
                </div>
                <div class="bannerbtmLinks">
                    <ul>
                        <?php if (have_rows('key_pointers')) : ?>
                            <?php while (have_rows('key_pointers')) : the_row(); ?>
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
    <?php if (have_rows('elevating_enterprise')) : ?>
        <?php while (have_rows('elevating_enterprise')) : the_row(); ?>
            <div class="enterpriseWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="enterpriseLogos">
                    <div class="logoDiv">
                        <?php if (have_rows('enterprise_logos')) : ?>
                            <?php while (have_rows('enterprise_logos')) : the_row(); ?>
                                <div class="innerBoxes">
                                    <?php $companylogo = get_sub_field('company_logos');
                                    if (!empty($companylogo)) : ?>
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
    <?php if (have_rows('pioneer_section')) : ?>
        <?php while (have_rows('pioneer_section')) : the_row(); ?>
            <div class="pionnerwrapper">
                <div class="secHeading">
                    <h3><?php echo get_sub_field('section_sub_heading'); ?></h3>
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="pioneerSlider">
                    <?php if (have_rows('pioneer_content')) : ?>
                        <?php while (have_rows('pioneer_content')) : the_row(); ?>
                            <div class="innerSlides">
                                <div class="contentDiv">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <?php $value = get_sub_field("card_cta_text");
                                    if ($value) { ?>
                                         <a href="<?php echo get_sub_field('card_cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('card_cta_text'); ?></a>
                                    <?php } ?>

                                </div>
                                <div class="imageDiv">
                                    <div class="mainImg">
                                        <?php $pioneerimg = get_sub_field('card_image');
                                        if (!empty($pioneerimg)) : ?>
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
    <?php if (have_rows('idfy_platform_section')) : ?>
        <?php while (have_rows('idfy_platform_section')) : the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                    <p><?php echo get_sub_field('section_description'); ?></p>
                    <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('cta_text'); ?></a>
                </div>
                <div class="journeyData">
                    <div class="contentDiv">
                        <?php if (have_rows('left_pointers')) : ?>
                            <?php while (have_rows('left_pointers')) : the_row(); ?>
                                <div class="innerBoxes">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <div class="journeyinnerData">
                                        <h4><?php echo get_sub_field('card_pointers_heading'); ?></h4>
                                        <ul>
                                            <?php if (have_rows('card_pointers')) : ?>
                                                <?php while (have_rows('card_pointers')) : the_row(); ?>
                                                    <li><?php echo get_sub_field('pointers_text'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="centerCirclediv">
                        <div class="outerborderDiv">
                            <div class="mainImg">
                                <?php $circleimg = get_sub_field('circle_image');
                                if (!empty($circleimg)) : ?>
                                    <img src="<?php echo esc_url($circleimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($circleimg['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <?php if (have_rows('pointers_icon')) : ?>
                                <?php while (have_rows('pointers_icon')) : the_row(); ?>
                                    <div class="journeyIcons">
                                        <?php $iconfield = get_sub_field('icon_field');
                                        if (!empty($iconfield)) : ?>
                                            <img src="<?php echo esc_url($iconfield['url']); ?>" loading="lazy" alt="<?php echo esc_attr($iconfield['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="contentDiv">
                        <?php if (have_rows('right_pointers')) : ?>
                            <?php while (have_rows('right_pointers')) : the_row(); ?>
                                <div class="innerBoxes">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <div class="journeyinnerData">
                                        <h4><?php echo get_sub_field('card_pointers_heading'); ?></h4>
                                        <ul>
                                            <?php if (have_rows('card_pointers')) : ?>
                                                <?php while (have_rows('card_pointers')) : the_row(); ?>
                                                    <li><?php echo get_sub_field('pointers_text'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="onboardingSliderData">
                    <div class="centerCirclediv">
                        <div class="outerborderDiv">
                            <div class="mainImg">
                                <?php $circleimg = get_sub_field('circle_image'); if( !empty( $circleimg ) ): ?>
                                    <img src="<?php echo esc_url($circleimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($circleimg['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <?php if (have_rows('pointers_icon')) : ?>
                                <?php while (have_rows('pointers_icon')) : the_row(); ?>
                                    <div class="journeyIcons">
                                        <?php $iconfield = get_sub_field('icon_field');
                                        if (!empty($iconfield)) : ?>
                                            <img src="<?php echo esc_url($iconfield['url']); ?>" loading="lazy" alt="<?php echo esc_attr($iconfield['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="onboardingSlider">
                        <?php if (have_rows('left_pointers')) : ?>
                            <?php while (have_rows('left_pointers')) : the_row(); ?>
                                <div class="innerBoxes">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <div class="journeyinnerData">
                                        <h4><?php echo get_sub_field('card_pointers_heading'); ?></h4>
                                        <ul>
                                            <?php if (have_rows('card_pointers')) : ?>
                                                <?php while (have_rows('card_pointers')) : the_row(); ?>
                                                    <li><?php echo get_sub_field('pointers_text'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('right_pointers')) : ?>
                            <?php while (have_rows('right_pointers')) : the_row(); ?>
                                <div class="innerBoxes">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <div class="journeyinnerData">
                                        <h4><?php echo get_sub_field('card_pointers_heading'); ?></h4>
                                        <ul>
                                            <?php if (have_rows('card_pointers')) : ?>
                                                <?php while (have_rows('card_pointers')) : the_row(); ?>
                                                    <li><?php echo get_sub_field('pointers_text'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
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

<section class="productfamSection">
    <?php if (have_rows('product_families_section')) : ?>
        <?php while (have_rows('product_families_section')) : the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="prodfamSlides">
                    <div class="innerDiv">
                        <ul class="tabs slider-nav ">
                            <?php if (have_rows('product_families_content')) : ?>
                                <?php $counter = 1;
                                while (have_rows('product_families_content')) : the_row(); ?>
                                    <li class="tab" id="tabDiv" data-slide="<?php echo $counter; ?>">
                                        <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    </li>
                                <?php $counter = $counter + 1;
                                endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="slider slider-for">
                        <?php if (have_rows('product_families_content')) : ?>
                            <?php while (have_rows('product_families_content')) : the_row(); ?>
                                <div class="slide" id="slideId">
                                    <div class="dataImg">
                                        <?php $profamimg = get_sub_field('card_image');
                                        if (!empty($profamimg)) : ?>
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
    <?php if (have_rows('fraud_stories_section')) : ?>
        <?php while (have_rows('fraud_stories_section')) : the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                    <p><?php echo get_sub_field('section_description'); ?></p>
                </div>
                <div class="boxContent">
                    <div class="box-container">
                        <?php if (have_rows('fraud_stories_content')) : ?>
                            <?php $counter = 1;
                            while (have_rows('fraud_stories_content')) : the_row(); ?>
                                <div class="box <?php if ($counter == 1) {
                                                    echo 'activeBoxes';
                                                } ?>" id="boxesData">
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaBlue"><?php echo get_sub_field('cta_text'); ?></a>
                                </div>
                            <?php $counter = $counter + 1;
                            endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="box-container-two">
                        <?php if (have_rows('fraud_stories_content')) : ?>
                            <?php $counter = 1;
                            while (have_rows('fraud_stories_content')) : the_row(); ?>
                                <div class="box <?php if ($counter == 1) {
                                                    echo 'active-two';
                                                } ?>" id="boxesImg">
                                    <?php $fraudimg = get_sub_field('card_image');
                                    if (!empty($fraudimg)) : ?>
                                        <img src="<?php echo esc_url($fraudimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($fraudimg['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="dotsInner">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                                    </div>
                                </div>
                            <?php $counter = $counter + 1;
                            endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="fraudStoryslidermbl">
    <div class="fraudStoryslider">
        <?php if (have_rows('fraud_stories_section')) : ?>
            <?php while (have_rows('fraud_stories_section')) : the_row(); ?>
                <?php if (have_rows('fraud_stories_content')) : ?>
                    <?php while (have_rows('fraud_stories_content')) : the_row(); ?>
                        <div class="boxSlides">
                            <div class="imgDiv">
                                <div class="innerImg">
                                    <?php $fraudimg = get_sub_field('card_image');
                                    if (!empty($fraudimg)) : ?>
                                        <img src="<?php echo esc_url($fraudimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($fraudimg['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="dotsInner">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/fraud-stories-dots.svg" alt="">
                                </div>
                            </div>
                            <div class="contentDiv">
                                <p><?php echo get_sub_field('card_description'); ?></p>
                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaBlue"><?php echo get_sub_field('cta_text'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="clientsSection">
    <?php if (have_rows('clients_section')) : ?>
        <?php while (have_rows('clients_section')) : the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="clientSlider">
                    <?php if (have_rows('clients_reviews')) : ?>
                        <?php while (have_rows('clients_reviews')) : the_row(); ?>
                            <div class="clientsliderSlides">
                                <div class="imgnameDiv">
                                    <div class="imgBox">
                                        <?php $clientimg = get_sub_field('client_image');
                                        if (!empty($clientimg)) : ?>
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
    <?php if (have_rows('awards_certificates_section')) : ?>
        <?php while (have_rows('awards_certificates_section')) : the_row(); ?>
            <div class="innerWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="awardCertiInner">
                    <div class="awardDiv">
                        <?php if (have_rows('awards_content')) : ?>
                            <?php while (have_rows('awards_content')) : the_row(); ?>
                                <div class="imgBox">
                                    <div class="imgDiv">
                                        <?php $awardlogo = get_sub_field('award_logo');
                                        if (!empty($awardlogo)) : ?>
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
                        <?php if (have_rows('certificates_content')) : ?>
                            <?php while (have_rows('certificates_content')) : the_row(); ?>
                                <div class="imgBox">
                                    <div class="imgDiv">
                                        <?php $certificateslogo = get_sub_field('certificates_logo');
                                        if (!empty($certificateslogo)) : ?>
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