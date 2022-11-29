<legend class="text-center">
<i class="glyphicon glyphicon-user"></i>
</div>
<b>Gestion de Colegios</b><br>
<a href="<?php echo site_url('Colegios/Nuevoc'); ?>" class="btn btn-success">
  <i class="glyphicon glyphicon-plus">Agregar colegio</i>
</a>
<hr>
<?php if ($listadoColegios): ?>
  <table class="table table-striped table-bordered table-hover" cellpalding="0">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">CURSO</th>
        <th class="text-center">MATERIA</th>
        <th class="text-center">DOCENTE</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoColegios->result()
        as $colegioTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $colegioTemporal->id_abc ?></td>
          <td class="text-center"><?php echo $colegioTemporal->nombre_abc ?></td>
          <td class="text-center"><?php echo $colegioTemporal->curso_abc ?></td>
          <td class="text-center"><?php echo $colegioTemporal->materia_abc ?></td>
          <td class="text-center"><?php echo $colegioTemporal->docente_abc ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('colegios/borrar'); ?>/<?php echo $colegioTemporal->id_abc ?>"  class="btn btn-danger" ><i class="glyphicon glyphicon-trash">eliminar</i></a>
            <a href="<?php echo site_url('colegios/editar'); ?>/<?php echo $colegioTemporal->id_abc ?>"  class="btn btn-warning" ><i class="glyphicon glyphicon-pencil">editar</i></a>
          </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b> NO EXISTE COLEGIO </b></h3>
<?php endif; ?>

<legend>
