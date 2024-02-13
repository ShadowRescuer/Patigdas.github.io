<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Css/bootstrap.min.css">
</head>
<body>
    

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">PATIGDAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="start.php">HOME
            <span class="visually-hidden"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.php">Services</a>
        </li>

        <!-- this area is for the Activities -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Activities</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="act2.php">Activity2</a>
            <a class="dropdown-item" href="act3.php">Activity3</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="About.php">About this Page</a>
            <a class="dropdown-item" href="Webmaster.php">Webmaster</a>
          </div>
        </li>
      </ul>
      <form class="d">
        <li><a href="Login.php" class="btn btn-secondary my-2 my-sm-0">Login</a></li>
        <!-- <li><a href="Login.php">Login</a></li> -->
      </form>
    </div>
  </div>
</nav>



<div class="container">