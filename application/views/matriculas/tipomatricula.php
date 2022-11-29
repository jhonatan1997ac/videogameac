<legend align="center">
<i class="glyphicon glyphicon-check"></i>
<b>TIPOS DE MATRICULAS</b>
<hr>

<legend>
  <form class="" action="<?php echo site_url("matriculas/guardarMatricula") ?>" method="post">
      <div class="row">
        <div class="col-md-4 text-right"  >
          <label for="">NOMBRE</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="nombre_matricula" value=""
          class="form-control" placeholder="INGRESE NOMBRE">
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-md-4 text-right"  >
            <label for=""> OBSERVACIONES </label>
          </div>
          <div class="col-md-7">
            <input type="text" name="observacion_matricula" value=""
            class="form-control" placeholder="INGRESE OBSERVACIONES">
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right"  >
              <label for=""> ESTADO </label>
            </div>
            <div class="col-md-7">
              <input type="text" name="estado_matricula" value=""
              class="form-control" placeholder="INGRESE ESTADO">
            </div>
            </div>
            </div>
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
