<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2">EDITAR BARRIO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/barrios/procesarActualizacion" method="post" id="frm_editar_barrio">
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" name="id_bar" id="id_bar" value="<?php echo $barrio->id_bar; ?>">
              <label class="text-dark" for="">PARROQUIA:</label>
              <select class="form-control" name="fk_id_par" id="fk_id_par" required >
                    <option value="">--Seleccione un producto--</option>
                    <option value="">-- Seleccione una parroquia --</option>
                    <?php if ($listadoParroquias): ?>
                      <?php foreach ($listadoParroquias->result() as $parroquiaTemporal): ?>
                          <option value="<?php echo $parroquiaTemporal->id_par; ?>">
                            <?php echo $parroquiaTemporal->nombre_par; ?>
                          </option>
                      <?php endforeach; ?>
                    <?php endif; ?>
              </select>
              <br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for="">NOMBRE DEL BARRIO:</label>
              <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre_bar" id="nombre_bar" value="<?php echo $barrio->nombre_bar; ?>" placeholder="Por favor Ingrese el nombre">
              <br>
            </div>
          </div>
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa fa-refresh"> </i>
              ACTUALIZAR
            </button>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/barrios/index"
              class="btn btn-danger">
              <i class="fa fa-times"> </i>
              CANCELAR
            </a>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>

<script type="text/javascript">
    $("#frm_editar_barrio").validate({
      rules:{
        fk_id_par:{
          required:true
        },
        nombre_bar:{
          letras:true,
          required:true
        }
      },
      messages:{
        fk_id_par:{
          required:"Por favor seleccione el pais"
        }equired:"Por favor ingrese el apellido"
        },
        nombre_bar:{
          letras:"Nombre Incorrecto",
          required:"Por favor ingrese el Nombre"
        }
      }
    });
</script>

<script type="text/javascript">
   $("#fk_id_par").val("<?php echo $barrio->fk_id_par; ?>");
</script>
