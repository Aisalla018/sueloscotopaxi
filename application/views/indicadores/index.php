<?php
$ci=&get_instance();
// Usuarios
$ci->load->model("usuario");
$ci->load->model("terreno");
$ci->load->model("solicitud");
$totalUsuarios=0;
$totalUsuariosActivos=0;
$totalUsuariosInactivos=0;

$usuariosActivos=$ci->usuario->obtenerInidicadoresPorEstado('1');
$UsuariosInactivos=$ci->usuario->obtenerInidicadoresPorEstado('0');

if ($usuariosActivos) {
  $totalUsuariosActivos=sizeof($usuariosActivos->result());
}
if ($UsuariosInactivos) {
  $totalUsuariosInactivos=sizeof($UsuariosInactivos->result());
}
$totalUsuarios=$totalUsuariosActivos+$totalUsuariosInactivos;

// Terrenos
$ci->load->model("usuario");
$totalTerrenos=0;
$totalTerrenosActivos=0;
$totalTerrenosInactivos=0;

$terrenosActivos=$ci->terreno->obtenerInidicadoresPorEstado('1');
$terrenosInactivos=$ci->terreno->obtenerInidicadoresPorEstado('0');

if ($terrenosActivos) {
  $totalTerrenosActivos=sizeof($terrenosActivos->result());
}
if ($terrenosInactivos) {
  $totalTerrenosInactivos=sizeof($terrenosInactivos->result());
}
$totalTerrenos=$totalTerrenosActivos+$totalTerrenosInactivos;

// Parroquias
$ci->load->model("parroquia");
$totalParroquias=0;
$totalParroquiasActivos=0;
$totalParroquiasInactivos=0;

$parroquiasActivos=$ci->parroquia->obtenerInidicadoresPorEstado('1');
$parroquiasInactivos=$ci->parroquia->obtenerInidicadoresPorEstado('0');

if ($parroquiasActivos) {
  $totalParroquiasActivos=sizeof($parroquiasActivos->result());
}
if ($parroquiasInactivos) {
  $totalParroquiasInactivos=sizeof($parroquiasInactivos->result());
}
$totalParroquias=$totalParroquiasInactivos+$totalParroquiasActivos;

// Barrios
$ci->load->model("barrio");
$totalBarrios=0;
$totalBarriosActivos=0;
$totalBarriosInactivos=0;

$barriosActivos=$ci->barrio->obtenerInidicadoresPorEstado('1');
$barriosInactivos=$ci->barrio->obtenerInidicadoresPorEstado('0');

if ($barriosActivos) {
  $totalBarriosActivos=sizeof($barriosActivos->result());
}
if ($barriosInactivos) {
  $totalBarriosInactivos=sizeof($barriosInactivos->result());
}
$totalBarrios=$totalBarriosInactivos+$totalBarriosActivos;
?>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h2 class="text-dark font-weight-bold mb-2" style="font-family: 'Times New Roman', Times, serif;">Indicadores</h2>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
<!-- <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <center>
    <div class="row">
      <div class="col-md-4">
        <div class="card border-dark mb-3" style="max-width: 400px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title"style="font-family: 'Times New Roman', Times, serif;"><b>Usuarios</b> </h5>
                <h4>
                  <?php echo "$totalUsuariosActivos" ?>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-12">
  <br>
  <img src="<?php echo base_url(); ?>/assets/icons/users.png" class="img-fluid rounded-start" alt="..." style="max-width: 100px;">
