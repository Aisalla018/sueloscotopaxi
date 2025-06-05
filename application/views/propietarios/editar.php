<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2" >NUEVO PROPIETARIO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="<?php echo site_url(); ?>/propietarios/procesarActualizacion" method="post" id="frm_editar_propietario">
            <div class="row">
              <input type="hidden" name="id_pro" id="id_pro" value="<?php echo $propietario->id_pro; ?>">
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>IDENTIFICACION</b></label>
                <input class="form-control" type="text" name="identificacion_pro" id="identificacion_pro" value="<?php echo $propietario->identificacion_pro; ?>" placeholder="POR FAVOR INGRESE LA IDENTIFICACION">
                <br>
                <label class="text-dark" for=""><b>APELLIDOS</b></label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" value="<?php echo $propietario->apellido_pro; ?>" name="apellido_pro" id="apellido_pro" placeholder="Por favor Ingrese el apellido">
                <br>
                <label class="text-dark" for=""> <b>CORREO ELECTRONICO</b> </label>
                <input class="form-control"  type="email" name="email_pro" id="email_pro" value="<?php echo $propietario->email_pro; ?>" placeholder="POR FAVOR INGRESE EL CORREO">
                <br>
                <label class="text-dark" for=""> <b>ESTADO</b> </label><br>
                <select class="form-select" name="estado_pro" id="estado_pro">
                  <option value="">--- Seleccione una opción ---</option>
                  <option value="1">ACTIVO</option>
                  <option value="0">INACTIVO</option>
                </select>
                <br>
              </div>
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>NUMERO DE TELEFONO</b> </label>
                <input class="form-control" type="number" name="telefono_pro" id="telefono_pro" value="<?php echo $propietario->telefono_pro; ?>" placeholder="POR FAVOR INGRESE EL NUMERO DE TELEFONO">
                <br>
                <label class="text-dark" for=""> <b>NOMBRES</b> </label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" value="<?php echo $propietario->nombre_pro; ?>" name="nombre_pro" id="nombre_pro" placeholder="Por favor Ingrese el nombre">
                <br>
                <label class="text-dark" for=""> <b>FECHA CREACION</b> </label>
                <input class="form-control"  type="text" name="fecha_creacion_pro" id="fecha_creacion_pro" value="<?php echo $propietario->fecha_creacion_pro; ?>" readonly>
                <br>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
              </button>
              &nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/propietarios/index"
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
    $("#frm_editar_propietario").validate({
      rules:{
        identificacion_pro:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        apellido_pro:{
          letras:true,
          required:true
        },
        nombre_pro:{
          letras:true,
          required:true
        },
        email_pro:{
          email:true,
          required:true
        },
        telefono_pro:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        direccion_pro:{
          required:true
        }
      },
      messages:{
        identificacion_pro:{
          required:"Por favor ingrese el número de cédula",
          minlength:"La cédula debe tener mínimo 10 digitos",
          maxlength:"La cédula debe tener máximo 10 digitos",
          digits:"La cédula solo acepta números"
        },
        apellido_pro:{
          letras:"Apellido Incorrecto",
          required:"Por favor ingrese el apellido"
        },
        nombre_pro:{
          letras:"Nombre Incorrecto",
          required:"Por favor ingrese el Nombre"
        },
        email_pro:{
          email:"Correo incorrecto",
          required:"Por favor ingrese el correo"
        },
        telefono_pro:{
          required:"Por favor ingrese el número de telefono",
          minlength:"El telefono debe tener mínimo 10 digitos",
          maxlength:"El telefono debe tener máximo 10 digitos",
          digits:"El numero de telefono solo acepta números"
        },
        direccion_pro:{
          required:"Por favor ingrese una direccion valida"
        }
      }
    });
</script>

<script type="text/javascript">
   $("#estado_pro").val("<?php echo $propietario->estado_pro; ?>");
</script>
