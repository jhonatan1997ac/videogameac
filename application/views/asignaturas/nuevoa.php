<legend align="center">
<i class="glyphicon glyphicon-pencil"></i>
<b>ASIGNATURAS</b>
<hr>

</legend>
  <form class="" action="<?php echo site_url("asignaturas/guardarAsignatura") ?>" method="post">
      <div class="row">
        <div class="col-md-4 text-right"  >
          <label for="">NOMBRE</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="nombre_asignatura" value=""
          class="form-control" placeholder="INGRESE LOS NOMBRES">
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-md-4 text-right"  >
            <label for="">NUMERO DE CREDITOS</label>
          </div>
          <div class="col-md-7">
            <input type="number" name="numero_creditos_asignatura" value=""
            class="form-control" placeholder="INGRESE NUMERO DE CREDITOS">
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right"  >
              <label for="">DESCRIPCION</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="descripcion_asignatura" value=""
              class="form-control" placeholder="INGRESE DESCRIPCION">
            </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right"  >
                <label for="">JORNADA</label>
              </div>
              <div class="col-md-7" align="left">
                <input type="text" name="jornada_asignatura" value=""
                class="form-control" placeholder="INGRESE JORNADA">
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
                <a href="<?php echo site_url('Asignaturas/indexa'); ?>" class="btn btn-danger"
                  <i class="glyphicon glyphicon-remove"></i>
                  CANCELAR
                </a>
                </div>
              </div>
  </form>
