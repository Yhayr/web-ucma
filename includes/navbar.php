<?php include_once(__DIR__ . '/../config/config.php'); ?>

<nav class="navbar navbar-expand-lg py-3 fixed-top">
  <div class="container position-relative">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
      <span class="visually-hidden">Abrir menú de navegación</span>
    </button>
    <a class="navbar-brand position-absolute top-50 start-50 translate-middle d-none d-lg-block" href="<?= $baseUrl ?>">
    <img src="<?= $baseUrl ?>/static/img/ucma_azul.png" alt="Logotipo de la Universidad UCMA" width="170" height="70" fetchpriority="high" decoding="async">
    </a>
    <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">
      <ul class="navbar-nav flex-column flex-lg-row gap-2 gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/pages/nosotros">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/pages/oferta">Oferta Educativa</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $baseUrl ?>/pages/contacto">Contacto</a></li>
      </ul>
      <div class="d-flex mt-3 mt-lg-0">
        <a href="https://ucma.aulaescolar.net/" class="btn btn-primary">
          <i class="fas fa-user-graduate me-2"></i> Comunidad UCMA
        </a>
      </div>
    </div>

  </div>
</nav>
