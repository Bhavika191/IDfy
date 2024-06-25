// ----------------------------------------Shamal's Code-----------------------------------------//
// ------------------Header Dropdown JS--------------------- //
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
// ------------------Header Dropdown JS--------------------- //

// -----------------Mobile Header Menu----------------------//
$(document).ready(function () {
    if ($(window).width() <= 1024) {
        $("#toggle").click(function () {
            $(this).toggleClass("active");
            $("#overlay").toggleClass("open");
            if ($("#overlay").hasClass("open")) {
                menuOpen = true; // Menu is open
                $('body').css("overflow", "hidden");
                $('html').css("overflow", "hidden");
            } else {
                menuOpen = false; // Menu is closed
                $('body').css("overflow", "visible");
                $('html').css("overflow", "visible");
            }
        });
    }
});

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
// -----------------Mobile Header Menu----------------------//
// ----------------------------------------Shamal's Code-----------------------------------------//


// Timeline JS starts
document.addEventListener("DOMContentLoaded", function () {
    const years = document.querySelectorAll('.timeline-year');
    const progressBar = document.getElementById('progress-bar');
    const contentSections = document.querySelectorAll('.year-content');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');
    let currentYearIndex = 0;
    let autoProceedInterval;


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
                navigateToYear(currentYearIndex + 1);
            } else {
                currentYearIndex = 0;
                years.forEach(year => year.classList.remove('processed')); // Reset all processed classes
                navigateToYear(currentYearIndex);
            }
        }, 3000);
    }

    years.forEach((year, index) => {
        year.addEventListener('click', () => {
            navigateToYear(index);
            startAutoProceed(); // Restart auto proceed when a year is clicked
        });
    });

    leftArrow.addEventListener('click', () => {
        if (currentYearIndex > 0) {
            navigateToYear(currentYearIndex - 1);
            startAutoProceed(); // Restart auto proceed when left arrow is clicked
        }
    });

    rightArrow.addEventListener('click', () => {
        if (currentYearIndex < years.length - 1) {
            navigateToYear(currentYearIndex + 1);
            startAutoProceed(); // Restart auto proceed when right arrow is clicked
        }

        // Remove crossed class when moving forward
        years.forEach((year, index) => {
            if (index > currentYearIndex) {
                year.classList.remove('crossed');
            }
        });
    });

    // Initialize with the first year's content and start auto proceed
    if (years.length > 0) {
        navigateToYear(0);
        startAutoProceed();
    }
});
// Timeline JS starts

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
// slider js ends





gsap.registerPlugin(ScrollTrigger);

// Pin the section
ScrollTrigger.create({
  trigger: ".fixed-section",
  start: "top top",
  end: "+=300%", // Adjust based on the desired scroll length
  pin: true
});

// Create a timeline for the first box container
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".fixed-section",
    start: "top top",
    end: "+=300%", // Adjust based on the desired scroll length
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
    end: "+=300%", // Adjust based on the desired scroll length
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