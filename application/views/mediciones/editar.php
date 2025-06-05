<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2">EDITAR MEDICION</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/mediciones/procesarActualizacion" method="post" id="frm_nueva_medicion" enctype="multipart/form-data">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <label class="text-dark"><b>SELECCIONE EL TERRENO</b></label>
              <select class="form-select" name="fk_id_ter" id="fk_id_ter">
                <option value="">--Seleccione uno--</option>
                <?php if ($listadoTerrenos): ?>
                  <?php foreach ($listadoTerrenos->result() as $terrenoTemporal): ?>
                    <option value="<?php echo $terrenoTemporal->id_ter; ?>">
                      <?php echo $terrenoTemporal->numeroRegistro_ter; ?> || <?php echo $terrenoTemporal->descripcion_ter; ?>
                    </option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="col-md-6">
              <label class="text-dark"><b>OBSERVACION</b></label>
              <input class="form-control" style="text-transform: uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="observacion_med" id="observacion_med" placeholder="POR FAVOR INGRESE LA OBSERVACIÓN">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label class="text-dark"><b>HUMEDAD (%)</b></label>
              <input class="form-control" style="text-transform: uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="humedad_med" id="humedad_med" value="<?php echo $medicion->humedad_med; ?>" placeholder="POR FAVOR INGRESE LA HUMEDAD">
            </div>
            <div class="col-md-4">
              <label class="text-dark"><b>TEMPERATURA (°C)</b></label>
              <input class="form-control" style="text-transform: uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="temperatura_med" id="temperatura_med" value="<?php echo $medicion->temperatura_med; ?>" placeholder="POR FAVOR INGRESE LA TEMPERATURA">
            </div>
            <div class="col-md-4">
              <label class="text-dark"><b>OXIGENO</b></label>
              <input class="form-control" style="text-transform: uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="oxigeno_med" id="oxigeno_med" value="<?php echo $medicion->oxigeno_med; ?>" placeholder="POR FAVOR INGRESE EL OXIGENO">
            </div>
          </div>
          <br><br>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <?php date_default_timezone_set('America/Guayaquil');
              $fecha_actual = date("Y-m-d H:i:s", time());
              ?>
              <input class="form-control" type="hidden" name="fecha_creacion_med" id="fecha_creacion_med" value="<?= $fecha_actual; ?>" readonly>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
          
          <div class="col-md-4 text-center">
          <button type="submit" name="button" class="btn btn-success">
            <i class="fa fa-save"></i>
            GUARDAR
          </button>
          <a href="<?php echo site_url(); ?>/mediciones/index" class="btn btn-danger">
            <i class="fa fa-times"></i>
            CANCELAR
          </a>
          </div>
            <div class="col-md-4"></div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div>
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

  $(document).ready(function() {
    $("#fk_id_ter").val("<?php echo $medicion->fk_id_ter; ?>");
    $("#fk_id_ter").select2();
  });
</script>