</div>


        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-dark mb-5" style="max-width: 400px;">
          <div class="row g-3">
            <div class="col-md-12">
    <br>
    <br>
    <img src="<?php echo base_url(); ?>/assets/icons/terreno.png" class="img-fluid rounded-start smaller-image" alt="...">
  </div>

  <style>
    .smaller-image {
      max-width: 100px; /* Puedes ajustar este valor para hacer la imagen más pequeña */
    }
  </style>

            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title"style="font-family: 'Times New Roman', Times, serif;"> <b>Terrenos</b></h5>

                <h4>
                  <?php echo "$totalTerrenos" ?>
                </h4>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card border-dark mb-3" style="max-width: 400px;">
          <div class="row g-0">
            <div class="col-md-12">
              <br>
              <img src="<?php echo base_url(); ?>/assets/icons/tierra.png" class="img-fluid rounded-start" alt="..."style="max-width: 99px;">
            </div>
            <div class="col-md-12">
              <div class="card-body"><br>
                <h5 class="card-title"style="font-family: 'Times New Roman', Times, serif;"><b>Productos</b> </h5>
                <h4>
                  <?php echo "$totalUsuarios" ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-dark mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <br>
              <img src="<?php echo base_url(); ?>/assets/icons/parroquias.png" class="img-fluid rounded-start" alt="..."style="max-width: 110px;">
            </div>
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title"style="font-family: 'Times New Roman', Times, serif;"><b>Parroquias</b> </h5>
                <h4>
                  <?php echo "$totalParroquias" ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-dark mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <br>
              <img src="<?php echo base_url(); ?>/assets/icons/homes.png" class="img-fluid rounded-start"  alt="..."style="max-width: 105px;">
            </div>
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title"style="font-family: 'Times New Roman', Times, serif;"> <b>Barrios</b></h5>
                <h4>
                  <?php echo "$totalBarrios" ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </center>
  </div>
  <div class="col-md-1"></div>
</div> -->

<?php
$con = new mysqli("localhost","sistemas","Sistemas-2024","agricult_prueba");
$sql = "SELECT COUNT(nombre_par) AS total, nombre_par FROM terreno, parroquia
        where parroquia.id_par=terreno.fk_id_par
        GROUP BY nombre_par HAVING COUNT(nombre_par)";
$query = $con->query($sql);
$data1 = array();
while($r = $query->fetch_object()){
    $data1[]=$r;
}
?>

<?php
$con = new mysqli("localhost","sistemas","Sistemas-2024","agricult_prueba");
$sql1 = "SELECT count(nombre_produc) as total ,nombre_produc from terreno, producto
        where producto.id_produc=terreno.fk_id_produc
        group by nombre_produc HAVING count(nombre_produc)";
$query1 = $con->query($sql1);
$data = array();
while($r1 = $query1->fetch_object()){
    $data[]=$r1;
}
?>

<?php
$con = new mysqli("localhost","sistemas","Sistemas-2024","agricult_prueba");
$sql2 = "SELECT COUNT(nombre_bar) AS total, nombre_bar FROM terreno, barrio
        where barrio.id_bar=terreno.fk_id_bar
        GROUP BY nombre_bar HAVING COUNT(nombre_bar)";
$query2 = $con->query($sql2);
$data2 = array();
while($r2 = $query2->fetch_object()){
    $data2[]=$r2;
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" ></script>
<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="row">
      <div >

        <br>
        <?php if ($listadoSolicitudes): ?>
          <div class="table-responsive">

          </div>
        <?php else: ?>
          <div class="alert alert-danger text-center">
            <h3>No se encontraron solicitudes registradas</h3>
          </div>
        <?php endif; ?>
      </div>
      <br>
<!-- ///////////////////11111/////////////// -->


      <!------------------grafico11-------------------------------------->
      <div class="col-md-3">
        <div class="col-md-1"></div>
<div class="col-md-1"></div>

        <br>
        <canvas id="chart2" style="width:100%;" height="200%"></canvas>
        <script>
        var ctx2 = document.getElementById("chart2");
        var data2 = {
          labels: [
            <?php foreach($data as $d): ?>
              "<?php echo $d->nombre_produc ?>",
            <?php endforeach; ?>
          ],
          datasets: [{
            label: 'PRODUCTOS',
            data: [
              <?php foreach($data as $d): ?>
                <?php echo $d->total; ?>,
              <?php endforeach; ?>
            ],
            backgroundColor: [
              "#8B4513",
              "#50A8E5",
              "#6CD44D",
              "#A52A2A",
              "#DE50E5",//rosado
              "#4B0082",
              "#50A8E5",
              "#800080",
              "#A52A2A",
              "#696969",
              "#4B0082",
              "#D2691E",
              "#FF8C00"
            ]
          }]
        };
        var options2 = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        };
        var chart2 = new Chart(ctx2, {
          type: 'pie',
          data: data2,
          options: options2
        });
        </script>
        <br>

      </div>


      <div class="table-responsive col-md-6" >

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">SUELO</th>
              <th class="text-center">CANTIDAD</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $d): ?>
              <tr>
                <td class="text-center"><?php echo $d->nombre_produc; ?></td>
                <td class="text-center"><?php echo $d->total; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <br>
