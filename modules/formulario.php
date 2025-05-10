<section class="py-5 bg-light rounded shadow container">
  <div class="bg-primary text-white p-4 rounded-top text-center">
    <h3 class="fw-bold mb-1"><i class="fa-solid fa-school"></i> ¿Quieres formar parte de UCMA?</h3>
    <p class="mb-0">Déjanos tus datos y te enviaremos la información que necesitas.</p>
  </div>

  <form class="p-4 row g-3">

    <div class="col-md-4">
      <label for="nombre" class="form-label fw-semibold"><i class="fas fa-user color-ucma me-2"></i>* Nombre:</label>
      <input type="text" class="form-control" name="nombre" id="nombre" required>
    </div>

    <div class="col-md-4">
      <label for="apaterno" class="form-label fw-semibold"><i class="fas fa-user color-ucma me-2"></i>* Apellido paterno:</label>
      <input type="text" class="form-control" name="apaterno" id="apaterno" required>
    </div>

    <div class="col-md-4">
      <label for="amaterno" class="form-label fw-semibold"><i class="fas fa-user color-ucma me-2"></i>* Apellido materno:</label>
      <input type="text" class="form-control" name="amaterno" id="amaterno" required>
    </div>

    <div class="col-md-6">
      <label for="correo" class="form-label fw-semibold"><i class="fas fa-envelope color-ucma me-2"></i>* Correo electrónico:</label>
      <input type="email" class="form-control" name="correo" id="correo" required>
    </div>

    <div class="col-md-6">
      <label for="telefono" class="form-label fw-semibold"><i class="fas fa-phone color-ucma me-2"></i>* Teléfono a 10 dígitos:</label>
      <input type="tel" class="form-control" name="telefono" id="telefono" required maxlength="10">
    </div>

    <div class="col-12">
      <label for="nivel" class="form-label fw-semibold"><i class="fas fa-school color-ucma me-2"></i>* Nivel de Interés:</label>
      <select class="form-select" name="nivel" id="nivel" required>
        <option value="">- Selecciona -</option>
        <option value="licenciatura">Licenciatura</option>
        <option value="licenciatura-online">Licenciatura Online</option>
        <option value="licenciatura-sabatina">Licenciatura Sabatina</option>
        <option value="estomatologia">Estomatología</option>
        <option value="maestria">Maestría</option>
      </select>
    </div>

    <div class="text-center small mt-3">
      Al hacer clic en <strong class="color-ucma">"Solicita Información"</strong>, reconoces haber leído las
      <a href="#" class="text-primary text-decoration-none">Políticas de Privacidad</a>,
      y aceptas los <a href="#" class="text-primary text-decoration-none">Términos y Condiciones</a>.
    </div>

    <div class="text-center mt-4">
      <button type="submit" class="btn btn-warning px-5 py-2 fw-semibold">
        Solicita Información <i class="fas fa-arrow-right ms-2"></i>
      </button>
    </div>
  </form>
</section>