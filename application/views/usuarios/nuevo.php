<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2" >NUEVO USUARIO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="<?php echo site_url(); ?>/usuarios/guardarUsuarios" method="post" id="frm_nuevo_usuario">
            <div class="row">
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>IDENTIFICACION</b></label>
                <input class="form-control" type="text" name="identificacion_usu" id="identificacion_usu" placeholder="Por favor Ingrese la identificacion">
                <br>
                <label class="text-dark" for=""><b>APELLIDOS</b></label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="apellido_usu" id="apellido_usu" placeholder="Por favor Ingrese el apellido">
                <br>
                <label class="text-dark" for=""> <b>NOMBRES</b> </label>
                <input class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="nombre_usu" id="nombre_usu" placeholder="Por favor Ingrese el nombre">
                <br>
                <label class="text-dark" for=""> <b>NUMERO DE TELEFONO</b> </label>
                <input class="form-control" type="number" name="telefono_usu" id="telefono_usu" placeholder="Por favor Ingrese el numero de telefono">
                <br>
                <label class="text-dark" for=""> <b>DIRECCION</b> </label>
                <textarea style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="direccion_usu" id="direccion_usu"class="form-control"rows="4" cols="80"></textarea><br><br>
              </div>
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>CORREO ELECTRONICO</b> </label>
                <input class="form-control"  type="email" name="email_usu" id="email_usu" placeholder="Por favor Ingrese el correo electronico">
                <br>
                <label class="text-dark" for=""> <b>CONTRASEÑA</b> </label>
                <input class="form-control"  type="password" name="password_usu" id="password_usu" placeholder="Por favor Ingrese la contraseña">
                <br>
                <label class="text-dark" for=""> <b>REPITA LA CONTRASEÑA</b> </label>
                <input class="form-control"  type="password" name="password" id="password" placeholder="Por favor Ingrese la contraseña">
                <br>
                <label class="text-dark" for=""> <b>PERFIL</b> </label>
                 <br>
                <select class="form-control" name="perfil_usu" id="perfil_usu">
                  <option value="">--- Seleccione una opción ---</option>
                  <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                  <option value="AGRICULTOR">AGRICULTOR</option>
                  <option value="COMPRADOR">COMPRADOR</option>
                </select>
                <br>
                <?php date_default_timezone_set('America/Guayaquil');
                  $fecha_actual=date("Y-m-d H:i:s",time());
                ?>
                <label class="text-dark" for=""> <b>FECHA CREACION</b> </label>
                <input class="form-control"  type="text" name="fecha_creacion_usu" id="fecha_creacion_usu" value="<?= $fecha_actual; ?>" readonly>
                <br>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-success">
                <i class="fa fa-save"> </i>
                GUARDAR
              </button>
              &nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/usuarios/index"
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
    $("#frm_nuevo_usuario").validate({
      rules:{
        identificacion_usu:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        apellido_usu:{
          letras:true,
          required:true
        },
        nombre_usu:{
          letras:true,
          required:true
        },
        email_usu:{
          email:true,
          required:true
        },
        telefono_usu:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        direccion_usu:{
          required:true
        },
        password_usu:{
          required:true,
          minlength:8,
          maxlength:10
        },
        password:{
          required:true,
          equalTo:"#password_usu"
        },
        perfil_usu:{
          required:true
        }
      },
      messages:{
        identificacion_usu:{
          required:"Por favor ingrese el número de cédula",
          minlength:"La cédula debe tener mínimo 10 digitos",
          maxlength:"La cédula debe tener máximo 10 digitos",
          digits:"La cédula solo acepta números"
        },
        apellido_usu:{
          letras:"Apellido Incorrecto",
          required:"Por favor ingrese el apellido"
        },
        nombre_usu:{
          letras:"Nombre Incorrecto",
          required:"Por favor ingrese el Nombre"
        },
        email_usu:{
          email:"Correo incorrecto",
          required:"Por favor ingrese el correo"
        },
        telefono_usu:{
          required:"Por favor ingrese el número de telefono",
          minlength:"El telefono debe tener mínimo 10 digitos",
          maxlength:"El telefono debe tener máximo 10 digitos",
          digits:"El numero de telefono solo acepta números"
        },
        direccion_usu:{
          required:"Por favor ingrese una direccion valida"
        },
        password_usu:{
          required:"Por favor ingrese una contraseña",
          minlength:"La contraseña debe tener mínimo 8 digitos",
          maxlength:"La contraseña debe tener máximo 10 digitos"
        },
        password:{
          required:"Por favor ingrese una contraseña",
          equalTo:"La ontraseña no coincide"
        },
        perfil_usu:{
          required:"Seleccione uno por favor"
        }
      }
    });
</script>
