<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="text-dark font-weight-bold mb-2" >LISTADO DE PROPIETARIOS</h2>
      <a href="<?php echo site_url(); ?>/propietarios/nuevo" class="btn btn-danger"style="background-color: #39D33F; padding: 14px 4;">
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
      <?php if ($listadoPropietarios): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="tbl-propietarios" >
                <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th class="text-center">IDENTIFICACION</th>
                      <th class="text-center">APELLIDO</th>
                      <th class="text-center">NOMBRE</th>
                      <th class="text-center">CORREO ELECTRONICO</th>
                      <th class="text-center">TELEFONO</th>
                      <th class="text-center">ESTADO</th>
                      <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listadoPropietarios->result() as $filaTemporal): ?>
                          <tr>
                            <td class="text-center">
                              <?php echo $filaTemporal->id_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->identificacion_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->apellido_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->nombre_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->email_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php echo $filaTemporal->telefono_pro; ?>
                            </td>
                            <td class="text-center">
                              <?php if ($filaTemporal->estado_pro=='1'): ?>
                                <span class="badge rounded-pill bg-success">ACTIVO</span>
                              <?php else: ?>
                                <span class="badge rounded-pill bg-danger">INACTIVO</span>
                              <?php endif; ?>
                            </td>
                            <td class="text-center">
                              <a href="<?php echo site_url(); ?>/propietarios/editar/<?php echo $filaTemporal->id_pro; ?>" class="btn btn-primary" title="EDITAR">
                                <i class="fa fa-edit"></i>
                              </a>
                                <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"): ?>
                                  <a href="javascript:void(0)"
                                   onclick="confirmarEliminacion('<?php echo $filaTemporal->id_pro; ?>');" class="btn btn-danger" title="ELIMINAR">
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
          <h3>No se encontraron propietarios registradas</h3>
      </div>
      <?php endif; ?>
    </div>

  </div>
  <div class="col-md-1"></div>
</div>



<script type="text/javascript">
    function confirmarEliminacion(id_pro){
          iziToast.question({
              timeout: 20000,
              close: false,
              overlay: true,
              displayMode: 'once',
              id: 'question',
              zindex: 999,
              title: 'CONFIRMACIÓN',
              message: '¿Esta seguro de eliminar el propietario de forma pernante?',
              position: 'center',
              buttons: [
                  ['<button><b>SI</b></button>', function (instance, toast) {

                      instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                      window.location.href=
                      "<?php echo site_url(); ?>/propietarios/procesarEliminacion/"+id_pro;

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
          $('#tbl-propietarios').DataTable( {
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
