<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="text-dark font-weight-bold mb-2" >LISTADO DE TERRENOS</h2>
      <a href="<?php echo site_url(); ?>/terrenos/nuevo" class="btn btn-danger"style="background-color: #39D33F; padding: 14px 4;">
        <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Nuevo Registro
      </a>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <?php if ($listadoTerrenos): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="tbl-terrenos" >
                <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th class="text-center">N. REGISTRO</th>
                      <th class="text-center">FOTO</th>
                      <th class="text-center">LATITUD</th>
                      <th class="text-center">LONGITUD</th>
                      <th class="text-center">PRODUCTO</th>
                      <th class="text-center">TIEMPO COSECHA</th>
                      <th class="text-center">DESCRIPCION</th>
                      <th class="text-center">PROPIETARIO</th>
                      <th class="text-center">TELEFONO</th>
                      <th class="text-center">PARROQUIA</th>
                      <th class="text-center">BARRIO</th>
                      <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listadoTerrenos->result() as $filaTemporal): ?>
                          <tr>
                            <td class="text-center">
                              <?php echo $filaTemporal->id_ter; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->numeroRegistro_ter; ?>
                            </td>
                            <td class="text-center">
                              <?php if ($filaTemporal->foto_ter!=""): ?>
                                <img
                                src="<?php echo base_url(); ?>/uploads/terrenos/<?php echo $filaTemporal->foto_ter; ?>"
                                height="80px"
                                width="100px"
                                alt="">
                              <?php else: ?>
                                N/A
                              <?php endif; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->lat_ter; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->lng_ter; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->nombre_produc; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->tiempo_cosecha_ter; ?> MESES
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->descripcion_ter; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->apellido_pro; ?>
                              <?php echo $filaTemporal->nombre_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->telefono_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->nombre_par; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->nombre_bar; ?>
                            </td>
                            <td class="text-center">
                              <a href="<?php echo site_url(); ?>/terrenos/editar/<?php echo $filaTemporal->id_ter; ?>" class="btn btn-primary" title="EDITAR">
                                <i class="fa fa-edit"></i>
                              </a>
                                <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"): ?>
                                  <a href="javascript:void(0)"
                                   onclick="confirmarEliminacion('<?php echo $filaTemporal->id_ter; ?>');" class="btn btn-danger" title="ELIMINAR">
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
          <h3>No se encontraron terrenos registrados</h3>
      </div>
      <?php endif; ?>
    </div>

  </div>
  <div class="col-md-1"></div>
</div>



<script type="text/javascript">
    function confirmarEliminacion(id_ter){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Esta seguro de eliminar el terreno de forma pernante?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/terrenos/procesarEliminacion/"+id_ter;

                  }, true],
                  ['<button>NO</button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                  }],
              ]
          });
    }
</script>

<script type="text/javascript">
      $(document).ready(function() {
              } );
          $('#tbl-terrenos').DataTable( {
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
