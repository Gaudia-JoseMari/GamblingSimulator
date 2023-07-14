<?php
    session_start();
    if(!isset($_SESSION['signed_in'])) {
        header("Location: signin.php");
    } else {
        if($_SESSION['signed_in'] == false) {
            header("Location: signin.php");
        } 
    }
    // echo $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gambling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Gambling</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Games
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Case Opening</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto"> 
            <li class="nav-item">
              <a class="btn btn-dark" href="signout.php" role="button">Signout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="image/banner.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>CASE OPENING</h1>
            <p class="mt-5 fs-3">Open CSGO cases by yourself or against AI</p>
            <a class="btn btn-primary play-button" href="#" role="button" data-bs-toggle="modal" data-bs-target="#playModal">Play</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="image/banner2.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>CASE OPENING</h1>
            <p class="mt-5 fs-3">Open CSGO cases by yourself or against AI</p>
            <a class="btn btn-primary play-button" href="#" role="button" data-bs-toggle="modal" data-bs-target="#playModal">Play</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="image/banner3.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>CASE OPENING</h1>
            <p class="mt-5 fs-3">Open CSGO cases by yourself or against AI</p>
            <a class="btn btn-primary play-button" href="#" role="button" data-bs-toggle="modal" data-bs-target="#playModal">Play</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Play Modal -->
    <div class="modal fade" id="playModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="playModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Play</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-4">
                <div class="card mb-3">
                  <img src="image/card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Single Player</h5>
                    <p class="card-text">Open cases by yourself just like in Counter Strike Global Offensive.</p>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3">
                  <img src="image/card2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Battle VS AI</h5>
                    <p class="card-text">Open cases against an AI opponent, with the highest points declared as the winner.</p>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
