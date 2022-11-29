<legend class="text-center">
<i class="glyphicon glyphicon-user"></i>
</div>
<b>Gestion de Estudiantes</b><br>
<a href="<?php echo site_url('Estudiantes/Nuevo'); ?>" class="btn btn-success">
  <i class="glyphicon glyphicon-plus">Agregar estudiante</i>
</a>
<hr>
<?php if ($listadoEstudiantes): ?>
  <table class="table table-striped table-bordered table-hover" cellpalding="0">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CEDULA</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">TELEFONO</th>
        <th class="text-center">DIRRECCION</th>
        <th class="text-center">FECHA DE NACIMIENTO</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoEstudiantes->result()
        as $estudianteTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $estudianteTemporal->id_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->cedula_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->apellido_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->nombre_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->telefono_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->direccion_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->fecha_nacimiento_est ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudianteTemporal->id_est ?>"  class="btn btn-danger" onclick="return confirm('Estas pendejo');"><i class="glyphicon glyphicon-trash">eliminar</i></a>
            <a href="<?php echo site_url('estudiantes/actualizar'); ?>/<?php echo $estudianteTemporal->id_est ?>"  class="btn btn-warning" ><i class="glyphicon glyphicon-trash">Actualizar</i></a>
          </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b> NO EXISTE ESTUDIANTES </b></h3>
<?php endif; ?>

<legend>
