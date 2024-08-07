<?php get_header(); /* Template Name: Homepage */ ?>
<?php $base_path = get_template_directory_uri() ; ?>
<section class="bannerSectionhp" id="bannerSectionhp">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="bannerWrapper">
                <div class="bannerBg">
                    <video autoplay muted loop playsinline preload="metadata" class="desktopVideo">
                        <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
                    </video>
                    <video autoplay muted loop playsinline preload="metadata" class="mblVideo">
                        <source src="<?php echo get_sub_field('banner_mobile_video'); ?>" type="video/mp4">
                    </video>
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
                                <div class="imageDiv">
                                    <div class="mainImg">
                                        <?php $pioneerimg = get_sub_field('card_image');
                                        if (!empty($pioneerimg)) : ?>
                                            <img src="<?php echo esc_url($pioneerimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($pioneerimg['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="dots">
                                        <img src="<?php echo $base_path; ?>/images/hp-pioneer-slide-dots.svg" alt="">
                                    </div>
                                </div>
                                <div class="contentDiv">
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <?php $value = get_sub_field("card_cta_text");
                                    if ($value) { ?>
                                        <a href="<?php echo get_sub_field('card_cta_link'); ?>" class="ctaRed" target="_blank"><?php echo get_sub_field('card_cta_text'); ?></a>
                                    <?php } ?>

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
                    <?php $valuetwo = get_sub_field("cta_link");
                    if ($valuetwo) { ?>
                        <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('cta_text'); ?></a>
                    <?php } ?>
                </div>
                <div class="journeyData">
                    <div class="contentDivjourney">
                        <?php if (have_rows('left_pointers')) : ?>
                            <?php while (have_rows('left_pointers')) : the_row(); ?>
                                <div class="innerBoxesjourney">
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
                    <div class="contentDivjourney">
                        <?php if (have_rows('right_pointers')) : ?>
                            <?php while (have_rows('right_pointers')) : the_row(); ?>
                                <div class="innerBoxesjourney">
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
                    <div class="onboardingSlider">
                        <?php if (have_rows('left_pointers')) : ?>
                            <?php while (have_rows('left_pointers')) : the_row(); ?>
                                <div class="innerBoxesjourneyslide">
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
                                <div class="innerBoxesjourneyslide">
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
                <div class="prodfamSlides scroll-cards">

                    <div class="slider slider-for">
                        <div class="innerDiv">
                            <ul class="tabs slider-nav " id="navMenu">
                                <?php if (have_rows('product_families_content')) : ?>
                                    <?php $counter = 1;
                                    while (have_rows('product_families_content')) : the_row(); ?>
                                        <li class="tab" id="tabDiv" data-slide="<?php echo $counter; ?>">
                                            <h3><?php echo get_sub_field('card_heading'); ?>
                                                <?php $valuenew = get_sub_field("new_tag");
                                                if ($valuenew) { ?>
                                                    <span><?php echo get_sub_field('new_tag'); ?></span>
                                                <?php } ?>
                                            </h3>
                                        </li>
                                    <?php $counter = $counter + 1;
                                    endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="rev_slider">
                            <?php if (have_rows('product_families_content')) : ?>
                                <?php $counter = 1;
                                while (have_rows('product_families_content')) : the_row(); ?>
                                    <div class="scroll-cards__item slide rev_slide" aria-label="Wie - 1" data-slide="<?php echo $counter; ?>">
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
                                            <div class="productList">
                                                <ul>
                                                    <?php if (have_rows('card_pointers')) : ?>
                                                        <?php while (have_rows('card_pointers')) : the_row(); ?>
                                                            <li>
                                                                <?php echo get_sub_field('pointers_text'); ?>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('cta_text'); ?></a>
                                        </div>
                                    </div>
                                <?php $counter = $counter + 1;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>
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
                                <div class="box boxContentnew <?php if ($counter == 1) {
                                                                    echo 'showHover';
                                                                } ?>" id="boxesData" data-anim="fraudstory<?php echo $counter; ?>">
                                    <a href="<?php echo get_sub_field('cta_link'); ?>">
                                        <div class="fraudArrow">
                                            <p><?php echo get_sub_field('card_description'); ?></p>
                                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.59375 7.20312C1.04147 7.20313 0.59375 7.65084 0.59375 8.20313C0.59375 8.75541 1.04147 9.20313 1.59375 9.20312L1.59375 7.20312ZM18.7111 8.91023C19.1017 8.5197 19.1017 7.88654 18.7111 7.49602L12.3472 1.13206C11.9567 0.741531 11.3235 0.741531 10.933 1.13206C10.5424 1.52258 10.5424 2.15574 10.933 2.54627L16.5898 8.20312L10.933 13.86C10.5425 14.2505 10.5425 14.8837 10.933 15.2742C11.3235 15.6647 11.9567 15.6647 12.3472 15.2742L18.7111 8.91023ZM1.59375 9.20312L18.004 9.20312L18.004 7.20312L1.59375 7.20312L1.59375 9.20312Z" />
                                            </svg>


                                        </div>
                                    </a>
                                </div>
                            <?php $counter = $counter + 1;
                            endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="box-container-two">
                        <?php if (have_rows('fraud_stories_content')) : ?>
                            <?php $counter = 1;
                            while (have_rows('fraud_stories_content')) : the_row(); ?>
                                <div class="box boxImgnew  fraudstory<?php echo $counter; ?> <?php if ($counter == 1) {
                                                                                                    echo 'showAnim1';
                                                                                                } ?>" id="boxesImg">
                                    <div class="mainImg">
                                        <?php $fraudimg = get_sub_field('card_image');
                                        if (!empty($fraudimg)) : ?>
                                            <img src="<?php echo esc_url($fraudimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($fraudimg['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="dotsInner">
                                        <img src="<?php echo $base_path; ?>/images/fraud-stories-dots.svg" alt="">
                                    </div> -->
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
                                    <img src="<?php echo $base_path; ?>/images/fraud-stories-dots.svg" alt="">
                                </div>
                            </div>
                            <div class="contentDivfraud">
                                <a href="<?php echo get_sub_field('cta_link'); ?>">
                                    <div class="fraudArrow">
                                        <p><?php echo get_sub_field('card_description'); ?></p>
                                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.59375 7.20312C1.04147 7.20313 0.59375 7.65084 0.59375 8.20313C0.59375 8.75541 1.04147 9.20313 1.59375 9.20312L1.59375 7.20312ZM18.7111 8.91023C19.1017 8.5197 19.1017 7.88654 18.7111 7.49602L12.3472 1.13206C11.9567 0.741531 11.3235 0.741531 10.933 1.13206C10.5424 1.52258 10.5424 2.15574 10.933 2.54627L16.5898 8.20312L10.933 13.86C10.5425 14.2505 10.5425 14.8837 10.933 15.2742C11.3235 15.6647 11.9567 15.6647 12.3472 15.2742L18.7111 8.91023ZM1.59375 9.20312L18.004 9.20312L18.004 7.20312L1.59375 7.20312L1.59375 9.20312Z" />
                                        </svg>
                                    </div>
                                </a>
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
                                            <img src="<?php echo $base_path; ?>/images/client-slider-dots.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="nameDiv">
                                        <h4><?php echo get_sub_field('clients_name'); ?></h4>
                                        <h5><?php echo get_sub_field('clients_designation'); ?></h5>
                                    </div>
                                </div>
                                <div class="contentDivclient">
                                    <!-- <h3><?php echo get_sub_field('clients_review_text'); ?></h3> -->
                                    <h3><span class="topColon"> <img src="<?php echo $base_path; ?>/images/colon-up.svg" alt=""></span><?php echo get_sub_field('clients_review_text'); ?><span class="btmColon"> <img src="<?php echo $base_path; ?>/images/colon-down.svg" alt=""></span></h3>
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
                                    <div class="contentDivaward">
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
                                    <div class="contentDivaward">
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