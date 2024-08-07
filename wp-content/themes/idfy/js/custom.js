//--------------------------------------------------------Shamal's Code------------------------------------------------------//

//-----------------Hide Header on on scroll down---------------------//
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $("header").outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
let menuOpen = false;

function hasScrolled() {
    if (menuOpen) return; // Disable hasScrolled when menu is open

    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        $("header").removeClass("nav-down").addClass("nav-up");
        $('.dropdown').removeClass("active");
        $('.select-items').hide();
        $('.select-selected').removeClass("active-arrow");
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $("header").removeClass("nav-up").addClass("nav-down");
        }
    }

    lastScrollTop = st;
}

var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
    hasScrolled();
});
//-----------------Hide Header on on scroll down---------------------//

//-------------------Header Desktop Dropdown JS----------------------//
$(document).ready(function () {
    const dropdowns = document.querySelectorAll('.dropdown');
    const windowWidth = window.innerWidth;
    if (windowWidth > 1025) {
        dropdowns.forEach(dropdown => {
            // Handle mouseover event
            dropdown.addEventListener('mouseover', function () {
                dropdown.classList.add('active');
            });

            // Handle mouseout event to close dropdown when mouse leaves the entire dropdown
            dropdown.addEventListener('mouseleave', function () {
                dropdown.classList.remove('active');
            });
        });
    } else {
        dropdowns.forEach(dropdown => {
            const dropbtn = dropdown.querySelector('.dropbtn');
            // Handle click event
            dropbtn.addEventListener('click', function (event) {
                // Prevent default behavior for the dropdown button
                event.preventDefault();
                // Close other open dropdowns
                dropdowns.forEach(dd => {
                    if (dd !== dropdown) {
                        dd.classList.remove('active');
                    }
                });
                // Toggle the current dropdown
                dropdown.classList.toggle('active');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (event) {
            if (!event.target.closest('.dropdown')) {
                dropdowns.forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
            }
        });
    }
});
//-------------------Header Desktop Dropdown JS----------------------//

//-------------------Mobile humberger Menu------------------------//
$(document).ready(function () {
    if ($(window).width() <= 1024) {
        $("#toggle").click(function () {
            $(this).toggleClass("active");
            $('body').toggleClass("bodyNav");
            $(".nav-menu").toggleClass("open");
            if ($(".nav-menu").hasClass("open")) {
                menuOpen = true; // Menu is open
                $('body').css("overflow", "hidden");
                $('html').css("overflow", "hidden");
                $('.search-icon-mobile').css({ "opacity": "1", "height": "20", 'width': "20" });
                $('.logo .mobile-logo').css({ "opacity": "1", 'height': "auto" });
                $('.logo .desktop-logo').css({ "opacity": "0", 'height': "0" });
            } else {
                menuOpen = false; // Menu is closed
                $('body').css("overflow", "visible");
                $('html').css("overflow", "visible");
                $('.search-icon-mobile').css({ "opacity": "0", "height": "0", 'width': "0" });
                $('.logo .mobile-logo').css({ "opacity": "0", 'height': "0" });
                $('.logo .desktop-logo').css({ "opacity": "1", 'height': "auto" });
            }
        });
    }
});
//------------------Mobile Humberger Menu------------------------//

//---------------------Mobile dropdown Menu --------------------//
// $(document).ready(function () {
//     const mainNavs = document.querySelectorAll('.main-nav');

//     mainNavs.forEach(mainNav => {
//         mainNav.addEventListener('click', function (event) {
//             // Prevent default behavior
//             event.preventDefault();
//             // Toggle the current dropdown
//             const parentLi = this.closest('.main-list');
//             parentLi.classList.toggle('active');
//             // Close other open dropdowns
//             mainNavs.forEach(nav => {
//                 if (nav !== this) {
//                     nav.closest('.main-list').classList.remove('active');
//                 }
//             });
//         });
//     });

//     // Close dropdowns when clicking outside
//     document.addEventListener('click', function (event) {
//         if (!event.target.closest('.main-list')) {
//             mainNavs.forEach(mainNav => {
//                 mainNav.closest('.main-list').classList.remove('active');
//             });
//         }
//     });
// });
//-------------------Mobile dropdown Menu ---------------------//

//----------------------Header Country Select Dropdown-----------------//
//---------For Desktop--------//
$(document).ready(function () {
    var select = $('.custom-select');
    var selected = select.find('.select-selected');
    var items = select.find('.select-items');

    // Initially hide the selected option from the items list
    updateItems();

    // Show items on mouseover and hide on mouseout
    select.on('mouseover', function () {
        items.show();
        selected.addClass('active-arrow');
        select.addClass('active');
        updateItems(); // Update the items whenever they are shown
    }).on('mouseout', function () {
        items.hide();
        selected.removeClass('active-arrow');
        select.removeClass('active');
    });

    // Handle item selection
    items.on('click', 'li', function () {
        var selectedHTML = $(this).html();
        selected.html(selectedHTML);
        items.hide();
        selected.removeClass('active-arrow');
        select.removeClass('active');
        updateItems(); // Update the items after selection
    });

    function updateItems() {
        var selectedText = selected.text().trim();

        items.find('li').show().filter(function () {
            return $(this).text().trim() === selectedText;
        }).hide();
    }

    // Handle clicking outside the dropdown
    $(document).on('click', function (e) {
        if (!select.is(e.target) && select.has(e.target).length === 0) {
            items.hide();
            selected.removeClass('active-arrow');
            select.removeClass('active');
        }
    });

    // Update items on window scroll to handle dynamic changes
    $(window).on('scroll', function () {
        updateItems();
    });
});
//----------For Desktop-------//

//--------For Mobile--------//
$(document).ready(function () {
    var select = $('.custom-select-mobile');
    var selected = select.find('.select-selected-mobile');
    var items = select.find('.select-items-mobile');

    // Initially hide the selected option from the items list
    updateItems();

    // Show items on click and hide on outside click
    selected.on('click', function () {
        items.toggleClass('show');
        $(this).toggleClass('active-arrow');
        updateItems(); // Update the items whenever they are shown
    });

    // Handle item selection
    items.on('click', 'li', function () {
        var selectedHTML = $(this).html();
        selected.html(selectedHTML);
        items.removeClass('show');
        selected.removeClass('active-arrow');
        updateItems(); // Update the items after selection
    });

    function updateItems() {
        var selectedText = selected.text().trim();
        items.find('li').show().filter(function () {
            return $(this).text().trim() === selectedText;
        }).hide();

        // Remove border from all items first
        items.find('li').css('border-bottom', 'none');

        // Add border-bottom to all visible items except the last one
        items.find('li:visible').css('border-bottom', '1px solid #000000').last().css('border-bottom', 'none');
    }

    // Handle clicking outside the dropdown
    $(document).on('click', function (e) {
        if (!select.is(e.target) && select.has(e.target).length === 0) {
            items.removeClass('show');
            selected.removeClass('active-arrow');
        }
    });
});
//---------For Mobile------//
//----------------------Header Country Select Dropdown-----------------//

//----------------------------Search Modal---------------------------------//
//------For Desktop------//
function searchToggle() {
    let searchModal = document.getElementById('search-modal')
    searchModal.classList.add('active');
    $('body').css("overflow", "hidden");
    $('html').css("overflow", "hidden");
    $('body').addClass("overlay");
}
function closeSearch() {
    let searchModal = document.getElementById('search-modal')
    searchModal.classList.remove('active');
    $('body').css("overflow", "visible");
    $('html').css("overflow", "visible");
    $('body').removeClass("overlay");
}
//-------For Desktop-----//

//--------For Mobile--------//
function searchToggleMobile() {
    let searchModalMobile = document.getElementById('search-modal-mobile')
    searchModalMobile.classList.add('active');
    $('body').css("overflow", "hidden");
    $('html').css("overflow", "hidden");
    $('body').addClass("overlay");
    $('#overlay').addClass('searchOverlay');
}
function closeSearchMobile() {
    let searchModalMobile = document.getElementById('search-modal-mobile')
    searchModalMobile.classList.remove('active');
    $('body').css("overflow", "visible");
    $('html').css("overflow", "visible");
    $('body').removeClass("overlay");
    $('#overlay').removeClass('searchOverlay');
}
//--------For Mobile--------//
//---------------------------Search Modal---------------------------------//

//-----------------------------------------------------Shamal's Code-------------------------------------------------//


// // Timeline JS starts
// document.addEventListener("DOMContentLoaded", function () {
//     const years = document.querySelectorAll('.timeline-year');
//     const progressBar = document.getElementById('progress-bar');
//     const contentSections = document.querySelectorAll('.year-content');
//     const leftArrow = document.getElementById('left-arrow');
//     const rightArrow = document.getElementById('right-arrow');
//     let currentYearIndex = 0;
//     let autoProceedInterval;


//     function showContent(year) {
//         contentSections.forEach(section => {
//             section.classList.remove('active');
//         });
//         document.querySelector(`.year-content[data-year="${year}"]`).classList.add('active');
//     }

//     function updateProgressBar(toElement) {
//         const toRect = toElement.getBoundingClientRect();
//         const timelineRect = document.querySelector('.timeline').getBoundingClientRect();
//         const width = toRect.right - timelineRect.left;

//         progressBar.style.width = `${width}px`;

//         // Add processed class to timeline-years as progress bar passes through them
//         years.forEach(year => {
//             const yearRect = year.getBoundingClientRect();
//             if (yearRect.left <= toRect.right) {
//                 year.classList.add('processed');
//             } else {
//                 year.classList.remove('processed');
//             }
//         });
//     }

//     function highlightYear(yearElement) {
//         years.forEach(year => {
//             year.classList.remove('active');
//         });

//         yearElement.classList.add('active');
//     }

//     function navigateToYear(index) {
//         if (index >= 0 && index < years.length) {
//             const year = years[index];
//             const selectedYear = year.dataset.year;
//             showContent(selectedYear);
//             updateProgressBar(year);
//             highlightYear(year);
//             currentYearIndex = index;
//         }
//     }

//     function startAutoProceed() {
//         clearInterval(autoProceedInterval);
//         autoProceedInterval = setInterval(() => {
//             if (currentYearIndex < years.length - 1) {
//                 navigateToYear(currentYearIndex + 1);
//             } else {
//                 currentYearIndex = 0;
//                 years.forEach(year => year.classList.remove('processed')); // Reset all processed classes
//                 navigateToYear(currentYearIndex);
//             }
//         }, 3000);
//     }

//     years.forEach((year, index) => {
//         year.addEventListener('click', () => {
//             navigateToYear(index);
//             startAutoProceed(); // Restart auto proceed when a year is clicked
//         });
//     });

//     leftArrow.addEventListener('click', () => {
//         if (currentYearIndex > 0) {
//             navigateToYear(currentYearIndex - 1);
//             startAutoProceed(); // Restart auto proceed when left arrow is clicked
//         }
//     });

//     rightArrow.addEventListener('click', () => {
//         if (currentYearIndex < years.length - 1) {
//             navigateToYear(currentYearIndex + 1);
//             startAutoProceed(); // Restart auto proceed when right arrow is clicked
//         }

//         // Remove crossed class when moving forward
//         years.forEach((year, index) => {
//             if (index > currentYearIndex) {
//                 year.classList.remove('crossed');
//             }
//         });
//     });

//     // Initialize with the first year's content and start auto proceed
//     if (years.length > 0) {
//         navigateToYear(0);
//         startAutoProceed();
//     }
// });
// // Timeline JS starts






// Show more footer js starts
var more = false;
$("#trigger").click(function () {
    if (!more) {
        $("#more-content").slideDown();
        $("#trigger").text("Show Less");
        $("#trigger").addClass("btnArrow");
        more = true;
    }
    else {
        $("#more-content").slideUp();
        $("#trigger").text("Show More");
        $("#trigger").removeClass("btnArrow");
        more = false;
    }
});
// Show more footer js ends

$(document).ready(function () {
    $(".mainLinks .solutionLink").click(function () {
        $('.dropdownsolution').toggleClass("activeDropdown");
    });
});


// slider js starts
if ($(".pioneerSlidersec").length) {
    $(".pioneerSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: false,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 3000,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 720,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
            }
        ]
    });
}

