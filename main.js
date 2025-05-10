document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", function (e) {
            const title = document.getElementById("movieTitle").value.trim();
            if (title.length < 2) {
                alert("The title must be at least 2 characters long.");
                e.preventDefault();
            }
        });
    }
});

$(document).ready(function () {
    $(".movie-card").hover(
        function () {
            $(this).css("transform", "scale(1.05)").css("transition", "0.3s");
        },
        function () {
            $(this).css("transform", "scale(1)");
        }
    );
});

$(document).ready(function () {
    $("#movieGenre").change(function () {
        const genre = $(this).val();
        if (genre) {
            alert(`Genre selected: ${genre}`);
        }
    });
});