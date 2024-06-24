<?php get_header(); /* Template Name: Solutions */ ?>

<section class="bannerSection">
    <?php if( have_rows('banner_section') ): ?>
        <?php while( have_rows('banner_section') ): the_row(); ?>
            <div class="bannerInner">
                <h1>" <?php echo get_sub_field('banner_heading'); ?> "</h1>
                <h2><?php echo get_sub_field('banner_name'); ?></h2>
                <h3><?php echo get_sub_field('banner_description'); ?></h3>
                <div class="downArrow">
                    <img src="<?php bloginfo('template_directory'); ?>/images/banner-down-arrow.svg" alt="">
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<section class="yearTimeline">
    <?php if( have_rows('our_journey_section') ): ?>
        <?php while( have_rows('our_journey_section') ): the_row(); ?>
            <div class="timelineWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="timelineData">
                    <div class="contentDiv" id="contentDiv">
                        <div class="arrow left-arrow" id="left-arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/timeline-prev-arrow.svg" alt=""></div>
                        <div class="yearContentdata">
                            <?php if( have_rows('our_journey_content') ): ?>
                                <?php while( have_rows('our_journey_content') ): the_row(); ?>
                                    <div class="year-content" data-year="<?php echo get_sub_field('journey_year'); ?>">
                                        <div class="innerContent">
                                            <h3><?php echo get_sub_field('journey_year'); ?></h3>
                                            <h4><?php echo get_sub_field('card_heading'); ?></h4>
                                            <p><?php echo get_sub_field('card_description'); ?></p>
                                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaWhite"><?php echo get_sub_field('cta_text'); ?></a>
                                        </div>
                                        <div class="innerImg">
                                            <div class="imgDiv">
                                                <?php $journeyimage = get_sub_field('card_image'); if( !empty( $journeyimage ) ): ?>
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
                        <div class="arrow right-arrow" id="right-arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/timeline-next-arrow.svg" alt=""></div>
                    </div>
                    <div class="timeline">
                        <?php if( have_rows('our_journey_content') ): ?>
                            <?php while( have_rows('our_journey_content') ): the_row(); ?>
                                <div class="timeline-year" data-year="<?php echo get_sub_field('journey_year'); ?>">
                                    <div class="circle"><span></span></div>
                                    <h4><?php echo get_sub_field('journey_year'); ?></h4>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="progress-container">
                            <div class="progress-bar" id="progress-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="idfyDesc">
                    <h4><?php echo get_sub_field('section_bottom_note'); ?></h4>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<section class="ourSolutions">
    <?php if( have_rows('our_solutions_section') ): ?>
        <?php while( have_rows('our_solutions_section') ): the_row(); ?>
            <div class="solutionWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="innerDatadiv">
                    <?php if( have_rows('our_solutions_content') ): ?>
                        <?php while( have_rows('our_solutions_content') ): the_row(); ?>
                            <div class="innerDiv">
                                <div class="imgDiv">
                                    <?php $solutionimage = get_sub_field('card_image'); if( !empty( $solutionimage ) ): ?>
                                        <img src="<?php echo esc_url($solutionimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($solutionimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="contentDiv">
                                    <h4><?php echo get_sub_field('card_sub_heading'); ?></h4>
                                    <h3><?php echo get_sub_field('card_heading'); ?></h3>
                                    <p><?php echo get_sub_field('card_description'); ?></p>
                                    <div class="solutionList">
                                        <ul>
                                            <?php if( have_rows('card_pointers') ): ?>
                                                <?php while( have_rows('card_pointers') ): the_row(); ?>
                                                    <li>
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/right-icon.svg" alt="">
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
    <div class="innerWrapper">
        <h2>Didn’t find what you’re looking for?</h2>
        <a href="#" class="ctaRed">Book a Demo</a>
    </div>
</section>





<?php get_footer(); ?>