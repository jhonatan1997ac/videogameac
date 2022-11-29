<div class="row">
  <div class="col-md-12 text-center well">

    <h3>ACTUALIZAR Profesores</h3>

  </div>
</div>

<div class="row">
<div class="col-md-12">
  <?php if ($profesorEditar): ?>
  <form class="" action="<?php echo site_url("profesores/procesarEditar") ?>" method="post" required>
    <center>
    <input type="hidden" name="id_pro" value="<?php echo $profesorEditar->id_pro ?>">
    </center>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">materia:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="materia_pro" value="<?php echo $profesorEditar->materia_pro; ?>" placeholder="Ingresar materia" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">nombre:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="nombre_pro" value="<?php echo $profesorEditar->nombre_pro ?>" placeholder="Ingresar su nombre" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">apellido:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="apellido_pro" value="<?php echo $profesorEditar->apellido_pro ?>" placeholder="Ingresar el apellido" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Cedula:</label>
      </div>
      <div class="col-md-7">
        <input type="number" class="form-control" name="cedula_pro" value="<?php echo $profesorEditar->cedula_pro ?>" placeholder="Ingresar el numero de cedula" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELEFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" class="form-control" name="telefono_pro" value="<?php echo $profesorEditar->telefono_pro ?>" placeholder="Ingresar el numero de TELEFONO" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DIRECCION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" class="form-control" name="direccion_pro" value="<?php echo $profesorEditar->direccion_pro ?>" placeholder="Ingresar la DIRECCION" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FECHA DE NACIMIENTO:</label>
      </div>
      <div class="col-md-7">
        <input type="date" class="form-control" name="fecha_nacimiento_pro" value="<?php echo $profesorEditar->fecha_nacimiento_pro ?>" placeholder="Ingresar el FECHA DE NACIMIENTO" required>
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
        <a href=" <?php echo site_url("profesores/profesor") ?>" class="btn btn-warning ">
          <i class="glyphicon glyphicon-remove"></i>
          Regresar
        </a>
      </div>
    </div>
  </form>
  <?php  else: ?>
  <div class="alert alert-danger">
    <b>No se encontro al profesor</b>
  </div>
  <?php endif; ?>
</div>
</div>
