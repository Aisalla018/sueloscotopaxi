<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3>EDITAR PARROQUIA</h3>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <form action="<?php echo site_url(); ?>/parroquias/procesarActualizacion" method="post" id="frm_editar_parroquia">
            <input type="hidden" name="id_par" id="id_par" value="<?php echo $parroquia->id_par; ?>">
            <br>
            <label for=""> <b>NOMBRE</b></label>
            <input class="form-control" value="<?php echo $parroquia->nombre_par; ?>" type="text" name="nombre_par" id="nombre_par" placeholder="POR FAVOR INGRESE UN NOMBRE">
            <br>
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa-solid fa-arrows-rotate"></i>
              ACTUALIZAR
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
    $("#frm_editar_parroquia").validate({
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
