// --------------------------------------------------------Shamal's Code------------------------------------------------------//

// -----------------Hide Header on on scroll down---------------------//
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
// -----------------Hide Header on on scroll down---------------------//

// ------------------Header Desktop Dropdown JS--------------------- //
$(document).ready(function () {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const dropbtn = dropdown.querySelector('.dropbtn');
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
});
// ------------------Header Desktop Dropdown JS--------------------- //

// -----------------Mobile humberger Menu----------------------//
$(document).ready(function () {
    if ($(window).width() <= 1024) {
        $("#toggle").click(function () {
            $(this).toggleClass("active");
            $("#overlay").toggleClass("open");
            if ($("#overlay").hasClass("open")) {
                menuOpen = true; // Menu is open
                $('body').css("overflow", "hidden");
                $('html').css("overflow", "hidden");
                $('.search-icon-mobile').css({"opacity": "1" ,"height":"20",'width':"20"});
                $('.logo .mobile-logo').css({ "opacity": "1", 'height': "auto" });
                $('.logo .desktop-logo').css({ "opacity": "0", 'height': "0" });
            } else {
                menuOpen = false; // Menu is closed
                $('body').css("overflow", "visible");
                $('html').css("overflow", "visible");
                $('.search-icon-mobile').css({"opacity": "0" ,"height":"0",'width':"0"});
                $('.logo .mobile-logo').css({ "opacity": "0", 'height': "0" });
                $('.logo .desktop-logo').css({ "opacity": "1", 'height': "auto" });
            }
        });
    }
});
// -----------------Mobile Humberger Menu----------------------//

//-------------------Mobile dropdown Menu -------------------//
$(document).ready(function () {
    const mainNavs = document.querySelectorAll('.main-nav');

    mainNavs.forEach(mainNav => {
        mainNav.addEventListener('click', function (event) {
            // Prevent default behavior
            event.preventDefault();
            // Toggle the current dropdown
            const parentLi = this.closest('.main-list');
            parentLi.classList.toggle('active');
            // Close other open dropdowns
            mainNavs.forEach(nav => {
                if (nav !== this) {
                    nav.closest('.main-list').classList.remove('active');
                }
            });
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.main-list')) {
            mainNavs.forEach(mainNav => {
                mainNav.closest('.main-list').classList.remove('active');
            });
        }
    });
});
//-------------------Mobile dropdown Menu -------------------//

// ---------------------Header Country Select Dropdown-----------------//
// --------For Desktop--------//
$(document).ready(function () {
    var select = $('.custom-select');
    var selected = select.find('.select-selected');
    var items = select.find('.select-items');

    selected.on('click', function () {
        items.toggle();
        $(this).toggleClass('active-arrow');
    });

    items.on('click', 'li', function () {
        selected.text($(this).text());
        items.hide();
        selected.removeClass('active-arrow');
    });

    $(document).on('click', function (e) {
        if (!select.is(e.target) && select.has(e.target).length === 0) {
            items.hide();
            selected.removeClass('active-arrow');
        }
    });
});
// ---------For Desktop-------//

// -------For Mobile--------//
$(document).ready(function () {
    var select = $('.custom-select-mobile');
    var selected = select.find('.select-selected-mobile');
    var items = select.find('.select-items-mobile');

    selected.on('click', function () {
        items.toggleClass('show');
        $(this).toggleClass('active-arrow');
    });

    items.on('click', 'li', function () {
        selected.text($(this).text());
        items.removeClass('show');
        selected.removeClass('active-arrow');
    });

    $(document).on('click', function (e) {
        if (!select.is(e.target) && select.has(e.target).length === 0) {
            items.removeClass('show');
            selected.removeClass('active-arrow');
        }
    });
});
// --------For Mobile------//
// ---------------------Header Country Select Dropdown-----------------//

// ---------------------------Search Modal---------------------------------//
// -----For Desktop------//
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
// ------For Desktop----//

// -------For Mobile--------//
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
// -------For Mobile--------//
// ---------------------------Search Modal---------------------------------//

// ----------------------------------------------------Shamal's Code-------------------------------------------------//


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
        more = true;
    }
    else {
        $("#more-content").slideUp();
        $("#trigger").text("Show More");
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
        autoplaySpeed: 2000,
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




if (window.innerWidth > 820) {
    // on scroll sticky section fraud stories js starts
    gsap.registerPlugin(ScrollTrigger);

    // Pin the section
    ScrollTrigger.create({
        trigger: ".fixed-section",
        start: "top top",
        end: "+=200%", // Adjust based on the desired scroll length
        pin: true
    });

    // Create a timeline for the first box container
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".fixed-section",
            start: "top top",
            end: "+=200%", // Adjust based on the desired scroll length
            scrub: true
        }
    });

    // Select the first set of boxes
    const boxes = document.querySelectorAll(".fixed-section .box-container .box");

    // Add animations to the timeline for the first set of boxes
    boxes.forEach((box, index) => {
        tl.to(box, {
            className: "+=activeBoxes",
            duration: 1,
            onStart: () => {
                if (index > 0) boxes[index - 1].classList.remove("activeBoxes");
            }
        });
    });

    // Create a timeline for the second box container
    const tl2 = gsap.timeline({
        scrollTrigger: {
            trigger: ".fixed-section",
            start: "top top",
            end: "+=200%", // Adjust based on the desired scroll length
            scrub: true
        }
    });

    // Select the second set of boxes
    const boxesTwo = document.querySelectorAll(".fixed-section .box-container-two .box");

    // Add animations to the timeline for the second set of boxes
    boxesTwo.forEach((box, index) => {
        tl2.to(box, {
            className: "+=active-two",
            duration: 1,
            onStart: () => {
                if (index > 0) boxesTwo[index - 1].classList.remove("active-two");
            }
        });
    });

    // on scroll sticky section fraud stories js starts
}

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