if ($(".clientsSection").length) {
    $(".clientSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 2000,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 720,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            },
        ],
    });
}



if ($(".fraudstoriesSec").length) {
    $(".fraudStoryslider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 3000,
    });
}

if (window.innerWidth < 1025) {
    if ($(".onboardingJourneysec").length) {
        $(".onboardingSlider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            infinite: true,
            autoplay: true,
            speed: 1000,
            autoplaySpeed: 3000,
        });
    }
}

// slider js ends




// if (window.innerWidth > 820) {
//     // on scroll sticky section fraud stories js starts
//     gsap.registerPlugin(ScrollTrigger);

//     // Pin the section
//     ScrollTrigger.create({
//         trigger: ".fixed-section",
//         start: "top top",
//         end: "+=200%", // Adjust based on the desired scroll length
//         pin: true
//     });

//     // Create a timeline for the first box container
//     const tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: ".fixed-section",
//             start: "top top",
//             end: "+=200%", // Adjust based on the desired scroll length
//             scrub: true
//         }
//     });

//     // Select the first set of boxes
//     const boxes = document.querySelectorAll(".fixed-section .box-container .box");

//     // Add animations to the timeline for the first set of boxes
//     boxes.forEach((box, index) => {
//         tl.to(box, {
//             className: "+=activeBoxes",
//             duration: 1,
//             onStart: () => {
//                 if (index > 0) boxes[index - 1].classList.remove("activeBoxes");
//             }
//         });
//     });

