<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true)
{
  header("location:/LOGINSYSTEM_PHP/index.php?error=3");
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-info bg-primary">
  <nav class="navbar navbar-expand-lg mt-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="rounded-circle" src="dashboard.png" alt="Logo" height="40px"
          width="40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contacts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Page 1</a></li>
              <li><a class="dropdown-item" href="#">Page 2</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Page 3</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>
        <a type="button" class="btn btn-outline-primary" href="_logouthandler.php">Log Out</a>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <h2>Hello, <?php echo $_SESSION['name']?>!</h2>
        <h5>This is dummy dashboard.</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem assumenda maiores iure maxime minima aut
          voluptatum earum, animi, repudiandae ipsa velit quis, cumque nam.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero fugit placeat, animi illum saepe sit quam
          exercitationem nostrum, ducimus quaerat sunt quas.</p>
        <span class="border border-end-0 rounded-pill"><button type="button"
            class="btn btn-info btn-sm mb-4 rounded-pill">Know more</button></span>
      </div>
      <div class="col-6 text-center">
        <img class="rounded-4" src="image2.jpg" alt="Picture" height="350px" width="350px">
      </div>
    </div>
  </div>
  <footer class="fixed-bottom" style="background-color: white; height: 50px; display: flex; flex-direction: column;
  align-items: center;justify-content: flex-end;">
    <div class="text-center d-flex justify-content-evenly" style="width: 25%;">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-google"></i>
      <i class="bi bi-youtube"></i>
      <i class="bi bi-twitter"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-threads"></i>
      <i class="bi bi-linkedin"></i>
    </div>
    <div style="width: 100%;">
      <i class="bi bi-c-circle" style="font-size: 11px;"> Copyright 2024-Aayushi</i>
      
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>