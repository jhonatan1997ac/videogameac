<legend class="text-center">
<i class="glyphicon glyphicon-user"></i>
</div>
<b>Gestion de Matricula</b><br>
<a href="<?php echo site_url('Matriculas/Nuevo'); ?>" class="btn btn-success">
  <i class="glyphicon glyphicon-plus">Agregar Matricula</i>
</a>
<hr>
<FORM METHOD=POST ACTION="buscar.php" align="left">
  Buscar: <INPUT TYPE="text" NAME="busqueda">
</FORM>
<?php if ($listadoMatriculas): ?>
  <table class="table table-striped table-bordered table-hover" cellpalding="0">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">OBSERVACION</th>
        <th class="text-center">ESTADO</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoMatriculas->result()
        as $matriculaTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $matriculaTemporal->id_matricula ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->nombre_matricula ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->observacion_matricula ?></td>
          <td class="text-center"><?php echo $matriculaTemporal->estado_matricula ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('matriculas/borrar'); ?>/<?php echo $matriculaTemporal->id_matricula ?>"  class="btn btn-danger" ><i class="glyphicon glyphicon-trash">eliminar</i></a>
            <a href="<?php echo site_url('matriculas/actualizar'); ?>/<?php echo $matriculaTemporal->id_matricula ?>"  class="btn btn-warning" ><i class="glyphicon glyphicon-trash">Actualizar</i></a>
          </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b> NO EXISTE ESTUDIANTES </b></h3>
<?php endif; ?>

<legend>
