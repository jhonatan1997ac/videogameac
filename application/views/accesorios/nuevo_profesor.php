<legend class="text-center">
  <i class="glyphicon glyphicon-plus-sign "></i><br>
  <b>Nuevo Profesor</b>
</legend>
<hr>
<form class="" action="<?php echo site_url("profesores/guardarProfesores") ?>" method="post" required>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Materia:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="materia_pro" value="" placeholder="Ingresar la maeria" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Nombre:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="nombre_pro" value="" placeholder="Ingresar su nombre" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Apellido:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="apellido_pro" value="" placeholder="Ingresar el apellido" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">Cedula:</label>
    </div>
    <div class="col-md-7">
      <input type="number" class="form-control" name="cedula_pro" value="" placeholder="Ingresar el numero de cedula" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO:</label>
    </div>
    <div class="col-md-7">
      <input type="number" class="form-control" name="telefono_pro" value="" placeholder="Ingresar el numero de TELEFONO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCION:</label>
    </div>
    <div class="col-md-7">
      <input type="text" class="form-control" name="direccion_pro" value="" placeholder="Ingresar la DIRECCION" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">FECHA DE NACIMIENTO:</label>
    </div>
    <div class="col-md-7">
      <input type="date" class="form-control" name="fecha_nacimiento_pro" value="" placeholder="Ingresar el FECHA DE NACIMIENTO" required>
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
      <a href=" <?php echo site_url("profesores/profesor") ?>" class="btn btn-danger ">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>
</form>
