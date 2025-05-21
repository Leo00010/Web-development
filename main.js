document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('#starRating .star');
    const ratingInput = document.getElementById('ratingValue');
    let selectedRating = 0;

    function highlightStars(rating) {
        stars.forEach(star => {
            const value = parseFloat(star.dataset.value);
            if (value <= rating) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    }

    stars.forEach(star => {
        star.addEventListener('mouseenter', () => {
            highlightStars(star.dataset.value);
        });

        star.addEventListener('mouseleave', () => {
            highlightStars(selectedRating);
        });

        star.addEventListener('click', () => {
            selectedRating = star.dataset.value;
            ratingInput.value = selectedRating;
            highlightStars(selectedRating);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const reviewText = document.getElementById("reviewText");
    const charCount = document.getElementById("charCount");

    if (reviewText && charCount) {
        reviewText.addEventListener("input", () => {
            const currentLength = reviewText.value.length;
            const maxLength = reviewText.getAttribute("maxlength");
            charCount.textContent = `${currentLength} / ${maxLength} characters`;
        });
    }
});

$(document).ready(function () {
    $("#searchInput").on("keyup", function () {
        const value = $(this).val().toLowerCase();

        $(".movie-card").filter(function () {
            const title = $(this).find(".movie-title").text().toLowerCase();
            $(this).toggle(title.includes(value));
        });
    });
});

