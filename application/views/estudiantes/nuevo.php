<legend align="center">
<i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Estudiantes</b>
<hr>

<legend>
  <form class="" action="<?php echo site_url("estudiantes/guardarEstudiante") ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right"  >
        <label for="">CEDULA</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="cedula_est" value=""
        class="form-control" placeholder="INGRESE EL NUMERO DE CEDULA" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right"  >
        <label for="">APELLIDO</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="apellido_est" value=""
        class="form-control" placeholder="INGRESE LOS DOS APELLIDOS" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right"  >
          <label for="">NOMBRE</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="nombre_est" value=""
          class="form-control" placeholder="INGRESE LOS DOS NOMBRE" required>
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-md-4 text-right"  >
            <label for="">TELEFONO</label>
          </div>
          <div class="col-md-7">
            <input type="number" name="telefono_est" value=""
            class="form-control" placeholder="INGRESE TELEFONO" >
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right"  >
              <label for="">DIRRECCION</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="direccion_est" value=""
              class="form-control" placeholder="INGRESE DIRRECCION" required>
            </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right"  >
                <label for="">FECHA DE NACIMIENTO</label>
              </div>
              <div class="col-md-7">
                <input type="date" name="fecha_nacimiento_est" value=""
                class="form-control" placeholder="INGRESE FECHA DE NACIMIENTO" required>
              </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4 text-right"  >
                </div>
                <div class="col-md-7">
                  <button type="submit" name="button" class="btn btn-primary">
                    <i class="glyphicon glyphicon-ok">
                    </i>
                  GUARDAR
                </button>
                <a href="<?php echo site_url('Estudiantes/index'); ?>" class="btn btn-danger"
                  <i class="glyphicon glyphicon-remove"></i>
                  CANCELAR
                </a>
                </div>

    </div>
  </form>
