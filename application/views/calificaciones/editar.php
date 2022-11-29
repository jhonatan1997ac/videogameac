<div class="row">
  <div class="col-md-12 text-center well">

    <h3>ACTUALIZAR ESTUDIANTE</h3>

  </div>
</div>

<div class="row">
<div class="col-md-12">
  <?php if ($calificacionEditar): ?>
  <form class="" action="<?php echo site_url("calificaciones/procesarEditar") ?>" method="post" required>
    <center>
    <input type="hidden" name="id_cal" value="<?php echo $calificacionEditar->id_cal ?>">
    </center>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Materia:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="materia_cal" value="<?php echo $calificacionEditar->materia_cal ?>" placeholder="Ingresar su materia" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Nota:</label>
      </div>
      <div class="col-md-7">
        <input type="number" class="form-control" name="nota_cal" value="<?php echo $calificacionEditar->nota_cal; ?>" placeholder="Ingresar la nota" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Producto:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="producto_cal" value="<?php echo $calificacionEditar->producto_cal ?>" placeholder="Ingresar el producto" required>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-success">
          <i class="glyphicon glyphicon-ok"></i>
          Actualizar
        </button>
        <a href=" <?php echo site_url("calificaciones/calificacion") ?>" class="btn btn-warning ">
          <i class="glyphicon glyphicon-remove"></i>
          Regresar
        </a>
      </div>
    </div>
  </form>
  <?php  else: ?>
  <div class="alert alert-danger">
    <b>No se encontro la calificacion</b>
  </div>
  <?php endif; ?>
</div>
</div>