//     // Create a timeline for the second box container
//     const tl2 = gsap.timeline({
//         scrollTrigger: {
//             trigger: ".fixed-section",
//             start: "top top",
//             end: "+=200%", // Adjust based on the desired scroll length
//             scrub: true
//         }
//     });

//     // Select the second set of boxes
//     const boxesTwo = document.querySelectorAll(".fixed-section .box-container-two .box");

//     // Add animations to the timeline for the second set of boxes
//     boxesTwo.forEach((box, index) => {
//         tl2.to(box, {
//             className: "+=active-two",
//             duration: 1,
//             onStart: () => {
//                 if (index > 0) boxesTwo[index - 1].classList.remove("active-two");
//             }
//         });
//     });

//     // on scroll sticky section fraud stories js starts
// }


// document.querySelectorAll('.boxContent').forEach(item => {
//     item.addEventListener('mouseover', () => {
//         item.classList.add('activeBoxes');
//     });
//     item.addEventListener('mouseout', () => {
//         item.classList.remove('activeBoxes');
//     });
// });

// on scroll sticky section fraud stories js starts






// product families js starts
// $<(document).ready(function () {
//     function updateSlides(slideIndex) {
//         var slides = $('.slider .slide');
//         slideIndex--; // Adjust slideIndex to match zero-based index
//         slides.each(function (index) {
//             $(this).removeClass('visible hidden hidden-behind');
//             if (index === slideIndex) {
//                 $(this).addClass('visible');
//             } else if (index === (slideIndex + 1) % slides.length) {
//                 $(this).addClass('hidden-behind');
//             } else if (index === (slideIndex + 2) % slides.length) {
//                 $(this).addClass('hidden');
//             }
//         });
//     }

