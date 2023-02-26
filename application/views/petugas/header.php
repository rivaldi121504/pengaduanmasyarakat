<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        if($this->session->login_status_petugas=='ok'){
          echo ' <li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('petugas/pengaduan').'">Pengaduan</a>
        </li>';
        if($this->session->level=='admin'){
          echo '<li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('petugas/petugas').'">Petugas</a>
        </li>';

        echo '<li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('petugas/cetakLaporan').'" 
          target="_blank">Generate Laporan</a>
        </li>';
        }

        echo '<li class="nav-item">
          <a class="nav-link" aria-current="page" href="'.base_url('petugas/logout') .'">Logout</a>
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