// slider js starts

// ----------------------Timeline code--------------------------//
document.addEventListener("DOMContentLoaded", function () {
    const years = document.querySelectorAll('.timeline-year');
    const progressBar = document.getElementById('progress-bar');
    const contentSections = document.querySelectorAll('.year-content');
    let currentYearIndex = 0;
    let autoProceedInterval;
    const pauseDuration = 2000; // Pause duration before restarting from the beginning

    function showContent(year) {
        contentSections.forEach(section => {
            section.classList.remove('active');
        });
        document.querySelector(`.year-content[data-year="${year}"]`).classList.add('active');
    }

    function updateProgressBar(toElement) {
        const toRect = toElement.getBoundingClientRect();
        const timelineRect = document.querySelector('.timeline').getBoundingClientRect();
        const width = toRect.right - timelineRect.left;

        progressBar.style.width = `${width}px`;

        // Add processed class to timeline-years as progress bar passes through them
        years.forEach(year => {
            const yearRect = year.getBoundingClientRect();
            if (yearRect.left <= toRect.right) {
                year.classList.add('processed');
            } else {
                year.classList.remove('processed');
            }
        });
    }

    function highlightYear(yearElement) {
        years.forEach(year => {
            year.classList.remove('active');
        });

        yearElement.classList.add('active');
    }

    function navigateToYear(index) {
        if (index >= 0 && index < years.length) {
            const year = years[index];
            const selectedYear = year.dataset.year;
            showContent(selectedYear);
            updateProgressBar(year);
            highlightYear(year);
            currentYearIndex = index;
        }
    }

    function startAutoProceed() {
        clearInterval(autoProceedInterval);
        autoProceedInterval = setInterval(() => {
            if (currentYearIndex < years.length - 1) {
                $('.timeline').slick('slickNext');
            } else {
                setTimeout(() => {
                    currentYearIndex = 0;
                    years.forEach(year => year.classList.remove('processed')); // Reset all processed classes
                    $('.timeline').slick('slickGoTo', currentYearIndex);
                }, pauseDuration); // Pause before resetting
            }
        }, 3000);
    }

    (function ($) {
        $(function () {
            $('.timeline').slick({
                infinite: true,
                autoplay: false,
                slidesToShow: 8,
                slidesToScroll: 1,
                arrows: false,
                centerMode: true,
                asNavFor: '.yearContentdata',
                focusOnSelect: true,
                mobileFirst: true,
            });

            $('.yearContentdata').slick({
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '#left-arrow',
                nextArrow: '#right-arrow',
                asNavFor: '.timeline',
                speed: 500,
                responsive: [
                    {
                        breakpoint: 0,
                        settings: {
                            centerMode: false
                        }
                    }
                ]
            });

            $('.timeline').on('afterChange', function(event, slick, currentSlide){
                navigateToYear(currentSlide);
                startAutoProceed(); // Restart auto proceed after navigation
            });

            // Initialize with the first year's content and start auto proceed
            if (years.length > 0) {
                navigateToYear(0);
                startAutoProceed();
            }
        });
    })(jQuery);
});
// ----------------------Timeline code--------------------------//


document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('#navMenu li');
    const slides = document.querySelectorAll('.slide');

    const updateActiveState = (slideNumber) => {
        // Remove active class from all nav items and slides
        navItems.forEach(nav => nav.classList.remove('active'));
        slides.forEach(slide => slide.classList.remove('active'));

        // Add active class to the clicked nav item and corresponding slide
        document.querySelector(`#navMenu li[data-slide="${slideNumber}"]`).classList.add('active');
        document.querySelector(`.slide[data-slide="${slideNumber}"]`).classList.add('active');
    };

    navItems.forEach(item => {
        item.addEventListener('click', (e) => {
            const slideNumber = item.getAttribute('data-slide');
            const targetSlide = document.querySelector(`.slide[data-slide="${slideNumber}"]`);
            targetSlide.scrollIntoView({ behavior: 'smooth' });

            // Manually update the active state
            updateActiveState(slideNumber);
        });
    });

    window.addEventListener('scroll', () => {
        let currentSlide = null;
        slides.forEach(slide => {
            const rect = slide.getBoundingClientRect();
            if (rect.top >= 0 && rect.top <= window.innerHeight / 2) {
                currentSlide = slide.getAttribute('data-slide');
            }
        });
        if (currentSlide) {
            updateActiveState(currentSlide);
        }
    });
});







$.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  
  if ($(".productfamSection").length) {
    $(window).on('resize scroll', function () {
      if ($('.productfamSection').length) {
        if ($('.productfamSection').isInViewport()) {
          setTimeout(() => {
            $("header").addClass("productHeader")
          }, 1000);
        }
        else {
          setTimeout(() => {
            $("header").removeClass("productHeader")
          }, 1000);
        }
  
      }
    });
  }



  