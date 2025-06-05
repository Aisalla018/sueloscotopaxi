<script type="text/javascript">
    $("#geolocalizacion").addClass("active");
</script>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="text-center">
      <h2 class="text-dark font-weight-bold mb-2" >UBICACIONES REGISTRADAS</h2>
    </div>
    <br><br>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCftBPmmIz4frlqefftZpLfvMGHRUizMo4&libraries=places&callback=initMap"></script>
    <?php if ($listadoTerrenos): ?>
      <div id="mapa1" style="width:100%; height:800px;"></div>
      <script type="text/javascript">
        function initMap(){
          var latitud_longitud=new google.maps.LatLng(-0.9374805,-78.6161327);
          var map=new google.maps.Map(
            document.getElementById('mapa1'),
            {
              center:latitud_longitud,
              zoom:10,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            }
          );
          <?php foreach ($listadoTerrenos->result() as $filaTemporal): ?>
              var config={
                position: new google.maps.LatLng (<?php echo $filaTemporal->lat_ter;?>,<?php echo $filaTemporal->lng_ter; ?>),
                map: map,
                title:"<?php echo $filaTemporal->apellido_usu; ?> <?php echo $filaTemporal->nombre_usu ?>"
              }
              var marcador = new google.maps.Marker(config)var marcador = new google.maps.Marker({
  position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
  map: map,
  title: "<?php echo $filaTemporal->apellido_usu; ?> <?php echo $filaTemporal->nombre_usu ?>",
  icon: "ruta_al_icono_ubicacion_azul.png" // Reemplaza "ruta_al_icono_ubicacion_azul.png" con la ruta de tu ícono de ubicación azul
});



              var objHTML={
                content: '<div style="height:150px; width:200px"><center><h6><b> <?php echo $filaTemporal->nombre_par; ?>, <?php echo $filaTemporal->nombre_bar; ?></b></h6> <?php if ($filaTemporal->foto_ter!=""): ?> <img src="<?php echo base_url(); ?>/uploads/terrenos/<?php echo $filaTemporal->foto_ter; ?>" height="150px" width="200px" alt=""> <?php else: ?> N/A <?php endif; ?></center> <br><p><h7><b>PROPIETARIO:</b></h7><?php echo $filaTemporal->apellido_usu; ?> <?php echo $filaTemporal->nombre_usu ?><br><h7><b>TELEFONO:</b></h7><?php echo $filaTemporal->telefono_usu; ?></p> </div>'
              }
              var gIW = new google.maps.InfoWindow(objHTML);
              google.maps.event.addListener(marcador, 'click', function(){
                gIW.open(map, marcador);
              });


          <?php endforeach; ?>
        }
      </script>
    <?php else: ?>
    <div class="alert alert-danger text-center">
        <h3>No se encontraron terrenos registrados</h3>
    </div>
    <?php endif; ?>
  </div>
  <div class="col-md-1"></div>
</div>
