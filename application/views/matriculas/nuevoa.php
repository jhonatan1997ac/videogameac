<center>
  <h3><b>Nueva Matrícula</b></h3>
</center>
<br>
<form class="" action="OJO" method="post" >
  <b>Estudiante:</b> <br>
  <select class="form-control" name="fk_id_est"
  id="fk_id_est">
      <option value="">--Seleccione el Estudiante--</option>
      <?php if ($listadoaEstudiantes): ?>
        <?php foreach ($listadoaEstudiantes->result()
        as $estudianteTemporal): ?>
            <option value="<?php echo $estudianteTemporal->id_est; ?>">
              <?php echo $estudianteTemporal->apellido_est ?>
              <?php echo $estudianteTemporal->nombre_est ?>
            </option>
        <?php endforeach; ?>
      <?php else: ?>

      <?php endif; ?>
  </select>
  <br>
  <b>Asignatura:</b> <br>
  <select class="form-control" name="fk_id_asignatura"
  id="fk_id_asignatura">
  <option value="">--Seleccione el Asignatura--</option>
  <?php if ($listadoaAsignaturas): ?>
    <?php foreach ($listadoaAsignaturas->result()
    as $asignaturaTemporal): ?>
        <option value="<?php echo $asignaturaTemporal->id_est; ?>">
          <?php echo $estudianteTemporal->apellido_est ?>
          <?php echo $estudianteTemporal->nombre_est ?>
        </option>
    <?php endforeach; ?>
  <?php else: ?>

  <?php endif; ?>
      <option value="">--Seleccione la Asignatura--</option>
  </select>
  <br>
  <b>Fecha:</b>
  <input class="form-control"
  type="date" name="fecha_mat" id="fecha_mat"
  value="">
  <br>
  <button type="submit" name="button" class="btn btn-success">
    Guardar
  </button>
  <a href="<?php echo site_url('matriculas/index'); ?>"
    class="btn btn-danger">
    Cancelar
  </a>
</form>
