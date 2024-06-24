// Timeline JS starts
document.addEventListener("DOMContentLoaded", function () {
    const years = document.querySelectorAll('.timeline-year');
    const progressBar = document.getElementById('progress-bar');
    const contentSections = document.querySelectorAll('.year-content');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');
    let currentYearIndex = 0;

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
        // Add crossed class to timeline-years as progress bar passes through them
        years.forEach(year => {
            const yearRect = year.getBoundingClientRect();
            if (yearRect.left <= toRect.right) {
                year.classList.add('crossed');
            }
            else {
                year.classList.remove('crossed');
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

    years.forEach((year, index) => {
        year.addEventListener('click', () => {
            navigateToYear(index);
        });
    });

    leftArrow.addEventListener('click', () => {
        if (currentYearIndex > 0) {
            navigateToYear(currentYearIndex - 1);
        }
    });

    rightArrow.addEventListener('click', () => {
        if (currentYearIndex < years.length - 1) {
            navigateToYear(currentYearIndex + 1);
        }
    });

    // Initialize with the first year's content
    if (years.length > 0) {
        navigateToYear(0);
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