//     $('.tab').on('click', function () {
//         var slideIndex = $(this).data('slide');
//         updateSlides(slideIndex);
//         $('.tab').removeClass('active');
//         $(this).addClass('active');
//     });

//     // Initialize the first slide as visible and the first tab as active
//     updateSlides(1);
//     $('.tab').first().addClass('active');
// });>
// product families js ends

document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('main-header');
    var banner = document.querySelector('.bannerSectionhp');

    // Function to add class to header when scrolled past the banner
    function addClassOnScroll() {
        if (window.scrollY > banner.clientHeight) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    // Event listener for scroll
    window.onscroll = function () {
        addClassOnScroll();
    };
});


// document.addEventListener('DOMContentLoaded', () => {
//     const navItems = document.querySelectorAll('#navMenu li');
//     const slides = document.querySelectorAll('.slide');

//     const updateActiveState = (slideNumber) => {
//         // Remove active class from all nav items and slides
//         navItems.forEach(nav => nav.classList.remove('active'));
//         slides.forEach(slide => slide.classList.remove('active'));

//         // Add active class to the clicked nav item and corresponding slide
//         document.querySelector(`#navMenu li[data-slide="${slideNumber}"]`).classList.add('active');
//         document.querySelector(`.slide[data-slide="${slideNumber}"]`).classList.add('active');
//     };

