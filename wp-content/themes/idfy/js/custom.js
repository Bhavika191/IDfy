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
        }, 4000);
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

// ------------------Header Dropdown JS--------------------- //
document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function (event) {
            // Prevent default behavior
            event.preventDefault();
            // Close other open dropdowns
            dropdowns.forEach(dd => {
                if (dd !== this) {
                    dd.classList.remove('active');
                }
            });
            // Toggle the current dropdown
            this.classList.toggle('active');
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });
});
// ------------------Header Dropdown JS--------------------- //


