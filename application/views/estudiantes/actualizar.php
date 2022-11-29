<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR ESTUDIANTE </h3>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if ($estudianteEditar): ?>
        <!-- <?php print_r($estudianteEditar); ?> -->
        <form class="" action="<?php echo site_url("estudiantes/procesarActualizacion") ?>" method="post">
          <!-- hidden como ocultar -->
<center><input type="hidden" name="id_est" value="<?php echo $estudianteEditar->id_est ?>"></center>
<br>
          <div class="row">
            <div class="col-md-4 text-right"  >
              <label for="">CEDULA</label>
            </div>
            <div class="col-md-7">
              <input type="number" name="cedula_est" value="<?php echo $estudianteEditar->cedula_est; ?>"
              class="form-control" placeholder="INGRESE EL NUMERO DE CEDULA" >
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right"  >
              <label for="">APELLIDO</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="apellido_est" value="<?php echo $estudianteEditar->apellido_est; ?>"
              class="form-control" placeholder="INGRESE LOS DOS APELLIDOS" required>
            </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 text-right"  >
                <label for="">NOMBRE</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nombre_est" value="<?php echo $estudianteEditar->nombre_est; ?>"
                class="form-control" placeholder="INGRESE LOS DOS NOMBRE" required>
              </div>
            </div>
            <br>
              <div class="row">
                <div class="col-md-4 text-right"  >
                  <label for="">TELEFONO</label>
                </div>
                <div class="col-md-7">
                  <input type="number" name="telefono_est" value="<?php echo $estudianteEditar->telefono_est; ?>"
                  class="form-control" placeholder="INGRESE TELEFONO" >
                </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4 text-right"  >
                    <label for="">DIRRECCION</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" name="direccion_est" value="<?php echo $estudianteEditar->direccion_est; ?>"
                    class="form-control" placeholder="INGRESE DIRRECCION" required>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-4 text-right"  >
                      <label for="">FECHA DE NACIMIENTO</label>
                    </div>
                    <div class="col-md-7">
                      <input type="date" name="fecha_nacimiento_est" value="<?php echo $estudianteEditar->fecha_nacimiento_est; ?>"
                      class="form-control" placeholder="INGRESE FECHA DE NACIMIENTO" required>
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
                      <a href="<?php echo site_url('Estudiantes/index'); ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-remove"></i>
                        CANCELAR
                      </a>

                      <a href="<?php echo site_url('estudiantes/index'); ?>" class="btn btn-warning" ><i class="glyphicon glyphicon-repeat"> regresar</i></a>
                      </div>

          </div>
        </form>
      <?php else: ?>
        <div class="alert alert-danger">
          <b> no se encontro al estudiante :( </b>

        </div>
      <?php endif ?>
    </div>
  </div>
</div>