//     navItems.forEach(item => {
//         item.addEventListener('click', (e) => {
//             const slideNumber = item.getAttribute('data-slide');
//             const targetSlide = document.querySelector(`.slide[data-slide="${slideNumber}"]`);
//             targetSlide.scrollIntoView({ behavior: 'smooth' });

//             // Manually update the active state
//             updateActiveState(slideNumber);
//         });
//     });

//     window.addEventListener('scroll', () => {
//         let currentSlide = null;
//         slides.forEach(slide => {
//             const rect = slide.getBoundingClientRect();
//             if (rect.top >= 0 && rect.top <= window.innerHeight / 2) {
//                 currentSlide = slide.getAttribute('data-slide');
//             }
//         });
//         if (currentSlide) {
//             updateActiveState(currentSlide);
//         }
//     });
// });







$.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};




if ($(".enterpriseSection").length) {
    $(window).on('resize scroll', function () {
        if ($('.enterpriseSection').length) {
            if ($('.enterpriseSection').isInViewport()) {
                $(".Stickybtn").addClass("Stickybtnnewtwo")
            }
        }
    });
}

if ($("footer").length) {
    $(window).on('resize scroll', function () {
        if ($('footer').length) {
            if ($('footer').isInViewport()) {
                $(".Stickybtn").addClass("Stickybtnnewfooter")
            }
            else {
                $(".Stickybtn").removeClass("Stickybtnnewfooter")
            }
        }
    });
}





if ($(".onboardingJourneysec").length) {
    $(window).on('resize scroll', function () {
        if ($('.onboardingJourneysec').length) {
            if ($('.onboardingJourneysec').isInViewport()) {
                setTimeout(() => {
                    $(".onboardingJourneysec").addClass("onboardingJourneysecanime")
                }, 1000);
                setTimeout(() => {
                    $(".innerBoxesjourney h3").addClass("innerBoxesnew")
                }, 2800);
            }
            else {
                setTimeout(() => {
                    $(".onboardingJourneysec").removeClass("onboardingJourneysecanime")
                }, 1000);
                setTimeout(() => {
                    $(".innerBoxesjourney h3").removeClass("innerBoxesnew")
                }, 2800);
            }

        }
    });
}




// slider js starts

// ----------------------Timeline code--------------------------//
// document.addEventListener("DOMContentLoaded", function () {
//     const years = document.querySelectorAll('.timeline-year');
//     const progressBar = document.getElementById('progress-bar');
//     const contentSections = document.querySelectorAll('.year-content');
//     let currentYearIndex = 0;
//     let autoProceedInterval;
//     const pauseDuration = 2000; // Pause duration before restarting from the beginning

//     function showContent(year) {
//         contentSections.forEach(section => {
//             section.classList.remove('active');
//         });
//         document.querySelector(`.year-content[data-year="${year}"]`).classList.add('active');
//     }

