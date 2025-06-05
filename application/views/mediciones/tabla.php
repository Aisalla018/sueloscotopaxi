<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Mediciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="loading">Loading&#8230;</div>

<script type="text/javascript">
    // Para mostrar splash screen
    window.addEventListener('load', function () {
        $(".loading").css("display", "none");
    });
</script>

<div class="row container text-center center-button">
    <div class="col-md-12">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="text-dark font-weight-bold mb-2">ANALISIS DE SUELOS</h2>
        

    <div class="text-right">
    <a href="<?php echo site_url(); ?>/mediciones/nuevo" class="btn btn-danger"
       style="background-color: #39D33F; padding: 14px 4;">
        <div class="col-md-12"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Nuevo Registro</div>
    </a>
</div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <hr>
        <div id="tablaMediciones"></div>
    </div>
</div>

<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="detallesModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detallesModalLabel">Detalles de la Medición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
           <div>
    <br>


    <div id="mensajeAptoHistosol" class="alert alert-success mb-3" style="display: none; background-color: #FFF653; text-align: center; font-size: 25px; color: #000000;">
    El Tipo de suelo es HISTOSOL apto para cultivar: <br> Papas <br> Lechugas<br> Col (repollo)<br> Remolacha<br>Mora <br> Cebolla<br>brocoli<br>Zanahoria
</div>

<div id="mensajeAptoAndosol" class="alert alert-success mb-3" style="display: none; background-color: #00BFFF; font-size: 25px; color: #000000;">
    El Tipo de suelo es ANDOSOL apto para cultivar:<br> Maíz<br>Frutilla<br>Quinua <br>Cebada.
</div>



    <div id="mensajeNoApto" class="alert alert-danger mb-3 font-weight-bold" style="display: none; font-size: 25px; color: #000000;">
        Suelo NO apto para cultivar.
        
    </div>
    <br>
    <br>
    <div style="text-align: center;">
    <p><strong style="font-size: 24px; color: #000000;">Humedad:</strong> <span id="detalleHumedad"  style="font-size: 30px; color: #000000;"></span>%</p>
    <p><strong style="font-size: 24px; color: #000000;">Temperatura:</strong> <span id="detalleTemperatura"  style="font-size: 30px; color: #000000;"></span> °C</p>
    <p><strong style="font-size: 24px; color: #000000;">Oxígeno:</strong> <span id="detalleOxigeno"  style="font-size: 30px; color: #000000;"></span>%</p>
</div>

</div>

</div>
<div class="col-md-6">
    <div class="table-responsive" style="margin-top: 20px;">
        <h6 class="mb-3">Tabla de Referencia:</h6>
        <table class="table table-bordered table-sm">
        <thead>
                <tr>
                    <th>Producto</th>
                    <th>Humedad</th>
                    <th>Temperatura</th>
                    <th>Oxígeno</th>
                </tr>
            </thead>
            <tbody>
            <tr  style="background-color: #FBEF08; text-align: center;">
                <td>HISTOSOLES</td>
                            
            </tr>
                <tr>
                    <td>Papas</td>
                    <td>70% - 80%</td>
                    <td>-6°C - 18°C</td>
                    <td>20.95%</td>
                </tr>
                <tr>
                    <td>Lechugas</td>
                    <td>70% - 80%</td>
                    <td>-6°C - 18°C</td>
                    <td>20.95%</td>
                </tr>
                        <tr>
                            <td>Col</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Remolacha</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Mora</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Cebolla blanca</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Brocoli</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Zanahoria</td>
                            <td>70% - 80%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr style="background-color: #00BFFF; text-align: center;">
                        <td>ANDOSOLES</td>
                        </tr>
                        <tr>
                            <td>Frutilla</td>
                            <td>60% - 70%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                    
                        <tr>
                            <td>Maiz(Amarillo)</td>
                            <td>60% - 70%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Quinua</td>
                            <td>60% - 70%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        <tr>
                            <td>Cebada</td>
                            <td>60% - 70%</td>
                            <td>-6°C - 18°C</td>
                            <td>20.95%</td>
                        </tr>
                        
                        
                        <!-- ... Agrega las tablaS de referencia aquí ... -->
                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="https://www.latacunga.gob.ec/images/pdf/PDyOT/PDyOT_Latacunga_2016-2028.pdf" class="text-right" style="color: black;" target="_blank">
    <div class="col-md-12">Mas detalles...</div>
