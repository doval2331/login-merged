<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <div class="card">
        <div class="card-header">
          Lista de Compromisos
        </div>

        <table class="table table-hover table-striped my-0 px-5">
          <thead class="text-center">
            <th>ID</th>
            <th>Descripción</th>
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Responsable</th>
            <th>ID Acta</th>
            <th>ACCIONES</th>
          </thead>

          <tbody>
            <?php include "../controlador/compromiso-mostrar.php" ?>
          </tbody>

        </table>
        
      </div>
    </div>

  </div>

</div>