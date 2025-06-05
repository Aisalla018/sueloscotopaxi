<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <hr>

    <div id="tablaMediciones"></div>

    <script>
      $(document).ready(function() {
        function actualizarTablaMediciones() {
          $.ajax({
            url: "<?php echo site_url('Mediciones/obtenerUltimasMediciones'); ?>",
            method: "GET",
            dataType: "html",
            success: function(data) {
              $("#tablaMediciones").html(data);
            }
          });
        }

        // Llama a la función de actualización en intervalos regulares
        setInterval(actualizarTablaMediciones, 5000); // Actualiza cada 5 segundos (ajusta según tus necesidades)
      });
    </script>

    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="text-dark font-weight-bold mb-6">LISTADODE MEDICIONES</h2>
      <div class="col-md-6">
        <a href="<?php echo site_url(); ?>/mediciones/nuevo" class="btn btn-danger" style="background-color: #39D33F; padding: 14px 4;">
          <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Nuevo Registro
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div> 
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <?php if ($listadoMediciones): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="tbl-mediciones">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NUMERO DE REGISTRO</th>
                <th class="text-center">SUELO</th>
                <th class="text-center">HUMEDAD</th>
                <th class="text-center">TEMPERATURA</th>
                <th class="text-center">OXIGENO</th>
                <th class="text-center">DETALLES</th>
                <th class="text-center">ACCIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($listadoMediciones->result() as $filaTemporal): ?>
                <tr>
                  <td class="text-center">
                    <?php echo $filaTemporal->id_med; ?>
                  </td>
                  <td class="text-center">
                    <?php echo $filaTemporal->numeroRegistro_ter; ?>
                  </td>
                  <td class="text-center">
                    <?php echo $filaTemporal->apellido_pro; ?>
                    <?php echo $filaTemporal->nombre_pro; ?>
                  </td>
                  <td class="text-center">
                    <?php echo $filaTemporal->nombre_produc; ?>
                  </td>
                  <td class="text-center">
                    <?php echo $filaTemporal->humedad_med; ?>%
                  </td>
                  <td class="text-center">
                    <?php echo $filaTemporal->temperatura_med; ?>°C
                  </td>
                  <td class="text-center">
                    <?php if ($filaTemporal->oxigeno_med >= '25'): ?>
                      <?php echo $filaTemporal->oxigeno_med; ?>%<br>
                      <span class="">SE IDENTIFICO UN GAS QUE PUEDE SER PERJUDICIAL</span>
                    <?php else: ?>
                      <span class="">NORMAL</span>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-detalles" data-toggle="modal" data-target="#detallesModal" data-oxigeno="<?php echo $filaTemporal->oxigeno_med; ?>" data-humedad="<?php echo $filaTemporal->humedad_med; ?>" data-temperatura="<?php echo $filaTemporal->temperatura_med; ?>">
                      Detalles
                    </button>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo site_url(); ?>/reportes/index" class="btn btn-warning" title="IMPRIMIR">
                      <i class="fa fa-print"></i>
                    </a>
                    <a href="<?php echo site_url(); ?>/mediciones/editar/<?php echo $filaTemporal->id_med; ?>" class="btn btn-primary" title="EDITAR">
                      <i class="fa fa-edit"></i>
                    </a>
                    <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu == "SUPERADMINISTRADOR"): ?>
                      <a href="javascript:void(0)" onclick="confirmarEliminacion('<?php echo $filaTemporal->id_med; ?>');" class="btn btn-danger" title="ELIMINAR">
                        <i class="fa fa-trash"></i>
                      </a>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <div class="alert alert-danger text-center">
          <h3>No se encontraron mediciones registradas</h3>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>

<!-- Modal para mostrar detalles -->
<div class="modal fade" id="detallesModal" tabindex="-1" role="dialog" aria-labelledby="detallesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detallesModalLabel">Detalles de la Medición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Oxígeno:</strong> <span id="detalleOxigeno"></span></p>
                <p><strong>Humedad:</strong> <span id="detalleHumedad"></span></p>
                <p><strong>Temperatura:</strong> <span id="detalleTemperatura"></span></p>

                <h6>Tabla de Referencia:</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Humedad</th>
                            <th>Temperatura</th>
                            <th>Oxígeno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Papas</td>
                            <td>70% a 80%</td>
                            <td>-6 C a 18 C</td>
                            <td>20.95%</td>
                        </tr>
                        <!-- ... Agrega las demás filas de la tabla de referencia aquí ... -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function confirmarEliminacion(id_med) {
    iziToast.question({
      timeout: 20000,
      close: false,
      overlay: true,
      displayMode: 'once',
      id: 'question',
      zindex: 999,
      title: 'CONFIRMACIÓN',
      message: '¿Esta seguro de eliminar la Medicion de forma pernante?',
      position: 'center',
      buttons: [
        ['<button><b>SI</b></button>', function(instance, toast) {
          instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
          window.location.href =
            "<?php echo site_url(); ?>/mediciones/procesarEliminacion/" + id_med;
        }, true],
        ['<button>NO</button>', function(instance, toast) {
          instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        }],
      ]
    });
  }

  $(document).ready(function() {
    // Evento de clic en el botón "Detalles"
    $(document).on("click", ".btn-detalles", function() {
        var oxigeno = $(this).data("oxigeno");
        var humedad = $(this).data("humedad");
        var temperatura = $(this).data("temperatura");

        // Actualizar los campos en el modal con los detalles
        $("#detalleOxigeno").text(oxigeno + "%");
        $("#detalleHumedad").text(humedad + "%");
        $("#detalleTemperatura").text(temperatura + "°C");
    });
  });

  $('#tbl-mediciones').DataTable( {
    dom: 'Blfrtip',
    buttons: [
      {
        "extend": "excelHtml5",
        "text": "<i class='fas fa-file-excel'></i>",
        "titleAttr": "Exportar a Excel",
        "className": "btn btn-success"
      },
      {
        "extend": "pdfHtml5",
        "text": "<i class='fas fa-file-pdf'></i>",
        "titleAttr": "Exportar a PDF",
        "className": "btn btn-danger"
      },
      {
        "extend": "print",
        "text": "<i class='fa fa-print'></i>",
        "titleAttr": "Imprimir",
        "className": "btn btn-info"
      },
    ],
    language: {
      url: '<?php echo base_url(); ?>/assets/datatables/Spanish.json'
    }
  } );
</script>
