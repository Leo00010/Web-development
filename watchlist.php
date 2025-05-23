<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Watchlist - Couch Critics</title>
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
                        <li class="nav-item">
                            <a class="btn btn-outline-light btn-sm" href="http://localhost/Web-development-main/login.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light btn-sm" href="http://localhost/Web-development-main/login.php">Create Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success btn-sm" href="#">Add Movie</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary btn-sm" href="http://localhost/Web-development-main/watchlist.php">Watchlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light btn-sm text-dark" href="http://localhost/Web-development-main/homepage.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 pt-4">
        <h2 class="text-center mb-4">My Watchlist</h2>

        <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search your watchlist..." style="max-width: 300px;">
            <select class="form-select" style="max-width: 150px;">
                <option>Filter</option>
                <option>Watched</option>
                <option>Unwatched</option>
                <!--<option>5 Stars</option>-->
            </select>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            <div class="col movie-card text-center position-relative">
                <button class="btn-close position-absolute top-0 end-0" aria-label="Remove"></button>
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/1c/Tenet_%28filme%29.jpg" alt="Tenet Poster">
                <h5 class="mt-2 movie-title">Tenet</h5>
                <p class="mb-1">2020</p>
                <div class="star-rating">★★★★☆</div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="watched1">
                    <label class="form-check-label" for="watched1">Watched</label>
                </div>
            </div>

            <div class="col movie-card text-center position-relative">
                <button class="btn-close position-absolute top-0 end-0" aria-label="Remove"></button>
                <img src="https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg" alt="Movie Poster">
                <h5 class="mt-2 movie-title">The Godfather</h5>
                <p class="mb-1">1972</p>
                <div class="star-rating">★★★★★</div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="watched1">
                    <label class="form-check-label" for="watched1">Watched</label>
                </div>
            </div>

            <div class="col movie-card text-center position-relative">
                <button class="btn-close position-absolute top-0 end-0" aria-label="Remove"></button>
                <img src="https://m.media-amazon.com/images/M/MV5BYzFjMzNjOTktNDBlNy00YWZhLWExYTctZDcxNDA4OWVhOTJjXkEyXkFqcGc@._V1_.jpg"
                    alt="Movie Poster">
                <h5 class="mt-2 movie-title">A Minecraft Movie</h5>
                <p class="mb-1">2025</p>
                <div class="star-rating">★★★★☆</div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="watched1">
                    <label class="form-check-label" for="watched1">Watched</label>
                </div>
            </div>

            <div class="col movie-card text-center position-relative">
                <button class="btn-close position-absolute top-0 end-0" aria-label="Remove"></button>
                <img src="https://m.media-amazon.com/images/M/MV5BNzZhMTc5MWUtOTE2MS00MjUwLTljYWEtYTk1ZmVjNzhmMzYzXkEyXkFqcGc@._V1_.jpg"
                    alt="Movie Poster">
                <h5 class="mt-2 movie-title">The Monkey</h5>
                <p class="mb-1">2025</p>
                <div class="star-rating">★★★☆☆</div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="watched1">
                    <label class="form-check-label" for="watched1">Watched</label>
                </div>
            </div>

        </div>
    </main>

    <br><br>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>

</html>