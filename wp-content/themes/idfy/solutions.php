<?php get_header(); /* Template Name: Solutions */ ?>
<?php $base_path = get_template_directory_uri() ; ?>
<section class="bannerSection">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="bannerInner">
                <h1>" <?php echo get_sub_field('banner_heading'); ?> "</h1>
                <h2><?php echo get_sub_field('banner_name'); ?></h2>
                <h3><?php echo get_sub_field('banner_description'); ?></h3>
                <div class="downArrow">
                    <a href="#nextSection"> <img src="<?php echo $base_path; ?>/images/banner-down-arrow.svg" alt=""></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="yearTimeline" id="nextSection">
    <?php if (have_rows('our_journey_section')) : ?>
        <?php while (have_rows('our_journey_section')) : the_row(); ?>
            <div class="timelineWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                    <div class="idfyDesc">
                        <h4><?php echo get_sub_field('section_bottom_note'); ?></h4>
                    </div>
                </div>
                <div class="timelineData">
                    <div class="contentDiv" id="contentDiv">
                        <div class="arrow left-arrow" id="left-arrow"> <img src="<?php echo $base_path; ?>/images/timeline-prev-arrow.svg" alt=""></div>
                        <div class="yearContentdata">
                            <?php if (have_rows('our_journey_content')) : ?>
                                <?php while (have_rows('our_journey_content')) : the_row(); ?>
                                    <div class="year-content" data-year="<?php echo get_sub_field('journey_year'); ?>">
                                        <div class="innerContent">
                                            <h3><?php echo get_sub_field('journey_year'); ?></h3>
                                            <h4><?php echo get_sub_field('card_heading'); ?></h4>
                                            <p><?php echo get_sub_field('card_description'); ?></p>
                                            <?php $valueCta = get_sub_field("cta_link");
                                            if ($valueCta) { ?>
                                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaWhite"><?php echo get_sub_field('cta_text'); ?></a>
                                            <?php } ?>
                                        </div>
                                        <div class="innerImg">
                                            <div class="imgDiv">
                                                <?php $journeyimage = get_sub_field('card_image');
                                                if (!empty($journeyimage)) : ?>
                                                    <img src="<?php echo esc_url($journeyimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($journeyimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="imgDots">
                                                <span class="bigDot"></span>
                                                <span class="mediumDot"></span>
                                                <span class="smallDot"></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="arrow right-arrow" id="right-arrow"> <img src="<?php echo $base_path; ?>/images/timeline-next-arrow.svg" alt=""></div>
                    </div>
                    <div class="timelineContainerdiv">
                        <div class="timeline">
                            <?php if (have_rows('our_journey_content')) : ?>
                                <?php while (have_rows('our_journey_content')) : the_row(); ?>
                                    <div class="timeline-year" data-year="<?php echo get_sub_field('journey_year'); ?>">
                                        <div class="dataTimeline">
                                            <div class="circle"><span></span></div>
                                            <h4><?php echo get_sub_field('journey_year'); ?></h4>
                                        </div>
                                        <div class="progressSvg">
                                            <svg class="timeline-line" width="289" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="0.5" y1="2.1857e-08" x2="0.499999" y2="18" stroke="#A7B0CA" />
                                                <line x1="32.5" y1="2.1857e-08" x2="32.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="64.5" y1="2.1857e-08" x2="64.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="96.5" y1="2.1857e-08" x2="96.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="128.5" y1="2.1857e-08" x2="128.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="160.5" y1="2.1857e-08" x2="160.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="192.5" y1="2.1857e-08" x2="192.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="224.5" y1="2.1857e-08" x2="224.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="256.5" y1="2.1857e-08" x2="256.5" y2="18" stroke="#A7B0CA" />
                                                <line x1="288.5" y1="2.1857e-08" x2="288.5" y2="18" stroke="#A7B0CA" />
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








<section class="ourSolutions">
    <?php if (have_rows('our_solutions_section')) : ?>
        <?php while (have_rows('our_solutions_section')) : the_row(); ?>
            <div class="solutionWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="innerDatadiv">
                    <?php if (have_rows('our_solutions_content')) : ?>
                        <?php while (have_rows('our_solutions_content')) : the_row(); ?>
                            <div class="innerDiv">
                                <div class="imgDiv">
                                    <?php $solutionimage = get_sub_field('card_image');
                                    if (!empty($solutionimage)) : ?>
                                        <img src="<?php echo esc_url($solutionimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($solutionimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="contentDiv">
                                    <h4><?php echo get_sub_field('card_sub_heading'); ?></h4>
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <div class="solutionList">
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="bookDemodiv">
    <?php if (have_rows('book_demo_section')) : ?>
        <?php while (have_rows('book_demo_section')) : the_row(); ?>
            <div class="innerWrapper">
                <h2><?php echo get_sub_field('section_heading'); ?></h2>
                <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaRed"><?php echo get_sub_field('cta_text'); ?></a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>




<?php get_footer(); ?>