//     function updateProgressBar(toElement) {
//         const toRect = toElement.getBoundingClientRect();
//         const timelineRect = document.querySelector('.timeline').getBoundingClientRect();
//         const width = toRect.right - timelineRect.left;

//         progressBar.style.width = `${width}px`;

//         // Add processed class to timeline-years as progress bar passes through them
//         years.forEach(year => {
//             const yearRect = year.getBoundingClientRect();
//             if (yearRect.left <= toRect.right) {
//                 year.classList.add('processed');
//             } else {
//                 year.classList.remove('processed');
//             }
//         });
//     }

//     function highlightYear(yearElement) {
//         years.forEach(year => {
//             year.classList.remove('active');
//         });

//         yearElement.classList.add('active');
//     }

//     function navigateToYear(index) {
//         if (index >= 0 && index < years.length) {
//             const year = years[index];
//             const selectedYear = year.dataset.year;
//             showContent(selectedYear);
//             updateProgressBar(year);
//             highlightYear(year);
//             currentYearIndex = index;
//         }
//     }

//     function startAutoProceed() {
//         clearInterval(autoProceedInterval);
//         autoProceedInterval = setInterval(() => {
//             if (currentYearIndex < years.length - 1) {
//                 $('.timeline').slick('slickNext');
//             } else {
//                 setTimeout(() => {
//                     currentYearIndex = 0;
//                     years.forEach(year => year.classList.remove('processed')); // Reset all processed classes
//                     $('.timeline').slick('slickGoTo', currentYearIndex);
//                 }, pauseDuration); // Pause before resetting
//             }
//         }, 3000);
//     }


//* jyoti code*/

(function ($) {
    $(function () {
        var $timeline = $('.timeline');
        var $yearContentData = $('.yearContentdata');
        var $timelineYears = $('.timeline-year');

        $timeline.slick({
            infinite: false,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 1500,
            slidesToScroll: 8,
            slidesToShow: 8,
            arrows: false,
            pauseOnHover: true,
            asNavFor: '.yearContentdata',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 830,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 730,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 3,
                    }
                }
            ]
        });

        $yearContentData.slick({
            autoplay: true,
            autoplaySpeed: 6000,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: true,
            prevArrow: '.left-arrow',
            nextArrow: '.right-arrow',
            asNavFor: '.timeline',
            speed: 1500,
            responsive: [
                {
                    breakpoint: 830,
                    settings: {
                        arrows: false,
                    }
                }
            ]
        });

        function updateTimelineColor(nextSlide) {
            $timelineYears.each(function (index) {
                if (index < nextSlide) {
                    $(this).addClass('activeBlue');
                    $(this).find('.timeline-line').addClass('active');
                } else if (index === nextSlide) {
                    $(this).addClass('activeMain');
                    $(this).removeClass('activeBlue');
                    // $(this).css('background-color', 'blue');
                    $(this).find('.timeline-line').addClass('active');
                } else {
                    $(this).addClass('activeGray');
                    $(this).removeClass('activeMain');
                    $(this).removeClass('activeBlue');
                    // $(this).css('background-color', 'transparent');
                    $(this).find('.timeline-line').removeClass('active');
                }
            });
        }

        $yearContentData.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            updateTimelineColor(nextSlide);
        });

        updateTimelineColor($yearContentData.slick('slickCurrentSlide'));
    });
})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    const timelineYears = document.querySelectorAll('.timeline-year');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');
    let currentIndex = 0;

    function updateActiveYear(index) {
        timelineYears.forEach(year => year.classList.remove('active'));
        document.querySelectorAll('.timeline-line').forEach(line => line.classList.remove('active'));

        const currentYear = timelineYears[index];
        currentYear.classList.add('active');
        currentYear.querySelectorAll('.timeline-line').forEach(line => line.classList.add('active'));
    }

    leftArrow.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateActiveYear(currentIndex);
        }
    });

    rightArrow.addEventListener('click', function () {
        if (currentIndex < timelineYears.length - 1) {
            currentIndex++;
            updateActiveYear(currentIndex);
        }
    });

    updateActiveYear(currentIndex);
});



