<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Solicitud</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/template/images/favicon.png" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- iziToast -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Jquery Validation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/additional-methods.min.js" integrity="sha512-XJiEiB5jruAcBaVcXyaXtApKjtNie4aCBZ5nnFDIEFrhGIAvitoqQD6xd9ayp5mLODaCeaXfqQMeVs1ZfhKjRQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/localization/messages_es_AR.min.js" integrity="sha512-HHnzo0ssMRoNapdoTaORwzLpemBFMsg7GA8fr0d9xS1rEXKHazYMTUAUka2abGFCfsdXgZPVVyv3LCkXP1Fhsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
      jQuery.validator.addMethod("letras", function(value, element) {
          //return this.optional(element) || /^[a-z]+$/i.test(value);
          return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáé íñó]*$/.test(value);
      }, "Este campo solo acepta letras");
  </script>
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-7 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- Icono de recuperación de contraseña -->
              <i class="fas fa-unlock-alt fa-4x d-flex justify-content-center"></i>
              </div>
              <h4>Solicítalo aquí</h4>
              <h6 class="font-weight-light">Solicitarlo es fácil. Solo toma unos pocos pasos</h6>
              <form class="pt-3" action="<?php echo site_url(); ?>/solicitudes/guardarSolicitudes" method="post" id="frm_nuevo">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <h6>Apellidos</h6>
                      <input type="text" class="form-control form-control-lg" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellido_sol" id="apellido_sol" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <h6>Teléfono de contacto</h6>
                      <input type="number" class="form-control form-control-lg" name="telefono_sol" id="telefono_sol" placeholder="Teléfono" required>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                        <h6>Nombres</h6>
                      <input type="text" class="form-control form-control-lg" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre_sol" id="nombre_sol" placeholder="Nombres" required>
                    </div>
                    <div class="form-group">
                        <h6>Descripción</h6>
                      <textarea style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="descripcion_sol" id="descripcion_sol"class="form-control"rows="4" cols="80"></textarea>
                    </div>
                    <div class="form-group" >
                      <input type="hidden" name="estado_sol" id="estado_sol" value="1">
                    </div>
                    <div class="form-group" >
                      <?php date_default_timezone_set('America/Guayaquil');
                        $fecha_actual=date("Y-m-d H:i:s",time());
                      ?>
                      <input class="form-control"  type="hidden" name="fecha_ingreso_sol" id="fecha_ingreso_sol" value="<?= $fecha_actual; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" name="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"style="background-color: #563103;" >
                    SOLICITAR
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="<?php echo site_url("seguridades/formularioLogin"); ?>" class="text-primary">Regresar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <!-- <script src="<?php echo base_url(); ?>/assets/template/vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>/assets/template/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>/assets/template/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>/assets/template/js/template.js"></script>
  <!-- endinject -->
<!-- validacion -->
<script type="text/javascript">
    $("#frm_nuevo").validate({
      rules:{
        identificacion_sol:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        apellido_sol:{
          letras:true,
          required:true
        },
        nombre_sol:{
          letras:true,
          required:true
        },
        telefono_sol:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        direccion_sol:{
          required:true
        },
        descripcion_sol:{
          required:true,
          letras:true
        }
      },
      messages:{
        identificacion_sol:{
          required:"Por favor ingrese el número de cédula",
          minlength:"La cédula debe tener mínimo 10 dígitos",
          maxlength:"La cédula debe tener máximo 10 dígitos",
          digits:"La cédula solo acepta números"
        },
        apellido_sol:{
          letras:"Apellido Incorrecto",
          required:"Por favor ingrese el apellido"
        },
        nombre_sol:{
          letras:"Nombre Incorrecto",
          required:"Por favor ingrese el Nombre"
        },
        telefono_sol:{
          required:"Por favor ingrese el número de teléfono",
          minlength:"El teléfono debe tener mínimo 10 dígitos",
          maxlength:"El teléfono debe tener máximo 10 dígitos",
          digits:"El número de teléfono solo acepta números"
        },
        direccion_sol:{
          required:"Por favor ingrese una dirección válida"
        },
        descripcion_sol:{
          letras:"Descripción Incorrecta",
          required:"Por favor ingrese una descripción"
        }
      }
    });
</script>


<!-- iziToast -->
<?php if ($this->session->flashdata("confirmacion")): ?>
<script type="text/javascript">
  iziToast.success({
       title: 'CONFIRMACIÓN',
       message: '<?php echo $this->session->flashdata("confirmacion"); ?>',
       position: 'topRight',
     });
</script>
<?php endif; ?>
<?php if ($this->session->flashdata("error")): ?>
<script type="text/javascript">
  iziToast.danger({
       title: 'ADVERTENCIA',
       message: '<?php echo $this->session->flashdata("error"); ?>',
       position: 'topRight',
     });
</script>
<?php endif; ?>
<!-- jquery validate -->
<style media="screen">
  .error{
    color:red;
    font-size: 16px;
  }
  input.error, select.error{
    border: 2px solid red;
  }
</style>
</body>

</html>
solicitar
