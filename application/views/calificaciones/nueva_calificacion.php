<legend class="text-center">
  <i class="glyphicon glyphicon-plus-sign "></i><br>
  <b>Nueva Calificacion</b>
</legend>
<hr>
<form class="" action="<?php echo site_url("calificaciones/guardarCalificaciones") ?>" method="post" required>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Materia:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="materia_cal" value="" placeholder="Ingresar la materia" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Nota:</label>
    </div>
    <div class="col-md-7">
      <input type="number" class="form-control" name="nota_cal" value="" placeholder="Ingresar la nota" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Producto:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="producto_cal" value="" placeholder="Ingresar el producto" required>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary">
        <i class="glyphicon glyphicon-ok"></i>
        Guardar
      </button>
      <a href=" <?php echo site_url("calificaciones/calificacion") ?>" class="btn btn-danger ">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>
</form>