<!-- ///////////222///////////// -->
  <div class="row">

          <div class="table-responsive  col-md-6">

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">PARROQUIA</th>
                  <th class="text-centr">CANTIDAD</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data1 as $d): ?>
                  <tr>
                    <td class="text-center"><?php echo $d->nombre_par; ?></td>
                    <td class="text-center"><?php echo $d->total; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <div class="col-md-10">
              <div class="text-center">
                <h4> <b>TERRENOS POR PARROQUIAS</b> </h4>
              </div>
              <br>
              <canvas id="chart1" style="width:100%;" height="400%"></canvas>
              <script>
              var ctx1 = document.getElementById("chart1");
              var data1 = {
                labels: [
                  <?php foreach($data1 as $d): ?>
                    "<?php echo $d->nombre_par ?>",
                  <?php endforeach; ?>
                ],
                datasets: [{
                  label: 'TERRENOS/PARROQUIAS',
                  data: [
                    <?php foreach($data1 as $d): ?>
                      <?php echo $d->total; ?>,
                    <?php endforeach; ?>
                  ],
                  backgroundColor: [
                    "#8B4513",
                    "#2E97F5",
                    "#800080",
                    "#A52A2A",
                    "#696969",
                    "#E972EC",
                    "#D2691E",
                    "#808080",
                    "#45F148",
                    "#F9E79F",
                    "#F3F056",
                    "#4B0082",
                    "#EDBB99",
                    "#FF8C00"
                  ]
                }]
              };
              var options1 = {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero:true
                    }
                  }]
                }
              };
              var chart1 = new Chart(ctx1, {
                type: 'pie',
                data: data1,
                options: options1
              });
              </script>
              <br>

            </div>

          </div>



      <div class="col-md-6">
        <div class="text-center">
          <h4> <b>TERRENOS POR BARRIOS</b> </h4>
        </div>
        <br>
        <canvas id="chart3" style="width:100%;" height="425%"></canvas>
        <script>
        var ctx3 = document.getElementById("chart3");
        var data3 = {
          labels: [
            <?php foreach($data2 as $d): ?>
              "<?php echo $d->nombre_bar ?>",
            <?php endforeach; ?>
          ],
          datasets: [{
            label: 'TERRRENOS/BARRIOS',
            data: [
              <?php foreach($data2 as $d): ?>
                <?php echo $d->total; ?>,
              <?php endforeach; ?>
            ],
            backgroundColor: [
              "#8B4513",
                "#AEF726",//verde claro
              "#800080",
              "#A52A2A",
              "#696969",
              "#4B0082",
              "#D2691E",
              "#F944DB",
              "#28B463",
              "#4581F1",
              "#F1948A",
              "#5DADE2",
              "#DAF7A6",
              "#F4D03F"
            ]
          }]
        };
        var options3 = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        };
        var chart3 = new Chart(ctx3, {
          type: 'pie',
          data: data3,
          options: options3
        });
        </script>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">BARRIO</th>
                <th class="text-center">CANTIDAD</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data2 as $d): ?>
                <tr>
                  <td class="text-center"><?php echo $d->nombre_bar; ?></td>
                  <td class="text-center"><?php echo $d->total; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
