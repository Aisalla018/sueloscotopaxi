<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2">NUEVO BARRIO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url(); ?>/barrios/guardarBarrios" method="post" id="frm_nuevo_barrio">
            <div class="row">
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>PARROQUIA</b></label>
                <select class="form-select" name="fk_id_par" id="fk_id_par" required >
                      <option value="">-- Seleccione una parroquia --</option>
                      <?php if ($listadoParroquias): ?>
                        <?php foreach ($listadoParroquias->result() as $parroquiaTemporal): ?>
                            <option value="<?php echo $parroquiaTemporal->id_par; ?>">
                              <?php echo $parroquiaTemporal->nombre_par; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                </select>
              </div>
              <div class="col-md-6">
                <label class="text-dark" for=""><b>NOMBRE DEL BARRIO</b></label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre_bar" id="nombre_bar" placeholder="Por favor Ingrese el nombre">
                <br>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
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
    $("#frm_nuevo_barrio").validate({
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
