<div class="row justify-content-center">
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2">NUEVA MEDICION</h2>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/mediciones/guardarMediciones" method="post" id="frm_nueva_medicion" enctype="multipart/form-data">
        <div class="row justify-content-center">
        <div class="col-md-6">
              <label class="text-dark" for=""><b>SELECCIONE EL TERRENO</b></label>
              <select class="form-select" name="fk_id_ter" id="fk_id_ter">
                <option value="">--Seleccione uno--</option>
                <?php if ($listadoTerrenos): ?>
                  <?php foreach ($listadoTerrenos->result() as $terrenoTemporal): ?>
                    <option value="<?php echo $terrenoTemporal->id_ter; ?>">
                      <?php echo $terrenoTemporal->numeroRegistro_ter; ?> ||  <?php echo $terrenoTemporal->descripcion_ter; ?> 
                    </option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
              <br><br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for=""><b>OBSERVACION</b></label>
              <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="observacion_med" id="observacion_med" placeholder="POR FAVOR INGRESE LA OBSERVACIÓN">
              <br><br>
            </div>
                  </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <label class="text-dark" for=""><b>HUMEDAD(%)</b></label>
              <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="humedad_med" id="humedad_med" placeholder="POR FAVOR INGRESE LA HUMEDAD">
              <br>
            </div>
            <div class="col-md-4">
              <label class="text-dark" for=""><b>TEMPERATURA(°C)</b></label>
              <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="temperatura_med" id="temperatura_med" placeholder="POR FAVOR INGRESE LA TEMPERATURA">
              <br>
            </div>
            <div class="col-md-4">
              <label class="text-dark" for=""><b>OXIGENO</b></label>
              <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="oxigeno_med" id="oxigeno_med" placeholder="POR FAVOR INGRESE EL OXIGENO">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <?php date_default_timezone_set('America/Guayaquil');
                $fecha_actual=date("Y-m-d H:i:s",time());
              ?>
              <input class="form-control" type="hidden" name="fecha_creacion_med" id="fecha_creacion_med" value="<?= $fecha_actual; ?>" readonly>
              <br>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-2">
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"></i>
                GUARDAR
              </button>
            </div>
            <div class="col-md-2">
              <a href="<?php echo site_url(); ?>/mediciones/index" class="btn btn-danger">
                <i class="fa fa-times"></i>
                CANCELAR
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $("#frm_nueva_medicion").validate({
    rules: {
      temperatura_med: {
        required: true
      },
      humedad_med: {
        required: true
      },
      oxigeno_med: {
        required: true
      },
      fk_id_ter: {
        required: true
      }
    },
    messages: {
      temperatura_med: {
        required: "Seleccione uno"
      },
      humedad_med: {
        required: "Seleccione uno"
      },
      oxigeno_med: {
        required: "Seleccione uno"
      },
      fk_id_ter: {
        required: "Seleccione uno"
      }
    }
  });
</script>

<script type="text/javascript">
  $("#fk_id_ter").select2();
</script>
