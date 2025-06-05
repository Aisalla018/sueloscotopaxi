<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>AGRI-UTC</title>
    <style>
       body {
           background-color: #b0a389;
       }
   </style>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/publica/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/publica/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/publica/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/publica/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/publica/css/style.css" rel="stylesheet">
    
    <style media="screen">
        .marcador {
            background-color: #800000; /* Cambia el color de fondo a un tono verde azulado */
        }
        .bg-primary {
       background-color: #8B4513; /* Código hexadecimal del color café deseado */
   }
    </style>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Cargando...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0" style="background-color: #8B4513;">
    <div class="row g-0 d-none d-lg-flex" style="background-color: #563103;">


    </div>
</div>


<!-- Topbar End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="" class="navbar-brand d-flex align-items-center">
            <!-- <img src="ruta/a/utc.png" alt="UTC Logo" class="me-5" style="max-height: 50px;"> -->
            <img class="img-fluid rounded" src="<?php echo base_url(); ?>/assets/publica/imagenes/utc.png" style="width: 90%; height: auto;">
            <div class="col-lg-6 text-end">
    <a type="button" class="btn btn-lg btn-white text-dark" href="<?php echo site_url("seguridades/formularioLogin"); ?>">REDES SOCIALES</a>
    <a type="button" class="btn btn-lg btn-white text-dark" href="<?php echo site_url("seguridades/formularioLogin"); ?>">CONTACTOS</a>
    <a type="button" class="btn btn-lg btn-white text-dark" href="<?php echo site_url("seguridades/formularioLogin"); ?>">NOSOTROS</a>
    <a type="button" class="btn btn-lg btn-white text-white" style="background-color: #563103; padding: 14px 4; color: black;" href="<?php echo site_url("seguridades/formularioLogin"); ?>">REGISTRARSE</a>
