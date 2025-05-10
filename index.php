<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="video-banner position-relative">
  <video autoplay muted loop playsinline class="w-100 d-block" style="max-height: 80vh; object-fit: cover;">
    <source src="static/video/banner.mp4" type="video/mp4"> Tu navegador no soporta videos en HTML5.
  </video>
</div>

<section class="py-5 bg-primary text-white">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-4">
    <div class="flex-shrink-0">
      <i class="fa-solid fa-user-graduate fa-4x text-warning" aria-hidden="true"></i>
    </div>
    <div class="text-center text-md-start flex-grow-1">
      <h2 class="lcp-heading mb-0">¡Obtén una Beca Académica hasta del <span class="text-warning">60%</span>!</h2>
      <p class="mb-1 fs-5">Permanente durante toda la carrera*</p>
      <p class="mb-0"><em>*Aplican restricciones. Consulta términos en nuestro formulario.</em></p>
    </div>
    <div class="text-center">
      <a href="<?= $baseUrl ?>/pages/contacto.php" class="btn btn-warning btn-lg px-4 py-3 fw-semibold shadow">
        Solicita tu beca
        <i class="fa-solid fa-arrow-right ms-2"></i>
      </a>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-primary text-center fw-bold mb-2">Nuestra Oferta Educativa</h2>
    <p class="text-center mb-4">Conoce nuestras <strong>Licenciaturas y Programas Académicos</strong> en modalidad escolarizada, sabatina y ejecutiva. ¡Elige el ideal para ti!</p>

    <div class="row align-items-start g-4">
      <div class="col-md-5">
        <div class="d-grid gap-3">

          <!-- Licenciaturas -->
          <div class="submenu-wrapper">
            <a href="#" class="btn btn-secondary py-4 d-flex align-items-center justify-content-between icon-btn-licenciaturas-alt btn-hover-parent">
              <span class="d-flex align-items-center">
                <span class="licenciaturas-icon me-2"></span>Licenciaturas
              </span>
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <div id="submenuLicenciaturas" class="submenu-carreras">
              <a href="<?= $baseUrl ?>/pages/licenciaturas/administracion">Administración</a>
              <a href="<?= $baseUrl ?>/pages/licenciaturas/contaduria">Contaduría</a>
              <a href="<?= $baseUrl ?>/pages/licenciaturas/derecho">Derecho</a>
              <a href="<?= $baseUrl ?>/pages/licenciaturas/odontologia">Estomatología Odontología</a>
              <a href="#">Psicología Clínica</a>
              <a href="#">Pedagogía</a>
              <a href="#">Ingeniería en Sistemas</a>
              <a href="#">Filosofía</a>
            </div>
          </div>

          <!-- Online -->
          <div class="submenu-wrapper">
            <a href="#" class="btn btn-secondary py-4 d-flex align-items-center justify-content-between icon-btn-licenciaturas-online-alt btn-hover-parent">
              <span class="d-flex align-items-center">
                <span class="licenciaturas-online-icon me-2"></span>Licenciaturas Online
              </span>
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <div id="submenuOnline" class="submenu-carreras">
              <a href="#">Ingeniería Industrial y Procesos Administrativos</a>
              <a href="#">Sistemas Computacionales</a>
              <a href="#">Pedagogía</a>
              <a href="#">Mercadotecnia Digital y Comercio Internacional</a>
              <a href="#">Derecho</a>
              <a href="#">Administración de Empresas</a>
            </div>
          </div>

          <!-- Sabatinas -->
          <div class="submenu-wrapper">
            <a href="#" class="btn btn-secondary py-4 d-flex align-items-center justify-content-between icon-btn-licenciaturas-sabatinas-alt btn-hover-parent">
              <span class="d-flex align-items-center">
                <span class="licenciaturas-sabatinas-icon me-2"></span>Licenciaturas Sabatinas
              </span>
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <div id="submenuSabatinas" class="submenu-carreras">
              <a href="<?= $baseUrl ?>/pages/licenciaturas/derecho-sabatino">Derecho Sabatino</a>
              <a href="#">Mercadotecnia Sabatina</a>
            </div>
          </div>

          <!-- Maestrías -->
          <div class="submenu-wrapper">
            <a href="#" class="btn btn-secondary py-4 d-flex align-items-center justify-content-between icon-btn-maestrias-alt btn-hover-parent">
              <span class="d-flex align-items-center">
                <span class="maestrias-icon me-2"></span>Maestría
              </span>
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <div id="submenuMaestrias" class="submenu-carreras">
              <a href="#">Maestría en administración e inteligencia de negocios</a>
              <a href="#">Maestría en administración pública y gobierno</a>
              <a href="#">Maestría en administracion de tecnologías de la información</a>
              <a href="#">Maestría en educación y gestión de instituciones educativas</a>
              <a href="#">Maestría en derecho procesal penal</a>
              <a href="#">Maestría en derecho procesal y juicios orales</a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-7">
        <div class="card border-0 shadow overflow-hidden">
          <div class="ratio ratio-16x9">
            <img id="imagenLicenciatura" src="https://placehold.co/600x400" alt="Test Vocacional UCMA" class="w-100 h-100 object-fit-cover fade">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4 text-center color-ucma">¿Qué puedo estudiar en UCMA?</h2>
    <div class="row g-4">

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow position-relative overflow-hidden">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Administración">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Administración</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Contaduría">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Contaduría</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Derecho">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Derecho</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Estomatología">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Estomatología</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Mercadotecnia">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Mercadotecnia</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Pedagogía">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Pedagogía</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Psicología Clínica">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Psicología Clínica</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Ingeniería en Sistemas Computacionales">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras" >
              <h5 class="card-title m-0">Ing. en Sistemas Computacionales</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white border-0 shadow">
            <img src="https://placehold.co/600x400" class="card-img" alt="Licenciatura en Filosofía">
            <div class="card-img-overlay d-flex flex-column justify-content-between p-3 card-carreras">
              <h5 class="card-title m-0">Filosofía</h5>
              <div class="text-end">
                <span class="d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
                  <i class="fa-solid fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<?php include("modules/formulario.php"); ?> 

<?php include("includes/footer.php"); ?>
