<legend class="text-center">
  <i class="glyphicon glyphicon-user "></i><br>
  <b>Gestion de Profesores</b><hr>
  <center>
    <a href=" <?php echo site_url("profesores/nuevo_profesor") ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar Nuevo
    </a>
  </center>
</legend>

<hr>
<br>
<br>

<?php if ($listadoProfesores): ?>
  <table class="table table-stripe table-border table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Materia</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Cedula</th>
        <th class="text-center">TELEFONO</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">FECHA DE NACIMIENTO</th>
        <th class="text-center">ACCCIONES</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php foreach ($listadoProfesores->result() as $profesorTemporal): ?>
        <tr>
            <td class="tex-center">
              <?php echo $profesorTemporal->id_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->materia_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->nombre_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->apellido_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->cedula_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->telefono_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->direccion_pro; ?>
            </td>
            <td class="tex-center">
              <?php echo $profesorTemporal->fecha_nacimiento_pro; ?>
            </td>

            <td class="text-center">
            <a href="<?php echo site_url("profesores/editar"); ?>/<?php echo $profesorTemporal->id_pro; ?>" class="btn btn-warning ">
              <i class="glyphicon glyphicon-pencil">Editar</i>
              </a>
              <a href="<?php echo site_url("profesores/borrar"); ?>/<?php echo $profesorTemporal->id_pro; ?>" class="btn btn-danger ">
                <i class="glyphicon glyphicon-trash">Eliminar</i>
              </a>
            </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe Profesores</b></h3>
<?php endif; ?>