//* jyoti code*/



// document.addEventListener('DOMContentLoaded', () => {
//     const navItems = document.querySelectorAll('#navMenu li');
//     const slides = document.querySelectorAll('.slide');

//     const updateActiveState = (slideNumber) => {
//         // Remove active class from all nav items and slides
//         navItems.forEach(nav => nav.classList.remove('active'));
//         slides.forEach(slide => slide.classList.remove('active'));

//         // Add active class to the clicked nav item and corresponding slide
//         document.querySelector(`#navMenu li[data-slide="${slideNumber}"]`).classList.add('active');
//         document.querySelector(`.slide[data-slide="${slideNumber}"]`).classList.add('active');
//     };

//     navItems.forEach(item => {
//         item.addEventListener('click', (e) => {
//             const slideNumber = item.getAttribute('data-slide');
//             const targetSlide = document.querySelector(`.slide[data-slide="${slideNumber}"]`);
//             targetSlide.scrollIntoView({ behavior: 'smooth' });

//             // Manually update the active state
//             updateActiveState(slideNumber);
//         });
//     });

//     window.addEventListener('scroll', () => {
//         let currentSlide = null;
//         slides.forEach(slide => {
//             const rect = slide.getBoundingClientRect();
//             if (rect.top >= 0 && rect.top <= window.innerHeight / 2) {
//                 currentSlide = slide.getAttribute('data-slide');
//             }
//         });
//         if (currentSlide) {
//             updateActiveState(currentSlide);
//         }
//     });
// });














$(".boxContentnew").hover(function (e) {
    var animid = $(this).data('anim');
    $('.boxContentnew').removeClass('showHover');
    $(this).addClass('showHover');
    $(".boxImgnew").removeClass('showAnim1');
    $("." + animid).addClass('showAnim1');
});





if ($('.imageDiv').hasClass('slick-current')) {
    $('.imageDiv').addClass('slickDots');
} else {
    $('.imageDiv').removeClass('slickDots');
}


if ($('body').hasClass('page-template-homepage')) {
    $('.Stickybtn').addClass('Stickybtnnew');
} else {
    $('.Stickybtn').removeClass('Stickybtnnew');
}





var rev = $('.rev_slider');
rev.on('init', function (event, slick, currentSlide) {
    var
        cur = $(slick.$slides[slick.currentSlide]),
        next = cur.next(),
        prev = cur.prev();
    prev.addClass('slick-sprev');
    next.addClass('slick-snext');
    cur.removeClass('slick-snext').removeClass('slick-sprev');
    slick.$prev = prev;
    slick.$next = next;
}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {

    var cur = $(slick.$slides[nextSlide]);
    slick.$prev.removeClass('slick-sprev');
    slick.$next.removeClass('slick-snext');
    next = cur.next(),
        prev = cur.prev();
    prev.prev();
    prev.next();
    prev.addClass('slick-sprev');
    next.addClass('slick-snext');
    slick.$prev = prev;
    slick.$next = next;
    cur.removeClass('slick-next').removeClass('slick-sprev');
});

rev.slick({
    speed: 1000,
    arrows: true,
    dots: false,
    focusOnSelect: true,
    asNavFor: '.slider-nav',

    infinite: true,
    centerMode: false,
    slidesPerRow: 1,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerPadding: '0',
    swipe: true,
    customPaging: function (slider, i) {
        return '';
    },
    /*infinite: false,*/
});

$('.slider-nav').slick({
    slidesToShow: 9,
    slidesToScroll: 9,
    asNavFor: '.rev_slider',
    dots: false,
    arrows:false,
    infinite:false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 7.9,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 920,
            settings: {
                slidesToShow: 6.9,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2.7,
                slidesToScroll: 1,
                infinite: true,
            }
        },
    ]
  });
