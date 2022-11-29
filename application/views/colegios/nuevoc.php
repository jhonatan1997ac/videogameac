<legend align="center">
<i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Colegio</b>
<hr>

<legend>
  <form class="" action="<?php echo site_url("colegios/guardarColegio") ?>" method="post">
    <div class="row">
      <div class="col-md-4 text-right"  >
        <label for="">NOMBRE</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_abc" value=""
        class="form-control" placeholder="INGRESE NOMBRE" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right"  >
        <label for="">CURSO</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="curso_abc" value=""
        class="form-control" placeholder="INGRESE CURSO" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right"  >
          <label for="">MATERIA</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="materia_abc" value=""
          class="form-control" placeholder="INGRESE MATERIA" required>
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-md-4 text-right"  >
            <label for="">DOCENTE</label>
          </div>
          <div class="col-md-7">
            <input type="text" name="docente_abc" value=""
            class="form-control" placeholder="INGRESE DOCENTE" >
          </div>
                <div class="col-md-7">
                  <button type="submit" name="button" class="btn btn-primary">
                    <i class="glyphicon glyphicon-ok">
                    </i>
                  GUARDAR
                </button>
                <a href="<?php echo site_url('Colegios/index'); ?>" class="btn btn-danger"
                  <i class="glyphicon glyphicon-remove"></i>
                  CANCELAR
                </a>
                </div>

    </div>
  </form>
