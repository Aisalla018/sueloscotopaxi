<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3>EDITAR PRODUCTO</h3>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/productos/procesarActualizacion" method="post" id="frm_editar_producto">
            <input type="hidden" name="id_produc" id="id_produc" value="<?php echo $producto->id_produc; ?>">
            <br>
            <label for=""> <b>NOMBRE:</b> </label>
            <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $producto->nombre_produc; ?>" type="text" name="nombre_produc" id="nombre_produc" placeholder="Nombre del Producto">
            <br>
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa-solid fa-arrows-rotate"></i>
              ACTUALIZAR
            </button>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/productos/index"
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
  <!-- </div>
</div> -->



<script type="text/javascript">
    $("#frm_editar_producto").validate({
      rules:{
        nombre_produc:{
          letras:true,
          required:true
        }
      },
      messages:{
        nombre_produc:{
          letras:"Ingrese un nombre valido",
          required:"Por favor ingrese un nombre"
        }
      }
    });
</script>
