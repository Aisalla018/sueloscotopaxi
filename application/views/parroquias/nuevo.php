<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3 >NUEVA PARROQUIA</h3>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/parroquias/guardarParroquia" method="post" id="frm_nueva_parroquia">
            <label class="text-dark" for=""><b>NOMBRE</b> </label><br>
            <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre_par" id="nombre_par" placeholder="POR FAVOR INGRESE EL NOMBRE">
            <br>
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa-solid fa-floppy-disk"></i>
              GUARDAR
            </button>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/parroquias/index"
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
    $("#frm_nueva_parroquia").validate({
      rules:{
        nombre_par:{
          letras:true,
          required:true
        }
      },
      messages:{
        nombre_par:{
          letras:"Ingrese un nombre valido",
          required:"Por favor ingrese un nombre"
        }
      }
    });
</script>
