<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sistema analisis calidad suelos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>/assets/privada/img/icon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/privada/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/privada/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/privada/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/privada/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- iziToast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Importacion de Jquery Validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/additional-methods.min.js" integrity="sha512-XJiEiB5jruAcBaVcXyaXtApKjtNie4aCBZ5nnFDIEFrhGIAvitoqQD6xd9ayp5mLODaCeaXfqQMeVs1ZfhKjRQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/localization/messages_es_AR.min.js" integrity="sha512-HHnzo0ssMRoNapdoTaORwzLpemBFMsg7GA8fr0d9xS1rEXKHazYMTUAUka2abGFCfsdXgZPVVyv3LCkXP1Fhsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        jQuery.validator.addMethod("letras", function(value, element) {
            //return this.optional(element) || /^[a-z]+$/i.test(value);
            return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáé íñó]*$/.test(value);
        }, "Este campo solo acepta letras");
    </script>
    <!-- dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- importacion de fileinput.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.0/js/fileinput.min.js" integrity="sha512-C9i+UD9eIMt4Ufev7lkMzz1r7OV8hbAoklKepJW0X6nwu8+ZNV9lXceWAx7pU1RmksTb1VmaLDaopCsJFWSsKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.0/css/fileinput.min.css" integrity="sha512-XHMymTWTeqMm/7VZghZ2qYTdoJyQxdsauxI4dTaBLJa8d1yKC/wxUXh6lB41Mqj88cPKdr1cn10SCemyLcK76A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->

    <div class="container-fluid" style="background-color: #563103; padding: 10px 0;">
      <div class="row g-0 d-none d-lg-flex">
          <div class="col-lg-6 ps-5 text-start">
              <div class="h-100 d-inline-flex align-items-center text-light">
                  <span>Síguenos en:</span>
                  <a class="btn btn-link text-light" href="https://www.facebook.com/people/Sistemas-de-Informaci%C3%B3n-UTC/100076213147628/?sk=photos"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-link text-light" href="https://www.instagram.com/utc_cotopaxi/?hl=es"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
          <div class="col-lg-6 text-end">
              <div class="h-100 bg-light-brown d-inline-flex align-items-center text-white py-2 px-4">
                  <span class="me-2 fw-semi-bold">
                    <?php echo $this->session->userdata("c0nectadoUTC")->nombre_usu; ?>
                    <?php echo $this->session->userdata("c0nectadoUTC")->apellido_usu; ?>
                    &nbsp;&nbsp;
                    <a class="text-white" href="<?php echo site_url(); ?>/seguridades/cerrarSesion">
                      <i class="fa-solid fa-right-from-bracket"></i>
                      Cerrar Sesión
                    </a>
                  </span><br>
              </div>
          </div>
      </div>
  </div>


    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-3 justify-content-center">
        <a href="" class="navbar-brand d-flex align-items-center">
        
            <h1 class="m-0"></h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="ADMINISTRADOR"||$this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"):?>
                    <a href="<?php echo site_url(); ?>/terrenos/index" class="nav-item nav-link">&nbsp;&nbsp;Terrenos</a>
                <?php endif; ?>

                <?php if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="ADMINISTRADOR"||$this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR"):?>
                    <a href="<?php echo site_url(); ?>/mediciones/index" class="nav-item nav-link">&nbsp;&nbsp;Suelos</a>
                <?php endif; ?>

                
            </div>


        </div>
    </nav>
    <!-- Navbar End -->
    <!-- partial -->
    <!-- <div class="main-panel">
      <div class="content-wrapper"> -->
        <hr> <br>
