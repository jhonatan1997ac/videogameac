\<legend class="text-center">
<i class="glyphicon glyphicon-user"></i>
</div>
<b>Gestion de asignatura</b><br>
<a href="<?php echo site_url('asignaturas/nuevoa'); ?>" class="btn btn-success">
  <i class="glyphicon glyphicon-plus">Agregar asignatura</i>
</a>
<hr>
<FORM METHOD=POST ACTION="buscar.php" align="left">
  Buscar: <INPUT TYPE="text" NAME="busqueda">
</FORM>
<?php if ($listadoAsignaturas): ?>
  <table class="table table-striped table-bordered table-hover" cellpalding="0">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">NUMERO DE  CREDITOS</th>
        <th class="text-center">DESCRIPCION</th>
        <th class="text-center">JORNADA</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoAsignaturas->result()
        as $asignaturaTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $asignaturaTemporal->id_asignatura ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->nombre_asignatura ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->numero_creditos_asignatura ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->descripcion_asignatura ?></td>
          <td class="text-center"><?php echo $asignaturaTemporal->jornada_asignatura ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('asignaturas/borrar'); ?>/<?php echo $asignaturaTemporal->id_asignatura ?>"  class="btn btn-danger" ><i class="glyphicon glyphicon-trash"> eliminar</i></a>
            <a href="<?php echo site_url('asignaturas/actualizar'); ?>/<?php echo $asignaturaTemporal->id_asignatura ?>"  class="btn btn-warning" ><i class="glyphicon glyphicon-trash"> Actualizar</i></a>
          </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b> NO EXISTE ESTUDIANTES </b></h3>
<?php endif; ?>

<legend>
