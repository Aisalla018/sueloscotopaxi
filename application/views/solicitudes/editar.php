<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2" >EDITAR SOLICITUD</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="<?php echo site_url(); ?>/solicitudes/procesarActualizacion" method="post" id="frm_editar">
            <div class="row">
              <input type="hidden" name="id_sol" id="id_sol" value="<?php echo $solicitud->id_sol; ?>">
              <div class="col-md-6">
                <div class="form-group">
                    <label class="text-dark" for=""> <b>APELLIDOS</b></label>
                  <input type="text" class="form-control form-control-lg" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellido_sol" id="apellido_sol" value="<?php echo $solicitud->apellido_sol; ?>" placeholder="Apellidos" required>
                  <br>
                </div>
                <div class="form-group">
                    <label class="text-dark" for=""> <b>TELEFONO DE CONTACTO</b></label>
                  <input type="number" class="form-control form-control-lg" name="telefono_sol" id="telefono_sol" placeholder="Telefono" value="<?php echo $solicitud->telefono_sol; ?>" required>
                  <br>
                </div>
                <div class="form-group">
                  <?php date_default_timezone_set('America/Guayaquil');
                    $fecha_actual=date("Y-m-d H:i:s",time());
                  ?>
                  <label class="text-dark" for=""> <b>FECHA CREACION</b> </label>
                  <input class="form-control"  type="text" name="fecha_ingreso_sol" id="fecha_ingreso_sol" value="<?php echo $solicitud->fecha_ingreso_sol; ?>" readonly>
                  <br>
                </div>
              </div>
              <div class="col-md-6">

                <div class="form-group">
                    <label class="text-dark" for=""> <b>NOMBRES</b></label>
                  <input type="text" class="form-control form-control-lg" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre_sol" id="nombre_sol" value="<?php echo $solicitud->nombre_sol; ?>" placeholder="Nombres" required>
                  <br>
                </div>
                <div class="form-group">
                    <label class="text-dark" for=""> <b>DESCRIPCION</b></label>
                  <textarea style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="descripcion_sol" id="descripcion_sol"class="form-control"rows="4" cols="80"><?php echo $solicitud->descripcion_sol; ?></textarea>
                  <br>
                </div>
                <div class="form-group" >
                  <label class="text-dark" for=""> <b>ESTADO</b></label>
                  <select class="form-select" name="estado_sol" id="estado_sol">
                    <option value="">--- Seleccione una opción ---</option>
                    <option value="1">INGRESADO</option>
                    <option value="0">ATENDIDO</option>
                  </select>
                  <br>
                </div>
                <div class="form-group" >
                  <?php date_default_timezone_set('America/Guayaquil');
                    $fecha_actual=date("Y-m-d H:i:s",time());
                  ?>
                  <input class="form-control"  type="hidden" name="fecha_ingreso_sol" id="fecha_ingreso_sol" value="<?= $fecha_actual; ?>" readonly>
                  <br>
                </div>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
              </button>
              &nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/solicitudes/index"
                class="btn btn-danger">
                <i class="fa fa-times"> </i>
                CANCELAR
              </a>
          </form>
        </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

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
          minlength:"La cédula debe tener mínimo 10 digitos",
          maxlength:"La cédula debe tener máximo 10 digitos",
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
          required:"Por favor ingrese el número de telefono",
          minlength:"El telefono debe tener mínimo 10 digitos",
          maxlength:"El telefono debe tener máximo 10 digitos",
          digits:"El numero de telefono solo acepta números"
        },
        direccion_sol:{
          required:"Por favor ingrese una direccion valida"
        },
        descripcion_sol:{
          letras:"Descripcion Incorrecta",
          required:"Por favor ingrese una descripcion"
        }
      }
    });
</script>

<script type="text/javascript">
   $("#estado_sol").val("<?php echo $solicitud->estado_sol; ?>");
</script>
