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
    <link rel="stylesheet" href="../in-class_website/styles.css" />
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
              <a class="nav-link" href="../in-class_website/ex1.php"><b>Exercise 1</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../in-class_website/variable.php"><b>Exercise 3</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="../in-class_website/controlflow.php"><b>Exercise 4</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="../in-class_website/arrays.php"><b>Exercise 5</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../crud/create.php"><b>CRUD</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <center>
      <img class="img-fluid" src="../in-class_website/pictures/macbook.jpg" alt="hameenlinna" id="header-image"/>
    </center>
    <section class="text_for_php">