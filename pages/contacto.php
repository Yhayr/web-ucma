<?php
$pageTitle = "Contacto - UCMA";
$pageDescription = "Ponte en contacto con la Universidad UCMA. Estamos para ayudarte.";
include("../includes/header.php");
include("../includes/navbar.php");
?>

<main class="container mt-5 mb-5">
  <h1 class="mb-4">Contáctanos</h1>
  <p class="lead">¿Tienes alguna duda? Llena el siguiente formulario y un asesor se pondrá en contacto contigo.</p>

  <form action="#" method="POST" class="row g-4 mt-4">
    <div class="col-md-6">
      <label for="nombre" class="form-label">* Nombre completo:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="col-md-6">
      <label for="correo" class="form-label">* Correo electrónico:</label>
      <input type="email" class="form-control" id="correo" name="correo" required>
    </div>

    <div class="col-md-6">
      <label for="telefono" class="form-label">* Teléfono:</label>
      <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="10" required>
    </div>

    <div class="col-12">
      <label for="mensaje" class="form-label">* Mensaje:</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
    </div>

    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fas fa-paper-plane me-2"></i> Enviar mensaje
      </button>
    </div>
  </form>
</main>

<?php include("../includes/footer.php"); ?>