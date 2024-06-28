<?php get_header(); /* Template Name: Solutions */ ?>

<section class="bannerSection">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
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
    <?php if (have_rows('our_journey_section')) : ?>
        <?php while (have_rows('our_journey_section')) : the_row(); ?>
            <div class="timelineWrapper">
                <div class="secHeading">
                    <h2><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="timelineData">
                    <div class="contentDiv" id="contentDiv">
                        <div class="arrow left-arrow" id="left-arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/timeline-prev-arrow.svg" alt=""></div>
                        <div class="yearContentdata">
                            <?php if (have_rows('our_journey_content')) : ?>
                                <?php while (have_rows('our_journey_content')) : the_row(); ?>
                                    <div class="year-content" data-year="<?php echo get_sub_field('journey_year'); ?>">
                                        <div class="innerContent">
                                            <h3><?php echo get_sub_field('journey_year'); ?></h3>
                                            <h4><?php echo get_sub_field('card_heading'); ?></h4>
                                            <p><?php echo get_sub_field('card_description'); ?></p>
                                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaWhite"><?php echo get_sub_field('cta_text'); ?></a>
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
                        <div class="arrow right-arrow" id="right-arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/timeline-next-arrow.svg" alt=""></div>
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
                                            <svg width="289" height="18" viewBox="0 0 289 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <div class="progress-container">
                                <div class="progress-bar" id="progress-bar"></div>
                            </div>
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

<section class="ag-timeline-block">
    <div class="ag-format-container">
        <div class="ag-timeline_box">
            <div class="ag-timeline-carousel-arrow_box">
                <i class="js-ag-timeline-carousel-arrow_prev ag-timeline-carousel-arrow">
                    <svg class="svg-arrow-left">
                        <use xlink:href="#ag-arrow-left"></use>
                    </svg>
                </i>

                <i class="js-ag-timeline-carousel-arrow_next ag-timeline-carousel-arrow">
                    <svg class="svg-arrow-right">
                        <use xlink:href="#ag-arrow-right"></use>
                    </svg>
                </i>
            </div>

            <ul id="ag-timeline-carousel" class="js-timeline-carousel ag-timeline-carousel_list">
                <li>
                    <div class="ag-timeline_year">
                        2011
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>

                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>

                        <p>
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2012
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                        </p>

                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>

                        <p>
                            Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                            Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2013
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>

                        <p>
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </p>

                        <p>
                            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                        </p>

                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2014
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                            Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>

                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>

                        <p>
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2015
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                        </p>

                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>

                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2016
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </p>

                        <p>
                            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                        </p>

                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        2017
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>

                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>

                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="ag-timeline_year">
                        1999
                    </div>
                    <div class="ag-timeline_text">
                        <p>
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                        </p>

                        <p>
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </p>

                        <p>
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                    </div>
                </li>


            </ul>
        </div>
    </div>

    <div class="ag-timeline-carousel-nav_box">
        <ul class="js-timeline-carousel_nav ag-timeline-carousel-nav_list">
            <li class="ag-timeline-carousel-nav_item">2011</li>
            <li class="ag-timeline-carousel-nav_item">2012</li>
            <li class="ag-timeline-carousel-nav_item">2013</li>
            <li class="ag-timeline-carousel-nav_item">2014</li>
            <li class="ag-timeline-carousel-nav_item">2015</li>
            <li class="ag-timeline-carousel-nav_item">2016</li>
            <li class="ag-timeline-carousel-nav_item">2017</li>
            <li class="ag-timeline-carousel-nav_item">2018</li>
        </ul>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="ag-arrow-left" viewBox="0 0 7 12">
        <g>
            <path d="M6 0.999512L1 5.99951L6 10.9995" fill="transparent" stroke-linecap="round" stroke-linejoin="round" />
        </g>
    </symbol>

    <symbol id="ag-arrow-right" viewBox="0 0 7 12">
        <g>
            <path d="M1 10.9995L6 5.99951L1 0.999512" fill="transparent" stroke-linecap="round" stroke-linejoin="round" />
        </g>
    </symbol>
</svg>




<?php get_footer(); ?>