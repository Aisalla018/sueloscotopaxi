<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3 class="section-title bg-white text-start pe-3">Sobre nosotros</h3>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <div class="card-body">
        <form action="<?php echo site_url(); ?>/servicios/procesarActualizacion" method="post" id="frm_editar_servicio">
          <input class="form-control" value="<?php echo $servicio->id_ser;?>" type="hidden" name="id_ser" id="id_ser">
          <h4><b>TITULO Y SUBTITULO</b> </h4>
          <div class="row">
            <div class="col-md-6">
              <label class="text-dark" for=""><b>TITULO</b> </label><br>
              <input class="form-control" value="<?php echo $servicio->titulo_ser;?>" type="text" name="titulo_ser" id="titulo_ser" placeholder="POR FAVOR INGRESE EL TITULO">
              <br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for=""><b>SUBTITULO</b> </label><br>

              <textarea class="form-control" name="subtitulo_ser" id="subtitulo_ser" rows="4" cols="80" placeholder="INGRESE EL TITULO"><?php echo $servicio->subtitulo_ser;?></textarea>
              <br>
            </div>
          </div>
          <br>
          <h4><b>TITULO Y DESCRIPCION UNO</b></h4>
          <div class="row">
            <div class="col-md-6">
              <label class="text-dark" for=""><b>TITULO</b> </label><br>
              <textarea class="form-control" name="titulo_uno_ser" id="titulo_uno_ser" rows="4" cols="80" placeholder="INGRESE EL TITULO"><?php echo $servicio->titulo_uno_ser; ?></textarea>
              <br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for=""><b>DESCRIPCION</b> </label><br>
              <textarea class="form-control" name="descripcion_uno_ser" id="descripcion_uno_ser" rows="4" cols="80" placeholder="INGRESE LA DESCRIPCION"><?php echo $servicio->descripcion_uno_ser; ?></textarea>
              <br>
            </div>
          </div>
          <br>
          <h4><b>TITULO Y DESCRIPCION DOS</b></h4>
          <div class="row">
            <div class="col-md-6">
              <label class="text-dark" for=""><b>TITULO</b> </label><br>
              <textarea class="form-control" name="titulo_dos_ser" id="titulo_dos_ser" rows="4" cols="80" placeholder="INGRESE EL TITULO"><?php echo $servicio->titulo_dos_ser; ?></textarea>
              <br>
            </div>
            <div class="col-md-6">
              <label class="text-dark" for=""><b>DESCRIPCION</b> </label><br>
              <textarea class="form-control" name="descripcion_dos_ser" id="descripcion_dos_ser" rows="4" cols="80" placeholder="INGRESE LA DESCRIPCION"><?php echo $servicio->descripcion_dos_ser; ?></textarea>
              <br>
            </div>
          </div>
          <?php date_default_timezone_set('America/Guayaquil');
            $fecha_actual=date("Y-m-d H:i:s",time());
          ?>
          <input class="form-control"  type="hidden" name="fecha_modificacion_ser" id="fecha_modificacion_ser" value="<?= $fecha_actual; ?>">
            <button type="submit" name="button" class="btn btn-success">
              <i class="fa-solid fa-floppy-disk"></i>
              GUARDAR
            </button>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/servicios/index"
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
    $("#frm_editar_servicio").validate({
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
