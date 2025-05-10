<!-- Calcula tu Beca y Colegiatura -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center">
        <h2 class="text-primary fw-bold mb-2">CALCULA TU BECA Y COLEGIATURA</h2>
        <p class="mb-4">Compártenos tus datos para conocer el monto estimado de tu colegiatura.</p>
    </div>
    <div class="row align-items-center g-4">
      <!-- Imagen lateral -->
      <div class="col-md-6 text-center">
        <img src="https://placehold.co/500x500?text=Calculadora+de+Becas" alt="Calculadora de becas" class="img-fluid rounded shadow-sm">
      </div>

      <!-- Formulario -->
      <div class="col-md-6">

        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre(s)</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
          </div>

          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
            </div>
            <div class="invalid-feedback">Por favor ingresa tus apellidos.</div>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              <input type="email" class="form-control" id="correo" placeholder="correo@ejemplo.com" required>
            </div>
            <div class="invalid-feedback">Introduce un correo válido.</div>
          </div>

          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono a 10 dígitos</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              <input type="tel" class="form-control" id="telefono" pattern="[0-9]{10}" placeholder="2221234567" required>
            </div>
            <div class="invalid-feedback">Introduce un teléfono válido.</div>
          </div>

          <div class="mb-3">
            <label for="licenciatura" class="form-label">Licenciatura interesada</label>
            <select class="form-select" id="licenciatura" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option>Administración</option>
              <option>Contaduría</option>
              <option>Derecho</option>
              <option>Psicología Clínica</option>
              <option>Pedagogía</option>
              <option>Ingeniería en Sistemas</option>
              <option>Filosofía</option>
              <option>Mercadotecnia</option>
              <option>Estomatología</option>
            </select>
            <div class="invalid-feedback">Selecciona una licenciatura.</div>
          </div>

          <div class="mb-3">
            <label for="promedio" class="form-label">Promedio General</label>
            <input type="number" min="6" max="10" step="0.1" class="form-control" id="promedio" placeholder="Ej. 9.2" required>
            <div class="invalid-feedback">Ingresa un promedio válido entre 6.0 y 10.0.</div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-warning btn-lg">Calcular Beca</button>
          </div>

          <small class="d-block text-muted mt-3 text-center">
            Al hacer clic en <strong>"Calcular Beca"</strong>, aceptas nuestro <a href="#" class="text-primary text-decoration-underline">Aviso de Privacidad</a>.
          </small>
        </form>
      </div>
    </div>
  </div>
</section>