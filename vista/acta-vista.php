<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          Lista de Actas
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#rusuario">Nueva Acta</button>
        </div>

        <table class="table table-hover table-striped my-0 px-5">
          <thead class="text-center">
            <th>ID</th>
            <th>Asunto</th>
            <th>ACCIONES</th>
          </thead>

          <tbody>
            <?php include "../controlador/acta-mostrar.php" ?>
          </tbody>

        </table>
      </div>
    </div>

  </div>

</div>

<div class="modal fade" id="rusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Acta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="../controlador/acta-add-post.php" method="POST" class="px-3">
          <label>Asunto </label><br>
          <input type="text" id="asunto" name="asunto" required><br>

          <label>Fecha</label><br>
          <input type="date" id="fecha" name="fecha" required><br>

          <label>Descripción </label><br>
          <textarea name="descripcion" rows="5" cols="50" placeholder="Escriba algo aquí..." required></textarea>

          <label>Responsable </label><br>
          <input type="text" id="responsable" name="responsable" required><br>

          <div class="select-programa">
            <label for="id_programa">Seleccione un Programa: </label><br>
            <select name="id_programa" id="id_programa">
              <option value="1">Medicina Veterinaria y Zootecnia</option>
              <option value="2">Acuicultura</option>
              <option value="3">Ingeniería Agronómica</option>
              <option value="4">Estadística</option>
              <option value="5">Matemáticas</option>
              <option value="6">Geografía</option>
              <option value="7">Física</option>
              <option value="8">Química</option>
              <option value="9">Biología</option>
              <option value="10">Bacteriología</option>
              <option value="11">Tecnología en Regencia y Farmacia</option>
              <option value="12">Administración en Salud</option>
              <option value="13">Enfermería</option>
              <option value="14">Licenciatura en Ciencias Sociales</option>
              <option value="15">Licenciatura Educación Física, Recreación y Deporte</option>
              <option value="16">Licenciatura en Literatura y Lengua Castellana</option>
              <option value="17">Licenciatura en Informática</option>
              <option value="18">Licenciatura en Lengua Extranjera con Énfasis en Inglés</option>
              <option value="19">Licenciatura en Ciencias Naturales y Educación Ambiental</option>
              <option value="20">Licenciatura en Educación Infantil</option>
              <option value="21">Ingeniería Mecánica</option>
              <option value="22">Ingeniería Ambiental</option>
              <option value="23">Ingeniería Industrial</option>
              <option value="24">Ingeniería de Alimentos</option>
              <option value="25">Ingeniería de Sistemas</option>
              <option value="26">Derecho</option>
              <option value="27">Administración en Finanzas y Negocios Internacionales</option>
            </select>
          </div>
          <br>
          <button type="submit" name="add-acta" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>