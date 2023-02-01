<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <nav
      class="navbar navbar fixed-top navbar-expand-lg bg-body-tertiary"
      style="background-color: #ff6e31"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="https://www.hameenlinna.fi/wp-content/uploads/2022/03/HML-Kaupunki-logo-RGB-01.png"
            alt="logo"
            width="40"
            height="40"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="ex1.php"><b>Exercise 1</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="contactus.php"><b>Contact Us</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#link4"><b>Empty</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer"><b>Empty</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <center>
      <img class="img-fluid" src="pictures/macbook.jpg" alt="hameenlinna" id="header-image"/>
    </center>
    <section class="text_for_php">