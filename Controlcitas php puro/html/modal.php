<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  Ver citas Agendadas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hitorial de Citas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped" id="mytable">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Tipo de Cita</th>
              <th scope="col">Fecha</th>
              <th scope="col">Hora</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM cita WHERE DocuUsuario = $_SESSION[usuario]";
            $obj = new Agendamiento();
            $datos = $obj->mostrarDatos($sql);
            foreach ($datos as $key) {
              ?>
              <tr>
                <td><?php echo $key['Tipo_de_cita']; ?></td>
                <td><?php echo $key['Fecha_cita']; ?></td>
                <td><?php echo $key['Hora_cita']; ?></td>

              </tr>

            <?php } ?>

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>