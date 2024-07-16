<?php get_header(); /* Template Name: Homepage */ ?>
<style>
.scroll-cards__item.slide {
    scroll-snap-align: start !important;
    transition: transform 0.5s ease-in-out !important;
    position: sticky !important;
    top: max(10vh, 9em) !important;
    height: 751px !important;
}

.scroll-cards {
    scroll-snap-type: y mandatory !important;
}

.scroll-cards__item.slide.active {
    transform: translateY(0) !important;
    z-index: 1;
}

/* Generating the nth-of-type styles */
.scroll-cards__item.slide:nth-of-type(0) {
    transform: translateY(calc((0 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(1) {
    transform: translateY(calc((1 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(2) {
    transform: translateY(calc((2 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(3) {
    transform: translateY(calc((3 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(4) {
    transform: translateY(calc((4 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(5) {
    transform: translateY(calc((5 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(6) {
    transform: translateY(calc((6 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(7) {
    transform: translateY(calc((7 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(8) {
    transform: translateY(calc((8 - 5) * var(--offset))) !important;
}

.scroll-cards__item.slide:nth-of-type(9) {
    transform: translateY(calc((9 - 5) * var(--offset))) !important;
}



</style>
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
                    <h3>
                        <?php echo get_sub_field('section_sub_heading'); ?>
                    </h3>
                    <h2>
                        <?php echo get_sub_field('section_heading'); ?>
                    </h2>
                </div>
                <div class="sliderSection">
                    <div class="leftContent">
                        <div class="contentDiv">
                            <?php if (have_rows('pioneer_content')) : ?>
                                <?php while (have_rows('pioneer_content')) : the_row(); ?>
                                    <div class="innerBoxes">
                                        <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                        <p><?php echo get_sub_field('card_description'); ?></p>
                                        <?php $value = get_sub_field("card_cta_text");
                                        if ($value) { ?>
                                            <a href="<?php echo get_sub_field('card_cta_link'); ?>" class="ctaRed" target="_blank"><?php echo get_sub_field('card_cta_text'); ?></a>
                                        <?php } ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="rightImage">
                        <div class="imageSlider">
                            <?php if (have_rows('pioneer_content')) : ?>
                                <?php while (have_rows('pioneer_content')) : the_row(); ?>
                                    <div class="imageDiv">
                                        <div class="mainImg">
                                            <?php $pioneerimg = get_sub_field('card_image');
                                            if (!empty($pioneerimg)) : ?>
                                                <img src="<?php echo esc_url($pioneerimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($pioneerimg['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="dots">
                                            <svg width="218" height="242" viewBox="0 0 218 242" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="122.829" cy="78.7868" r="47.0901" transform="rotate(15 122.829 78.7868)" fill="#CE1010" class="bigCircle"/>
                                                <circle cx="128.353" cy="185.193" r="14.3537" transform="rotate(15 128.353 185.193)" fill="#CE1010" class="smallCircle"/>
                                                <ellipse cx="55.0377" cy="168.744" rx="26.441" ry="26.6928" transform="rotate(15 55.0377 168.744)" fill="#CE1010" class="mediumCircle"/>
                                            </svg>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
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
    <div class="innerWrapper">
        <div class="secHeading">
            <h2>Product Families</h2>
        </div>
        <div class="prodfamSlides scroll-cards">
            <div class="slider slider-for">
                <div class="innerDiv">
                    <ul class="tabs slider-nav " id="navMenu">
                        <li class="tab" id="tabDiv" data-slide="1">
                            <h3>KYC API Suite 1</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="2">
                            <h3>KYC API Suite 2</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="3">
                            <h3>KYC API Suite 3</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="4">
                            <h3>KYC API Suite 4</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="5">
                            <h3>KYC API Suite 5</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="6">
                            <h3>KYC API Suite 6</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="7">
                            <h3>KYC API Suite 7</h3>
                        </li>
                        <li class="tab" id="tabDiv" data-slide="8">
                            <h3>KYC API Suite 8</h3>
                        </li>
                    </ul>
                </div>
                <div id="slides">
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="1">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 1</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="2">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 2</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="3">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 3</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="4">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 4</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="5">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 5</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="6">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 6</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="7">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 7</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                    <div class="scroll-cards__item slide" aria-label="Wie - 1" data-slide="8">
                        <div class="dataImg">
                            <img src="<?php bloginfo('template_directory'); ?>/images/product-family-img.webp" alt="">
                        </div>
                        <div class="dataContent">
                            <h4>KYC API SUITE 8</h4>
                            <h3>150+ APIs to help you with onboarding</h3>
                            <p>Come and explore our iBeta Certified, ML-powered, highly-scalable and secure API suite.</p>
                            <a href="#" class="ctaRed">Explore API Documentation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <div class="box boxImgnew  fraudstory<?php echo $counter; ?> <?php if ($counter == 1) {
                                                                                                    echo 'showAnim1';
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
                            <div class="contentDivfraud">
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
                                <div class="contentDivclient">
                                    <h3><?php echo get_sub_field('clients_review_text'); ?>"</h3>
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