</a>

            </div>
            
            <div class="modal-footer">
            

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        function actualizarTablaMediciones() {
            $.ajax({
                url: "<?php echo site_url('mediciones/obtener_ultimas_mediciones'); ?>",
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.length > 0) {
                        var html = '';
                        $.each(response, function (index, medicion) {
                            html += '<tr>';
                            html += '<td class="text-center">' + medicion.id_med + '</td>';
                            html += '<td class="text-center">' + medicion.humedad_med + '</td>';
                            html += '<td class="text-center">' + medicion.temperatura_med + '</td>';
                            html += '<td class="text-center">' + medicion.oxigeno_med + '</td>';
                            html += '<td class="text-center">' + medicion.fecha_creacion_med + '</td>';
                            html += '<td class="text-center"><button class="btn btn-primary" onclick="mostrarDetalles(' + medicion.humedad_med + ', ' + medicion.temperatura_med + ', ' + medicion.oxigeno_med + ');">VER</button></td>';
                            var botonEditar = "<a href='<?php echo site_url('mediciones/editar'); ?>/" + medicion.id_med + "' title='Editar Medicion'>";
                            botonEditar += "<p class='btn btn-warning'><i class='fa fa-pencil'></i> Editar</p>";
                            botonEditar += "</a>";
                            var botonEliminar = "<a href='javascript:void(0);' onclick='confirmarEliminacion(" + medicion.id_med + ")' title='Eliminar Medicion'>";
                            botonEliminar += "<p class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</p>";
                            botonEliminar += "</a>";
                            html += '<td class="text-center">' + botonEditar + '&nbsp;&nbsp;&nbsp;' + botonEliminar + '</td>';
                            html += '</tr>';
                        });
                        $("#tablaMediciones").html('<table class="table table-bordered table-striped" id="tbl-mediciones2">' +
                            '<thead>' +
                            '<tr>' +
                            '<th class="text-center">ID</th>' +
                            '<th class="text-center">HUMEDAD</th>' +
                            '<th class="text-center">TEMPERATURA</th>' +
                            '<th class="text-center">OXIGENO</th>' +
                            '<th class="text-center">FECHA DE ANALISIS</th>' +
                            '<th class="text-center">DETALLES</th>' +
                            '<th class="text-center">ACCIONES</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>' +
                            html +
                            '</tbody>' +
                            '</table>');
                    } else {
                        $("#tablaMediciones").html('<p>No se encontraron mediciones registradas.</p>');
                    }
                },
                error: function () {
                    $("#tablaMediciones").html('<p>Error al cargar las mediciones.</p>');
                }
            });
        }

        setInterval(actualizarTablaMediciones, 3000);
    });

    function mostrarDetalles(humedad, temperatura, oxigeno) {
    $("#detalleHumedad").text(humedad);
    $("#detalleTemperatura").text(temperatura);
    $("#detalleOxigeno").text(oxigeno);

    // Validar para suelo Histosol
    if (((temperatura >= -6 && temperatura <= 18)) && 
        (oxigeno > 0 && oxigeno <= 20.95) && 
        (humedad >= 70 && humedad <= 80)) {
        
        $("#mensajeSueloHistosol").show();
        $("#mensajeAptoHistosol").show();
        $("#mensajeNoApto").hide();
        $("#mensajeAptoHistosol").addClass('alert-success').removeClass('alert-danger');
    }
    // Validar para suelo Andosol
    else if ((temperatura >= -6 && temperatura <= 18) && 
             (oxigeno > 0 && oxigeno <= 20.95) && 
             (humedad >= 60 && humedad <= 70)) {
        
        $("#mensajeSueloHistosol").hide();
        $("#mensajeAptoHistosol").hide();
        $("#mensajeAptoAndosol").show();
        $("#mensajeNoApto").hide();
        $("#mensajeSueloAndosol").show();
        $("#mensajeSueloAndosol").addClass('alert-success').removeClass('alert-danger');
    }
    // Otras condiciones
    else {
        $("#mensajeAptoAndosol").hide();
        $("#mensajeAptoHistosol").hide();
        $("#mensajeSueloHistosol").hide();
        $("#mensajeSueloAndosol").hide();
        $("#mensajeNoApto").show();
        $("#mensajeNoApto").addClass('alert-danger').removeClass('alert-success');
    }

    $("#detallesModal").modal('show');
}

</script>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function confirmarEliminacion(id_med){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Esta seguro de eliminar la Medicion de forma permanente?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/mediciones/procesarEliminacion/"+id_med;

                  }, true],
                  ['<button>NO</button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                  }],
              ]
          });
    }
</script>

</body>
</script>

</body>
</html>
