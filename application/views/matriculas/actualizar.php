<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR matricula </h3>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($matriculaEditar): ?>
        <!-- <?php print_r($matriculaEditar); ?> -->
        <form class="" action="<?php echo site_url("matriculas/procesarActualizacion") ?>" method="post">
          <!-- hidden como ocultar -->
<center><input type="hidden" name="id_matricula" value="<?php echo $matriculaEditar->id_matricula ?>"></center>
<br>
            <div class="row">
              <div class="col-md-4 text-right">
                <label for="">NOMBRE</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_matricula" value="<?php echo $matriculaEditar->nombre_matricula; ?>"
                class="form-control" placeholder="INGRESE NOMBRE" required>
              </div>
            </div>
            <br>
              <div class="row">
                <div class="col-md-4 text-right">
                  <label for="">numero creditos</label>
                </div>
                <div class="col-md-7">
                  <input type="number" name="numero_creditos_matricula" value="<?php echo $matriculaEditar->numero_creditos_matricula; ?>"
                  class="form-control" placeholder="INGRESE Creditos" >
                </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4 text-right"  >
                    <label for="">DESCRIPCION</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" name="descripcion_matricula" value="<?php echo $matriculaEditar->descripcion_matricula; ?>"
                    class="form-control" placeholder="INGRESE DESCRIPCION" required>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-4 text-right"  >
                      <label for="">JORNADA</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="jornada_matricula" value="<?php echo $matriculaEditar->jornada_matricula; ?>"
                      class="form-control" placeholder="INGRESE JORNADA" required>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4 text-right"  >
                      </div>
                      <div class="col-md-7">
                        <button type="submit" name="button" class="btn btn-warning">
                          <i class="glyphicon glyphicon-ok">
                          </i>
                        ACTUALIZAR
                      </button>
                      <a href="<?php echo site_url('matriculas/index'); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        CANCELAR
                      </a>

                      <a href="<?php echo site_url('matriculas/index'); ?>" class="btn btn-warning" ><i class="glyphicon glyphicon-repeat"> regresar</i></a>
                      </div>

          </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b> no se encontro al matricula :( </b>

        </div>
      <?php endif ?>
    </div>
  </div>
</div>
