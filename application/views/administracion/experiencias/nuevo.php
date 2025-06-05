<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3 class="section-title bg-white text-start pe-3">¡POR QUE NOSOTROS!</h3>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/experiencias/guardarExperiencia" method="post" id="frm_nueva_experiencia">
          <h4><b>TITULO Y DESCRIPCIÓN</b> </h4>
          <div class="row">
            <div class="col-md-6">
              <!-- <label class="text-dark" for=""><b>TITULO</b> </label><br> -->
              <input class="form-control" type="text" name="titulo_exp" id="titulo_exp" placeholder="POR FAVOR INGRESE EL TITULO">
              <br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for=""><b>DESCRIPCIÓN</b> </label><br>
              <textarea class="form-control" name="descripcion_exp" id="descripcion_exp" rows="4" cols="80" placeholder="INGRESE LA DESCRIPCION"></textarea>
              <br>
            </div>
          </div>
          <br>
          <h4><b>VIÑETAS</b></h4>
          <div class="row">
            <div class="col-md-4">
              <label class="text-dark" for=""><b>VIÑETA UNO</b> </label><br>
              <textarea class="form-control" name="descripcion_uno_exp" id="descripcion_uno_exp" rows="4" cols="80" placeholder="INGRESE EL TEXTO"></textarea>
              <br>
            </div>
            <div class="col-md-4">
              <label class="text-dark" for=""><b>VIÑETA DOS</b> </label><br>
              <textarea class="form-control" name="descripcion_dos_exp" id="descripcion_dos_exp" rows="4" cols="80" placeholder="INGRESE EL TEXTO"></textarea>
              <br>
            </div>
            <div class="col-md-4">
              <label class="text-dark" for=""><b>VIÑETA TRES</b> </label><br>
              <textarea class="form-control" name="descripcion_tres_exp" id="descripcion_tres_exp" rows="4" cols="80" placeholder="INGRESE EL TEXTO"></textarea>
              <br>
            </div>
          </div>
          <br>
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa-solid fa-floppy-disk"></i>
              GUARDAR
            </button>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>administracion/experiencias/index"
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
    $("#frm_nueva_experiencia").validate({
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
