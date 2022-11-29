<legend class="text-center">
  <i class="glyphicon glyphicon-user "></i><br>
  <b>Gestion de Calificaciones</b><hr>
  <center>
    <a href=" <?php echo site_url("calificaciones/nueva_calificacion") ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
</legend>

<hr>
<br>
<br>

<?php if ($listadoCalificaciones): ?>
  <table class="table table-stripe table-border table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Materia</th>
        <th class="text-center">Nota</th>
        <th class="text-center">Producto</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php foreach ($listadoCalificaciones->result() as $calificacionTemporal): ?>
        <tr>
            <td class="tex-center">
              <?php echo $calificacionTemporal->id_cal; ?>
            </td>
            <td class="tex-center">
              <?php echo $calificacionTemporal->materia_cal; ?>
            </td>
            <td class="tex-center">
              <?php echo $calificacionTemporal->nota_cal; ?>
            </td>
            <td class="tex-center">
              <?php echo $calificacionTemporal->producto_cal; ?>
            </td>

            <td class="text-center">
            <a href="<?php echo site_url("calificaciones/editar"); ?>/<?php echo $calificacionTemporal->id_cal; ?>" class="btn btn-warning ">
              <i class="glyphicon glyphicon-pencil">Editar</i>
              </a>
              <a href="<?php echo site_url("calificaciones/borrar"); ?>/<?php echo $calificacionTemporal->id_cal; ?>" class="btn btn-danger ">
                <i class="glyphicon glyphicon-trash">Eliminar</i>
              </a>
            </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe calificaciones</b></h3>
<?php endif; ?>
