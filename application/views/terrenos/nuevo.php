<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2" >NUEVO TERRENO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url(); ?>/terrenos/guardarTerrenos" method="post" id="frm_nuevo_terreno" enctype="multipart/form-data" >
            <div class="row">
              <?php
                $registro_aleatorio=rand(11111,99999);
              ?>
              <input class="form-control"  type="hidden" name="numeroRegistro_ter" id="numeroRegistro_ter" value="<?= $registro_aleatorio; ?>" readonly>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>NOMBRE DEL PROPIETARIO</b></label>
                <select class="form-select" name="fk_id_pro" id="fk_id_pro">
                      <option value="">--Seleccione un nombre--</option>
                      <?php if ($listadoPropietarios): ?>
                        <?php foreach ($listadoPropietarios->result() as $propietarioTemporal): ?>
                            <option value="<?php echo $propietarioTemporal->id_pro; ?>">
                              <?php echo $propietarioTemporal->apellido_pro; ?>
                              <?php echo $propietarioTemporal->nombre_pro; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                <br><br>
              </div>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>NOMBRE DE LA PARROQUIA</b></label>
                <select class="form-select" name="fk_id_par" id="fk_id_par">
                      <option value="">--Seleccione un nombre--</option>
                      <?php if ($listadoParroquias): ?>
                        <?php foreach ($listadoParroquias->result() as $parroquiaTemporal): ?>
                            <option value="<?php echo $parroquiaTemporal->id_par; ?>">
                              <?php echo $parroquiaTemporal->nombre_par; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                <br><br>
              </div>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>NOMBRE DEL BARRIO</b></label>
                <select class="form-select" name="fk_id_bar" id="fk_id_bar">
                      <option value="">--Seleccione un nombre--</option>
                      <?php if ($listadoBarrios): ?>
                        <?php foreach ($listadoBarrios->result() as $barrioTemporal): ?>
                            <option value="<?php echo $barrioTemporal->id_bar; ?>">
                              <?php echo $barrioTemporal->nombre_bar; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                  <br><br>
              </div>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>NOMBRE DEL PRODUCTO</b></label>
                <select class="form-select" name="fk_id_produc" id="fk_id_produc">
                      <option value="">--Seleccione un nombre--</option>
                      <?php if ($listadoProductos): ?>
                        <?php foreach ($listadoProductos->result() as $productoTemporal): ?>
                            <option value="<?php echo $productoTemporal->id_produc; ?>">
                              <?php echo $productoTemporal->nombre_produc; ?>
                            </option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                  <br>
              </div>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>TIEMPO DE COSECHA</b></label>
                <select class="form-select" name="tiempo_cosecha_ter" id="tiempo_cosecha_ter">
                      <option value="">--Seleccione un nombre--</option>
                      <option value="1">1 MES</option>
                      <option value="2">2 MESES</option>
                      <option value="3">3 MESES</option>
                      <option value="4">4 MESES</option>
                      <option value="5">5 MESES</option>
                      <option value="6">6 MESES</option>
                      <option value="7">7 MESES</option>
                      <option value="8">8 MESES</option>
                      <option value="9">9 MESES</option>
                      <option value="10">10 MESES</option>
                      <option value="11">11 MESES</option>
                      <option value="12">12 MESES</option>
                  </select>
                  <br>
              </div>
              <div class="col-md-4">
                <label class="text-dark" for=""><b>DESCRIPCION</b></label>
                <textarea name="descripcion_ter" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" id="descripcion_ter"class="form-control"rows="2" cols="80"></textarea><br>
              </div>
              <hr>
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <label for="" class="text-dark"><b>FOTOGRAFIA</b></label><br>
                <div class="text-center">
                  <input type="file" name="foto_ter" accept="image/*" id="foto_ter"  value="" ><br>
                </div>
                <?php date_default_timezone_set('America/Guayaquil');
                  $fecha_actual=date("Y-m-d H:i:s",time());
                ?>
                <input class="form-control"  type="hidden" name="fecha_creacion_ter" id="fecha_creacion_ter" value="<?= $fecha_actual; ?>" readonly>
                <br>
              </div>
              <div class="col-md-1"></div>
              <br>
              <h2 class="text-dark font-weight-bold mb-2" >SELECCIONES LA UBICACION DEL TERRENO</h2>
              <hr>
                <div class="col-md-4">
                  <label for="" class="text-dark"><b>LATITUD</b></label><br>
                  <input class="form-control" type="text" name="lat_ter" id="lat_ter" placeholder="Por favor Ingrese la latitud">
                </div>
                <div class="col-md-4">
                  <label for="" class="text-dark"><b>LONGITUD</b></label>
                  <input class="form-control" type="text" name="lng_ter" id="lng_ter" placeholder="Por favor Ingrese la longitud">
                </div>
                <div class="col-md-4"></div>
                <br><br><br><br>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9iEOdufapKsdBuPeXuhfWgbAWWl1yeaU&libraries=places&callback=initMap"></script>
                <div class="row">
                  <div class="col-md-12">
                    <div id="mapa1" style="width:100%; height:500px;"></div>
                    <script type="text/javascript">
                      function initMap(){
                        var latitud_longitud=new google.maps.LatLng(-0.9374805,-78.6161327);
                        var map=new google.maps.Map(
                          document.getElementById('mapa1'),
                          {
                            center:latitud_longitud,
                            zoom:15,
                            mapTypeId:google.maps.MapTypeId.ROADMAP
                          }
                        );
                        var marcador=new google.maps.Marker({
                          position: latitud_longitud,
                          map:map,
                          title:"seleccione la direccion",
                          draggable:true
                        });
                        google.maps.event.addListener(
                          marcador,
                          'dragend',
                          function(event){
                            var latitud=this.getPosition().lat();
                            var longitud=this.getPosition().lng();
                            document.getElementById("lat_ter").value=latitud;
                            document.getElementById("lng_ter").value=longitud;
                          }
                        );
                      }
                    </script>
                  </div>
                </div>
            </div><br>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
              </button>
              &nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/terrenos/index"
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
    $("#frm_nuevo_terreno").validate({
      rules:{
        lat_ter:{
          required:true
        },
        lng_ter:{
          required:true
        },
        foto_ter:{
          required:true
        },
        descripcion_ter:{
          required:true
        },
        fk_id_produc:{
          required:true
        },
        fk_id_pro:{
          required:true
        },
        fk_id_par:{
          required:true
        },
        fk_id_bar:{
          required:true
        },
        tiempo_cosecha_ter:{
          required:true
        }
      },
      messages:{
        lat_ter:{
          required:"Seleccione uno"
        },
        lng_ter:{
          required:"Seleccione uno"
        },
        foto_ter:{
          required:"Seleccione uno"
        },
        descripcion_ter:{
          required:"Ingrese una descripcion"
        },
        fk_id_produc:{
          required:"Seleccione uno"
        },
        fk_id_pro:{
          required:"Seleccione uno"
        },
        fk_id_par:{
          required:"Seleccione uno"
        },
        fk_id_bar:{
          required:"Seleccione uno"
        },
        tiempo_cosecha_ter:{
          required:"Seleccione uno"
        }
      }
    });
</script>

<script type="text/javascript">
      $("#foto_ter").fileinput({
        allowedFileExtensions:["jpeg","jpg","png"],
        dropZoneEnabled:true
      });
</script>
<script type="text/javascript">
  $("#fk_id_produc").select2();
  $("#fk_id_pro").select2();
  $("#fk_id_par").select2();
  $("#fk_id_bar").select2();
  $("#tiempo_cosecha_ter").select2();
</script>
