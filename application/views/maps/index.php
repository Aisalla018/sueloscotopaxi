<script type="text/javascript">
    $("#geolocalizacion").addClass("active");
</script>

<div class="row">
  <div class="col-md-12">
    <div class="text-center">
      <h3>
        <i class="fa-solid fa-map-location-dot"></i>
        &nbsp;&nbsp; UBICACIÓN DE TERRENOS
      </h3>
    </div>
  </div>
</div>
<br>
<!--Validar si existe registros para pintar el google Maps-->
<?php if(!empty($locations)){ ?>
  <!--Page content-->
  <div style="height:385px; margin: 0 20px;" id="map"></div> <!-- Map Div -->
  <!--Script para inicializar el google maps-->
  <script>
    //Funcion inicializar GoogleMaps
    function initMap() {
      var marker; //Variable para los marcadores
      var mapDiv = document.getElementById('map'); //Mapeo de elemento HTML
      var map = new google.maps.Map(mapDiv, { //Instanciar Google Maps
          zoom: <?php if (!empty($locations)) { //Validar si hay registros
            echo '15'; //Aplica un zoom de 15
          } else {
            echo '12'; //Caso contrario un zoom de 12
          } ?>,
          center: new google.maps.LatLng( //Instanciar LatitudLongitud de Google Maps
            <?php if (!empty($locations)) { //(LATITUD) Validar si hay registros
              echo $locations[0]['lat']; //Centrar segun el primer registro encontrado de la BDD
            } else {
              echo '-0.7886730785062509'; //Caso contrario centrar en la coordenada Latitud de la UTC
            } ?>,
            <?php if (!empty($locations)) { //(LONGITUD) Validar si hay registros
              echo $locations[0]['lng']; //Centrar segun el primer registro de la BDD
            } else {
              echo '-78.63294284749065'; //Caso conbtrario centrar en la coordenada Longitud de la UTC
            } ?>)
          });
      //Validar si existe registros
      <?php if (!empty($locations)) { ?>
        var markationsBDD = <?php echo json_encode($terreno) ?>; //Obtener como json_encode (array) de los registros de la BDD
        //Funcion para mostrar el contenido de cada markador que retorna un Content HTML
        //function infoMarker(titulo, imagen, descripcion, latitud, longitud, propietario, producto){
        //cargar los datos en el mapa
        function infoMarker(titulo, imagen, descripcion, latitud, longitud, propietario, producto,celular,tcosecha){
          var info = '<div style="text-align: center;" tabindex="0">'+
                        '<h4 style="background: #4F5DC8; border-radius: 5px; display: block; color: #fff; padding: 0.2rem;">'+titulo+'</h4>'+
                        '<img src='+imagen+' alt="imagen" width="100%" height="200px" style="border-radius: 10px;" onerror="this.parentNode.removeChild(this)">'+
                        '<p style="font-size: 15px; display: block; padding-top: 1rem;">'+descripcion+'</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Latitud:</b><span style="font-size: 13px; margin-left: 5px;">'+latitud+'</span>'+
                        '</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Longitud:</b><span style="font-size: 13px; margin-left: 5px;">'+longitud+'</span>'+
                        '</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Propietario:</b><span style="font-size: 13px; margin-left: 5px;">'+propietario+'</span>'+
                        '</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Producto:</b><span style="font-size: 13px; margin-left: 5px;">'+producto+'</span>'+
                        '</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Celular:</b><span style="font-size: 13px; margin-left: 5px;">'+celular+'</span>'+
                        '</p>'+
                        '<p style="display: block; margin: 0;">'+
                          '<b style="font-size: 13px;">Tiempo Cosecha:</b><span style="font-size: 13px; margin-left: 5px;">'+tcosecha+'</span>'+
                        '</p>'+
                      '</div>';
          return info;
        }

        //Funcion para pintar el icono que recibe por parametro la ruta de la imágen
        //¡Obligatorio! La imagen debe tener una anchura de 40 pixeles y 60 pixeles de alto (40X60)px
        function pintarIcono(ruta){
          if(ruta == '' || ruta == undefined || ruta == null)//Sino recibe una ruta
            var icono = '';//Entonces retornamos vacio para que se pinte el markador por defecto de google maps
          else{//Caso contrario pintaremos un icono
            var icono = {
              url: ruta, //ruta de la imagen
              size: new google.maps.Size(40, 60), //tamaño de la imagen
              origin: new google.maps.Point(0,0), //origen de la iamgen
              //el ancla de la imagen, el punto donde esta marcando, en nuestro caso el centro inferior.
              anchor: new google.maps.Point(20, 60)
            };
          }
          return icono;
        }

        // Agregar multiples marcadores al Mapa
        var rutaIcon; //Definimos variable para obtener la ruta del icono a ser utilizado
        var infoWindow = new google.maps.InfoWindow(), marker, i; //Instanciar clase para mostrar el detalle de un Markador
        for (var i=0; i< <?php echo sizeof($locations); ?>; i++){ //Iterar todos los registros de coordenadas de la BDD
          //Validamos segun el campo 'producto' de la tabla de la BDD para definir la ruta del Icono
          //Primero transformamos el texto a mayusculas para que la validación sea mas sencilla
          //y se lo asignamos a una variable
          var producto = markationsBDD[i]['producto'].toUpperCase();
          //¡Obligatorio! La imagen debe tener una anchura de 40 pixeles y 60 pixeles de alto (40X60)px
          if(producto == 'MAIZ AMARILLO'){//Si el producto es 'MAIZ AMARILLO'
            rutaIcon = '<?php echo base_url(); ?>/assets/iconsMaps/icono1.png'; //Entonces utilizara el icono 1
          }else if(producto == 'PAPAS'){//Si el producto es 'PAPAS'
            rutaIcon = '<?php echo base_url(); ?>/assets/iconsMaps/icono2.png'; //Entonces utilizara el icono 2
          }else if(producto == 'FREJOL'){//Si el producto es 'FREJOL'
            rutaIcon = '<?php echo base_url(); ?>/assets/iconsMaps/icono3.png'; //Entonces utilizara el icono 3
          }else{//Sino cumple ninguna de las anteriores condiciones
            rutaIcon = '';//Entonces no definimos una ruta para que se pinte el markador por defecto
          }

          //--------------Markadores------------//
          marker = new google.maps.Marker({ //Instanciar markador de Google Maps
            position: new google.maps.LatLng( //Instanciar LatitudLongitud de GoogleMaps para la posición
              parseFloat(markationsBDD[i]['lat_ter']), //Latitud
              parseFloat(markationsBDD[i]['lng_ter']) //Longitud
            ),
            map: map, //pintar en el mapa Mapeado
            title: markationsBDD[i]['title'], //Título del markador
            icon: pintarIcono(rutaIcon) //Icono del markador
          });

          //Mostrar Información al obtener un click sobre el marcador
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoMarker(
                  markationsBDD[i][''],
                  '<?php echo base_url(); ?>/uploads/terrenos/'+markationsBDD[i]['foto_ter'],
                  markationsBDD[i]['descripcion_ter'],
                  markationsBDD[i]['lat_ter'],
                  markationsBDD[i]['lng_ter'],
                  markationsBDD[i]['apellido_usu','nombre_usu'],
                  markationsBDD[i]['nombre_produc'],
                  markationsBDD[i]['telefono_usu'],
                  markationsBDD[i]['tiempo_cosecha_ter']
                ));
                infoWindow.open(map, marker);
            }
          })(marker, i));
        }
      <?php } ?>
    }
  </script>
<?php } else { ?> <!--Caso contrario no pintamos el Google Maps y mostramos un mensaje-->
  <h1>Sin registros!!</h1>
<?php } ?>

<?php $this->load->view('maps/scripts'); ?> <!--(View) Cargar Scripts-->
<?php $this->load->view('maps/api-key'); ?> <!--(View) del Api key de Google Maps-->
