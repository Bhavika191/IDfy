<?php get_header(); /* Template Name: Solutions */ ?>

<section class="bannerSection">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="bannerInner">
                <h1>" <?php echo get_sub_field('banner_heading'); ?> "</h1>
                <h2><?php echo get_sub_field('banner_name'); ?></h2>
                <h3><?php echo get_sub_field('banner_description'); ?></h3>
                <div class="downArrow">
                    <a href="#nextSection"> <img src="<?php bloginfo('template_directory'); ?>/images/banner-down-arrow.svg" alt=""></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="yearTimeline" id="nextSection">
    <div class="timelineWrapper">
        <div class="secHeading">
            <h2>Come explore our journey.</h2>
            <div class="idfyDesc">
                <h4>IDfy - A mission to Eliminate Fraud and Establish Trust.</h4>
            </div>
        </div>
        <div class="timelineData">
            <div class="contentDiv" id="contentDiv">
                <div class="arrow left-arrow" id="left-arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/images/timeline-prev-arrow.svg" alt="">
                </div>
                <div class="yearContentdata">

                    <div class="year-content" data-year="1">
                        <div class="innerContent">
                            <h3>2011</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="2">
                        <div class="innerContent">
                            <h3>2013</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="3">
                        <div class="innerContent">
                            <h3>2015</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="4">
                        <div class="innerContent">
                            <h3>2018</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="5">
                        <div class="innerContent">
                            <h3>2020</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="6">
                        <div class="innerContent">
                            <h3>2022</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="7">
                        <div class="innerContent">
                            <h3>2023</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                    <div class="year-content" data-year="8">
                        <div class="innerContent">
                            <h3>2014</h3>
                            <h4>E-commerce, Sharing Economy
                                & Gig Work make waves</h4>
                            <p>The digital economy needs digital onboarding - IDfy launches onboarding solutions for customers, partners, users and merchants.</p>
                            <a href="#" class="ctaWhite">Explore Solution</a>
                        </div>
                        <div class="innerImg">
                            <div class="imgDiv">
                                <img src="<?php bloginfo('template_directory'); ?>/images/timeline-img.webp" alt="">
                            </div>
                            <div class="imgDots">
                                <span class="bigDot"></span>
                                <span class="mediumDot"></span>
                                <span class="smallDot"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow right-arrow" id="right-arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/timeline-next-arrow.svg" alt=""></div>
            </div>
            <div class="timelineContainerdiv">
                <div class="timeline">
                    <div class="timeline-year" data-year="1">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2011</h4>
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

                    <div class="timeline-year" data-year="2">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2013</h4>
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
                    <div class="timeline-year" data-year="3">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2015</h4>
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
                    <div class="timeline-year" data-year="4">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2018</h4>
                        </div>
                        <div class="progressSvg">
                            <svg class="timeline-line"  width="289" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="timeline-year" data-year="5">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2020</h4>
                        </div>
                        <div class="progressSvg">
                            <svg width="289"  class="timeline-line" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="timeline-year" data-year="6">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2022</h4>
                        </div>
                        <div class="progressSvg">
                            <svg width="289"  class="timeline-line" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="timeline-year" data-year="7">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2023</h4>
                        </div>
                        <div class="progressSvg">
                            <svg width="289"  class="timeline-line" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="timeline-year" data-year="8">
                        <div class="dataTimeline">
                            <div class="circle"><span></span></div>
                            <h4>2024</h4>
                        </div>
                        <div class="progressSvg">
                            <svg width="289"  class="timeline-line" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </div>
               
            </div>
        </div>
    </div>
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

<style>

.timeline-line.active line {
    stroke: #FF0000; /* Replace with your desired active stroke color */
}

</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const timelineYears = document.querySelectorAll('.timeline-year');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');
    let currentIndex = 0;

    // Function to update the active timeline year and its corresponding SVG lines
    function updateActiveYear(index) {
        // Remove active class from all timeline years and SVG lines
        timelineYears.forEach(year => year.classList.remove('active'));
        document.querySelectorAll('.timeline-line').forEach(line => line.classList.remove('active'));

        // Add active class to the current timeline year and its SVG lines
        const currentYear = timelineYears[index];
        currentYear.classList.add('active');
        currentYear.querySelectorAll('.timeline-line').forEach(line => line.classList.add('active'));
    }

    // Event listener for clicking the left arrow
    leftArrow.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateActiveYear(currentIndex);
        }
    });

    // Event listener for clicking the right arrow
    rightArrow.addEventListener('click', function () {
        if (currentIndex < timelineYears.length - 1) {
            currentIndex++;
            updateActiveYear(currentIndex);
        }
    });

    // Initialize the first timeline year as active
    updateActiveYear(currentIndex);
});

</script>

