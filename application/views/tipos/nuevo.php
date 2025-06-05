<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2">NUEVO TIPO DE PRODUCTO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url(); ?>/tipos/guardarTipos" method="post" id="frm_nuevo_tipo">
            <div class="row">
              <div class="col-md-6">
                <label class="text-dark" for=""><b>PRODUCTO</b></label>
                <select class="form-select" name="fk_id_pro" id="fk_id_pro" >
                      <option value="">-- Seleccione un producto --</option>
                      <?php if ($listadoProductos): ?>
                        <?php foreach ($listadoProductos->result() as $productoTemporal): ?>
                            <option value="<?php echo $productoTemporal->id_produc; ?>">
                              <?php echo $productoTemporal->nombre_produc; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                </select>
              </div>
              <div class="col-md-6">
                <label class="text-dark" for=""><b>NOMBRE</b></label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre_tipo" id="nombre_tipo" placeholder="Por favor Ingrese el nombre">
                <br>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
              </button>
              &nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/tipos/index" class="btn btn-danger">
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
    $("#frm_nuevo_tipo").validate({
      rules:{
        fk_id_pro:{
          required:true
        },
        nombre_tipo:{
          letras:true,
          required:true
        }
      },
      messages:{
        fk_id_pro:{
          required:"Por favor seleccione un producto"
        },
        nombre_tipo:{
          letras:"Nombre Incorrecto",
          required:"Por favor ingrese el Nombre"
        }
      }
    });
</script>

<script type="text/javascript">
  $("#fk_id_pro").select2();
</script>
