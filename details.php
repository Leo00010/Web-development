<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Details</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<main class="container mt-5 pt-5">
    <h2 class="text-center mb-4">Your Review Has Been Submitted</h2>

    <div class="card p-4 bg-dark text-white border-light">
        <p><strong>Movie Title:</strong> <?php echo htmlspecialchars($_POST['movieTitle']); ?></p>
        <p><strong>Reviewer Name:</strong> <?php echo htmlspecialchars($_POST['reviewerName']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        <p><strong>Rating:</strong> <?php echo htmlspecialchars($_POST['rating']); ?> stars</p>
        <p><strong>Review:</strong> <?php echo nl2br(htmlspecialchars($_POST['reviewText'])); ?></p>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="main.js"></script>
</body>
</html>
