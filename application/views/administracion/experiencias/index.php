<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="text-dark font-weight-bold mb-2 section-title bg-white text-start pe-3">¡POR QUE NOSOTROS!</h2>
      <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"): ?>
        <a href="<?php echo site_url(); ?>/experiencias/nuevo" class="btn btn-danger">
          <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Nuevo2 Registro
        </a>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="card">
      <?php if ($listadoExperiencias): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="tbl-experiencia" >
                <thead>
                    <tr>
                      <th class="text-center">ID</th>
                        <th class="text-center">TITULO</th>
                        <th class="text-center">DESCRIPCION</th>
                        <th class="text-center">ITEM UNO</th>
                        <th class="text-center">ITEM DOS</th>
                        <th class="text-center">ITEM TRES</th>
                        <th class="text-center">FECHA MODIFICACION</th>
                        <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listadoExperiencias->result() as $filaTemporal): ?>
                          <tr>
                            <td class="text-center">
                              <?php echo $filaTemporal->id_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->titulo_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->descripcion_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->descripcion_uno_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->descripcion_dos_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->descripcion_tres_exp; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->fecha_modificacion_exp; ?>
                            </td>
                            <td class="text-center">
                              <a href="<?php echo site_url(); ?>/experiencias/editar/<?php echo $filaTemporal->id_exp; ?>" class="btn btn-primary" title="EDITAR">
                                <i class="fa fa-edit"></i>
                              </a>
                                <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"): ?>
                                  <a href="javascript:void(0)"
                                   onclick="confirmarEliminacion('<?php echo $filaTemporal->id_exp; ?>');" class="btn btn-danger" title="ELIMINAR">
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
          <h3>No se encontraron registros</h3>
      </div>
      <?php endif; ?>
    </div>

  </div>
  <div class="col-md-1"></div>
</div>

<script type="text/javascript">
    function confirmarEliminacion(id_exp){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Esta seguro de eliminar de forma pernante?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/experiencias/procesarEliminacion/"+id_exp;

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
          $('#tbl-experiencia').DataTable( {
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
