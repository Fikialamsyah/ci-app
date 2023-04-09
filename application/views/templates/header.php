<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/journal/bootstrap.min.css" integrity="sha384-QDSPDoVOoSWz2ypaRUidLmLYl4RyoBWI44iA5agn6jHegBxZkNqgm2eHb6yZ5bYs" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url()?>">Book Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)==""){echo "active";}?>" href="<?= base_url(); ?>">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="book"){echo "active";}?>" href="<?= base_url(); ?>book">Daftar Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php if($this->uri->segment(1)=="about"){echo "active";}?> href="<?= base_url(); ?>about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>