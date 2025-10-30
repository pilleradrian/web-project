<?php
// Start session for login detection (placeholder)
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TeaScout – Discover & Review Teas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">TeaScout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="forum.php">Forum</a></li>
        <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
        <?php if ($isLoggedIn): ?>
          <li class="nav-item"><a class="nav-link" href="profile.php">My Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SECTION -->
<section class="position-relative text-white text-center bg-dark bg-opacity-75 mb-5" 
         style="background: url('assets/tea-bg.jpg') center/cover no-repeat; padding: 6rem 2rem;">
  <div class="container position-relative">
    <h1 class="display-4 fw-bold">Discover. Review. Share.</h1>
    <p class="lead mb-4">Find the perfect tea for your taste and explore what others recommend.</p>
    <a href="reviews.php" class="btn btn-light btn-lg">Browse Teas</a>
  </div>
</section>

<!-- FEATURED REVIEWS -->
<section class="container mb-5">
  <h2 class="mb-4">Top Rated Teas</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/green-tea.jpg" class="card-img-top" alt="Green Tea" style="height: 180px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">Sencha Green Tea</h5>
          <p class="card-text">A smooth, grassy flavor with a refreshing finish.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Rating: ★★★★☆</small>
            <a href="reviews.php" class="btn btn-sm btn-outline-success">Read</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/black-tea.jpg" class="card-img-top" alt="Black Tea" style="height: 180px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">Assam Black Tea</h5>
          <p class="card-text">Strong, malty taste loved by black tea drinkers.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Rating: ★★★★★</small>
            <a href="reviews.php" class="btn btn-sm btn-outline-success">Read</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/herbal-tea.jpg" class="card-img-top" alt="Herbal Tea" style="height: 180px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">Chamomile Herbal Blend</h5>
          <p class="card-text">A calming evening tea with floral and honey notes.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Rating: ★★★★☆</small>
            <a href="reviews.php" class="btn btn-sm btn-outline-success">Read</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMMUNITY SECTION -->
<section class="bg-light py-5 border-top">
  <div class="container text-center">
    <h2 class="mb-3">Join the Tea Community</h2>
    <p class="mb-4">Share your favorite teas, exchange brewing tips, and connect with other tea enthusiasts.</p>
    <a href="register.php" class="btn btn-success btn-lg">Create an Account</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
  <small>&copy; <?php echo date("Y"); ?> TeaScout. All rights reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>