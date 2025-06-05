<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- base:css -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/template/vendors/mdi/css/materialdesignicons.min.css"> -->
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

<body style="background-color: #d7ccc8;">

  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-4 px-5 px-sm-5" style="background-color: rgba(255, 255, 255, 0.1); border: 1px solid black;">
              <div class="d-flex justify-content-start mb-3">
                <a href="<?php echo site_url(); ?>" class="auth-link text-black" style="display: flex; align-items: center;">
                  <i class="fas fa-arrow-left" style="margin-right: 2px;"></i> Volver</a>
              </div>
              <div class="row">
                <div class="col-lg-6 order-lg-2 pl-lg-5"> <!-- Añadido "pl-lg-5" para padding a la izquierda -->
                  <div class="d-flex align-items-center justify-content-end">
                    <img src="<?php echo base_url(); ?>/assets/publica/imagenes/tierra.jpg" alt="logo" style="width: 290px;">
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">

                    <h4 class="text-center"><i class="fas fa-user-friends" style="font-size: 50px; color: black;"></i><br> <br>Bienvenido!<br> Si ya tienes una cuenta</h4>
    <h6 class="font-weight-light text-center">Inicia sesión para continuar.</h6>

                  <form class="pt-3" action="<?php echo site_url(); ?>/seguridades/validarAcceso" method="post" id="frm_ingresar" name="frm_ingresar">
                    <div class="form-group">
                      <div class="form-floating mb-4">
                        <h6>Usuario o Cedula</h6>
                        <div class="input-group mb-3">
                          <span class="input-group-text rounded-left border border-secondary" id="basic-addon1"><i class="fas fa-user" style="color: black;"></i></span>
                          <input type="text" class="form-control rounded-right border border-secondary" name="identificacion_usu" id="identificacion_usu" placeholder="Ingrese su usuario">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <h6>Contraseña</h6>
                      <div class="form-floating">
                        <div class="input-group mb-3">
                          <span class="input-group-text rounded-left border border-secondary" id="basic-addon1"><i class="fas fa-key" style="color: black;"></i></span>
                          <input type="password" class="form-control rounded-right border border-secondary" name="password_usu" id="password_usu" placeholder="Ingrese su contraseña">
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="" style="background-color: #563103;"> INGRESAR </button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <a href="#" class="auth-link text-black">¿Has olvidado la contraseña?</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      ¿Solicita aquí? <a href="<?php echo site_url("solicitudes/nuevo"); ?>" class="text-primary">Crear</a>
                    </div>
                  </form>
                </div>
              </div>
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

  <!-- iziToast -->
  <?php if ($this->session->flashdata("error")): ?>
    <script type="text/javascript">
      iziToast.error({
        title: 'ADVERTENCIA',
        message: '<?php echo $this->session->flashdata("error"); ?>',
        position: 'topRight',
      });
    </script>
  <?php endif; ?>
  <!-- validacion -->
  <script type="text/javascript">
    $('#frm_ingresar').validate({
      rules: {
        identificacion_usu: {
          required: true,
          digits: true
        },
        password_usu: {
          required: true,
        }
      },
      messages: {
        identificacion_usu: {
          required: "Por favor ingrese su usuario",
          digits: "El usuario solo acepta números"
        },
        password_usu: {
          required: "Por favor ingrese una contraseña",
        }
      }
    });
  </script>
  <!-- jquery validate -->
  <style media="screen">
    .error {
      color: red;
      font-size: 16px;
    }

    input.error,
    select.error {
      border: 1px solid red;
    }
  </style>

</body>

</html>
