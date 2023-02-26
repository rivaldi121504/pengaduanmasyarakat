<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        if($this->session->login_status=='ok'){
          echo ' <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('masyarakat/logout') .'">Logout</a>
        </li>';
        }else{
          echo '<li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('masyarakat/registrasi').' ">Registrasi</a>
        </li>';
        }

        
        ?>



      </ul>
    </div>
  </div>
</nav>
  </header>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 pt-5">