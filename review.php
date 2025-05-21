<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Review - Couch Critics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: maroon;">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-white" href="#">Couch Critics</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav d-flex flex-row gap-2 mb-2 mb-lg-0">
                        <li class="nav-item"><a class="btn btn-outline-light btn-sm" href="http://localhost/Web-development-main/login.php">Sign In</a></li>
                        <li class="nav-item"><a class="btn btn-outline-light btn-sm" href="http://localhost/Web-development-main/login.php">Create
                                Account</a></li>
                        <li class="nav-item"><a class="btn btn-secondary btn-sm" href="http://localhost/Web-development-main/watchlist.php">Watchlist</a>
                        </li>
                        <li class="nav-item"><a class="btn btn-light btn-sm text-dark" href="http://localhost/Web-development-main/index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Movies Review</h2>

        <div class="row">
            <div class="col-md-4 text-center">
                <h2 class="mb-3">Leave a Review for <span class="text-warning">Tenet</span></h2>
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/1c/Tenet_%28filme%29.jpg" alt="Tenet Poster"
                    class="img-fluid rounded">
            </div>

            <div class="col-md-8">
                <form action="details.php" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="movieTitle" class="form-label">Movie Title</label>
                        <input type="text" class="form-control" id="movieTitle" name="movieTitle" value="Tenet" required
                            readonly>
                    </div>

                    <p class="text-warning small mb-3">
                        Already have an account? Your name and email will be filled automatically when you sign in.
                    </p>
                    <div class="mb-3">
                        <label for="reviewerName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="reviewerName" name="reviewerName" minlength="2"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rating</label><br />
                        <div id="starRating">
                            <span class="star" data-value="1">★</span>
                            <span class="star" data-value="2">★</span>
                            <span class="star" data-value="3">★</span>
                            <span class="star" data-value="4">★</span>
                            <span class="star" data-value="5">★</span>
                        </div>
                        <input type="hidden" name="rating" id="ratingValue" required>
                    </div>


                    <div class="mb-3">
                        <label for="reviewText" class="form-label">Write your review:</label>
                        <textarea class="form-control" id="reviewText" name="reviewText" rows="4" minlength="10" maxlength="500" required placeholder="What did you think of the movie?"></textarea>
                        <small id="charCount" class="text-light">0 / 500 characters</small>
                    </div>

                    <button type="submit" class="btn btn-outline-light me-2">Send</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                </form>
            </div>
        </div>
        <hr>

        <h3 class="mb-3">Recent Reviews</h3>

        <div class="mb-4">
            <p class="mb-1 fw-bold">The Godfather</p>
            <img src="https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg" alt="Movie Poster"
                class="related-movie-poster">
            <div class="star-rating mb-1">★★★★★</div>
            <input class="form-control" type="text" value="Amazing visuals and concept!" readonly>
        </div>

        <br><br>

        <div class="mb-4">
            <p class="mb-1 fw-bold">A Minecraft Movie</p>
            <img src="https://m.media-amazon.com/images/M/MV5BYzFjMzNjOTktNDBlNy00YWZhLWExYTctZDcxNDA4OWVhOTJjXkEyXkFqcGc@._V1_.jpg"
                alt="Movie Poster" class="related-movie-poster">
            <div class="star-rating mb-1">★★★★☆</div>
            <input class="form-control" type="text" value="A masterpiece in storytelling." readonly>
        </div>

        <br><br>

        <div class="mb-4">
            <p class="mb-1 fw-bold">The Monkey</p>
            <img src="https://m.media-amazon.com/images/M/MV5BNzZhMTc5MWUtOTE2MS00MjUwLTljYWEtYTk1ZmVjNzhmMzYzXkEyXkFqcGc@._V1_.jpg"
                alt="Movie Poster" class="related-movie-poster">
            <div class="star-rating mb-1">★★★☆☆</div>
            <input class="form-control" type="text" value="Emotionally powerful and visually stunning." readonly>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>

</html>