<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h2 class="text-dark font-weight-bold mb-2" >EDITAR USUARIO</h2>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="<?php echo site_url(); ?>/usuarios/procesarActualizacion" method="post" id="frm_editar_usuario">
            <div class="row">
              <input type="hidden" name="id_usu" id="id_usu" value="<?php echo $usuario->id_usu; ?>">
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>IDENTIFICACION</b></label>
                <input class="form-control"  type="text" name="identificacion_usu" id="identificacion_usu" value="<?php echo $usuario->identificacion_usu; ?>" placeholder="Por favor Ingrese la identificacion">
                <br>
                <label class="text-dark" for=""><b>APELLIDOS</b></label>
                <input class="form-control"  type="text" name="apellido_usu" id="apellido_usu" value="<?php echo $usuario->apellido_usu; ?>" placeholder="Por favor Ingrese el apellido">
                <br>
                <label class="text-dark" for=""> <b>NOMBRES</b> </label>
                <input class="form-control"  type="text" name="nombre_usu" id="nombre_usu" value="<?php echo $usuario->nombre_usu; ?>" placeholder="Por favor Ingrese el nombre">
                <br>
                <label class="text-dark" for=""> <b>NUMERO DE TELEFONO</b> </label>
                <input class="form-control"  type="number" name="telefono_usu" id="telefono_usu" value="<?php echo $usuario->telefono_usu; ?>" placeholder="Por favor Ingrese el numero de telefono">
                <br>
                <label class="text-dark" for=""> <b>DIRECCION</b> </label>
                <textarea name="direccion_usu" id="direccion_usu"class="form-control" value=""rows="5" cols="80"><?php echo $usuario->direccion_usu; ?></textarea><br><br>
              </div>
              <div class="col-md-6">
                <label class="text-dark" for=""> <b>CORREO ELECTRONICO</b> </label>
                <input class="form-control"  type="email" name="email_usu" id="email_usu" value="<?php echo $usuario->email_usu; ?>" placeholder="Por favor Ingrese el correo electronico">
                <br>
                <label class="text-dark" for=""> <b>CONTRASEÑA</b> </label>
                <input class="form-control"  type="password" name="password_usu" id="password_usu" value="<?php echo $usuario->password_usu; ?>" placeholder="Por favor Ingrese la contraseña">
                <br>
                <label class="text-dark" for=""> <b>PERFIL</b> </label><br>
                <select class="form-select" name="perfil_usu" id="perfil_usu">
                  <option value="">--- Seleccione una opción ---</option>
                  <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                  <option value="AGRICULTOR">AGRICULTOR</option>
                  <option value="COMPRADOR">COMPRADOR</option>
                </select>
                <br>
                <label class="text-dark" for=""> <b>ESTADO</b> </label><br>
                <select class="form-select" name="estado_usu" id="estado_usu">
                  <option value="">--- Seleccione una opción ---</option>
                  <option value="1">ACTIVO</option>
                  <option value="0">INACTIVO</option>
                </select>
                <br>
                <label class="text-dark" for=""> <b>FECHA CREACION</b> </label>
                <input class="form-control"  type="text" name="fecha_creacion_usu" id="fecha_creacion_usu" value="<?php echo $usuario->fecha_creacion_usu; ?>" readonly>
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
    $("#frm_editar_usuario").validate({
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
        }
      }
    });
</script>

<script type="text/javascript">
   $("#perfil_usu").val("<?php echo $usuario->perfil_usu; ?>");
   $("#estado_usu").val("<?php echo $usuario->estado_usu; ?>");
</script>