</div>


        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- Aquí puedes agregar más elementos de navegación si los necesitas -->
            </div>
        </div>
    </nav>



    <!-- Navbar End -->
    <!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?php echo base_url(); ?>/assets/publica/imagenes/volcan.jpg" alt="Image" style="width: 100%; height: 85vh;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                              <h1 class="display-1 text-white mb-5 animated slideInRight">Latacunga</h1>
                                <h1 class="dis-5 text-white mb-3 animated slideInRight">Tan grande como nuestros sueños.</h1>
                                <!-- <p class="display-1 fs-3 text-white">Tan grande como nuestros sueños.</p> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?php echo base_url(); ?>/assets/publica/imagenes/arboles.jpg" alt="Image" style="width: 90%; height: 85vh;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Ciudad</h1>
                                <h1 class="display-4 text-white mb-5 animated slideInRight">llena de color, tradición y autenticidad.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?php echo base_url(); ?>/assets/publica/imagenes/monte.jpg" alt="Image" style="width: 100%; height: 85vh;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Descubre</h1>
                                <h1 class="display-4 text-white mb-5 animated slideInRight">el encanto de Latacunga y vive momentos inolvidables en Ecuador.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?php echo base_url(); ?>/assets/publica/imagenes/humifero.jpg" alt="Image" style="width: 100%; height: 85vh;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                              <h1 class="display-1 text-white mb-5 animated slideInRight">El suelo</h1>
                                <h1 class="display-5 text-white mb-5 animated slideInRight">un tesoro escondido bajo nuestros pies.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 200px;">
            <p class="section-title bg-white text-center text-primary px-3">Ubicaciones Registradas</p>
        </div>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9iEOdufapKsdBuPeXuhfWgbAWWl1yeaU&libraries=places&callback=initMap"></script>
        <?php if ($listadoTerrenos): ?>
            <div id="mapa1" style="width:100%; height:450px;"></div>
            <script type="text/javascript">
                function initMap() {
                    var latitud_longitud = new google.maps.LatLng(-0.9374805, -78.6161327);

                    var map = new google.maps.Map(document.getElementById('mapa1'), {
                        center: latitud_longitud,
                        zoom: 10,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                    });


                    let infoWindow = new google.maps.InfoWindow();

                    <?php foreach ($listadoTerrenos->result() as $filaTemporal): ?>
                        <?php if ($filaTemporal->nombre_produc == "ARENOSO"): ?>
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker({
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTAaaaaaaCTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                                }
                            });

                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "HUMIERO"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/pink-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "LIMOSO"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "PEDREGOSO"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/purple-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "SUELO COMUN"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "OTRO"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/orange-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php elseif ($filaTemporal->nombre_produc == "DESCONOCIDO"): ?>
                            var config = {
                                position: new google.maps.LatLng(<?php echo $filaTemporal->lat_ter; ?>, <?php echo $filaTemporal->lng_ter; ?>),
                                map: map,
                                title: "<?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro . '/CONTACTO:' . $filaTemporal->telefono_pro . '/PRODUCTO:' . $filaTemporal->nombre_produc . '/DESCRIPCION:' . $filaTemporal->descripcion_ter ?>",
                                icon: {
                                    url: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                                }
                            }
                            let marcador<?php echo $filaTemporal->id_ter ?> = new google.maps.Marker(config);
                            google.maps.event.addListener(marcador<?php echo $filaTemporal->id_ter ?>, 'click', function () {
                                let contenido =
                                    'Persona: <?php echo $filaTemporal->apellido_pro . ' ' . $filaTemporal->nombre_pro ?>' +
                                    '<br>' +
                                    'Contacto: <?php echo $filaTemporal->telefono_pro ?>'+
                                    '<br>' +
                                    'Producto: <?php echo $filaTemporal->nombre_produc ?>' +
                                    '<br>' +
                                    'Descripcion: <?php echo $filaTemporal->descripcion_ter; ?>'
                                infoWindow.setContent(contenido);
                                infoWindow.open(map, marcador<?php echo $filaTemporal->id_ter ?>);
                            });
                        <?php endif; ?>
                    <?php endforeach; ?>
                }
            </script>
        <?php else: ?>
            <div class="alert alert-danger text-center">
                <h3>No se encontraron terrenos registrados</h3>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.6s">
                        <div >
                          <img class="img-fluid rounded" src="<?php echo base_url(); ?>/assets/publica/imagenes/valle.jpg">

                        </div>
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>/assets/publica/imagenes/limoso.jpg">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>/assets/publica/imagenes/arcilloso.jpg" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid rounded" src="<?php echo base_url(); ?>/assets/publica/imagenes/arena.jpg" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>

            <?php if ($listadoServicios): ?>
                <?php foreach ($listadoServicios->result() as $filaTemporal): ?>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                        <h1 class="mb-4">
                            <?php echo $filaTemporal->titulo_ser; ?>
                        </h1>
                        <p class="mb-4">
                      Utilizando tecnología de vanguardia, brindamos un sólido respaldo a la comunidad agrícola del cantón Latacunga.
                        </p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="<?php echo base_url(); ?>/assets/publica/imagenes/new-service.png"style="max-height: 70px;" alt="">
                                <h5 class="mb-3">
                                  Servicios Especializados

                                </h5>
                                <span>
                                    Enfocados en el beneficio de la comunidad
                                </span>
                            </div>
                            <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="<?php echo base_url(); ?>/assets/publica/imagenes/new-product.png" style="max-height: 70px;" alt="">

                                <h5 class="mb-3">
                                    Productos de Alta Calidad
                                </h5>
                                <span>
                                  Garantizados por nuestra selección de suelos de primera calidad.
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <?php if ($listadoExperiencias): ?>
                <?php foreach ($listadoExperiencias->result() as $filaTemporal): ?>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

          <p class="section-description bg-white text-start text-dark pe-3">

            <strong>¡NUESTRA VENTAJA COMPETITIVA! </strong><br>
<br>
            <strong>Compromiso con la comunidad:</strong><br>
            <span style="color: black;">Establecemos estrechos lazos con la población, trabajando de la mano con ellos para brindar soluciones.</span><br><br>
            <strong>Innovación tecnológica al servicio de la comunidad:</strong><br>
            <span style="color: black;">Desarrollamos proyectos tecnológicos innovadores, diseñados pensando en las necesidades de la comunidad.</span>
          </p>
        </div>


                <?php endforeach; ?>
            <?php endif; ?>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center collage-item collage-item-1"
                                style="background: #563103; padding: 2%;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>/assets/publica/imagenes/arduino.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center collage-item collage-item-2"
                                style="background: #563103; padding: 2%;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>/assets/publica/imagenes/ardu.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center collage-item collage-item-3"
                                style="background: #563103; padding: 2%;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>/assets/publica/imagenes/sistemas4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center collage-item collage-item-4"
                                style="background: #563103; padding: 2%;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>/assets/publica/imagenes/ras.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features End -->
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Contador de Visitas</h5>
        <p class="card-text contador"><?php echo $contador; ?></p>
    </div>
</div>
    <!-- Testimonial End -->

    <!-- Copyright Start -->
    <div class="container-fluid" style="background-color: #563103; color: #FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-5 mb-md-0">
                    <br>
                    <span >&copy; Todos los derechos reservados.</span> <br><br><br>
                    <br>
                </div>
                <div class="col-md-6 text-center text-md-end">

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/parallax/parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/publica/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>/assets/publica/js/main.js"></script>
</body>

</html>
