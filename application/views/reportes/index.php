<?php
ob_start();

?>

<!DOCTYPE html>
<html lang="es dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
  <body>
    <div class="text-center">
      <h2>Certificado de Medicion </h2>
    </div>
    <div class="">
      <h4>Datos de propietario </h4>
    </div>
    <?php if ($listadoMediciones): ?>
      <?php foreach ($listadoMediciones->result() as $filaTemporal): ?>
        <div class="row">
          <div class="col-md-12">
            <div class="text-dark">
              <b> Numero de Registro: </b>
              <?php echo $filaTemporal->numeroRegistro_ter; ?>
              <br>
            </div>
            <div class="text-dark">
              <b> Identificacion: </b>
              <?php echo $filaTemporal->identificacion_pro; ?>
              <br>
            </div>
            <div class="text-dark">
              <b> Apellidos: </b>
              <?php echo $filaTemporal->apellido_pro; ?>
              <br>
            </div>
            <div class="text-dark">
              <b> Nombres: </b>
              <?php echo $filaTemporal->nombre_pro; ?>
              <br>
            </div>
            <div class="text-dark">
              <b> Parroquia: </b>
              <?php echo $filaTemporal->nombre_par; ?>
              <br>
            </div>
            <div class="text-dark">
              <b> Barrio: </b>
              <?php echo $filaTemporal->nombre_bar; ?>
              <br>
            </div>
          </div>
        </div>
        <br><br>
        <div class="">
          <h4>Datos de la Medicion</h4>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th class="text-center">Temperatura</th>
                          <th class="text-center">Humedad</th>
                          <th class="text-center">Oxigeno</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                            <?php echo $filaTemporal->temperatura_med; ?>°C
                        </td>
                        <td class="text-center">
                            <?php echo $filaTemporal->humedad_med; ?>%
                        </td>
                        <td class="text-center">
                            <?php if ($filaTemporal->oxigeno_med>='25'): ?>
                                <?php echo $filaTemporal->oxigeno_med; ?>%<br>
                                <span class="">SE IDENTIFICO UN GAS QUE PUEDE SER PERJUDICIAL</span>
                             <?php else: ?>
                                <span class="">NORMAL</span>
                             <?php endif; ?>
                        </td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
        <br><br>
        <div class="">
          <h4>Observaciones</h4>
        </div>
        <p>Este terreno <b>es APTO</b> para el cultivo de <b><?php echo $filaTemporal->nombre_produc; ?></b> </p>
      <?php endforeach; ?>
    <?php endif; ?>

    <br><br><br><br><br><br><br><br><br>
    <div class="text-center">
      ----------------------------------------
      <h5>Firma</h5>
    </div>

  </body>
</html>

<?php
$html=ob_get_clean();

require_once('application/libraries/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');

$dompdf->render();
$dompdf->stream("archivo_.pdf", array("Attachment" => false));

?>
