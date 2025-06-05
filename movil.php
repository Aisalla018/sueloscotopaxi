<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');

function consultas($tabla, $campo, $texto_condicion)
{
    require "conecter_movil.php";
    $sentecia = "SELECT $campo from $tabla $texto_condicion;";
    $sql = $pdo->query($sentecia);
    return $sql;
}

function update_table($tabla, $campo_valor, $texto)
{
    require "conecter_movil.php";
    $sentecia = "UPDATE $tabla SET $campo_valor   $texto";

    $sql = $pdo->query($sentecia);
    return $sql;
}

function insertar($tabla, $campo, $valor)
{
    include("conecter_movil.php");
    $sentecia = "INSERT INTO  $tabla ($campo) values ($valor);";
    $sql = $pdo->query($sentecia);
    return $sql;
}
function operacion($texto)
{
    require "conecter_movil.php";
    $sentecia = " $texto;";

    $sql = $pdo->query($sentecia);
    return $sql;
}
function insertarP($tabla, $campo, $valor)
{
    $sentecia = "INSERT INTO  $tabla ($campo) values ($valor);";

    return $sentecia;
}
$dato = $_REQUEST["dato"];
switch ($dato) {
    case 'login':
        echo login($_REQUEST["user"], $_REQUEST["pass"]);
        break;
    case 'propetario_r':
        echo propetario_r($_REQUEST["identificacion_pro"], $_REQUEST["apellido_pro"], $_REQUEST["nombre_pro"], $_REQUEST["email_pro"], $_REQUEST["telefono_pro"]);
        break;
    case 'propietario':
        echo propietario();
        break; 
    case 'terreno':
        echo terreno();
        break;
    case 'spinnerpropietario':
        echo spinner_propietario();
        break;
    case 'spinnerparroquia':
        echo spinner_parroquia();
        break;
    case "spinnerbarrio":
        $par=$_GET["par"];
       
       echo spinner_barrio($par);
        break;
    case 'spinnerproducion':
        echo spinner_producion();
        break;
        case 'spinnertiempo':
            echo spinner_tiempo();
            break;
            case 'terreno_r':
                $id_propietario=$_GET["id_propietario"];
                $id_parroquia=$_GET["id_parroquia"];
                $id_barrio=$_GET["id_barrio"];
                $id_produccion=$_GET["id_produccion"];
                $lng_ter=$_GET["lng_ter"];
                $lat_ters=$_GET["lat_ters"];
                $descripcion_ters=$_GET["descripcion_ters"];
                $id_tiempo=$_GET["id_tiempo"];
            
           echo terreno_r($id_propietario,$id_parroquia,$id_barrio,$id_produccion,$lng_ter,$lat_ters,$descripcion_ters,$id_tiempo);
                break;
                case 'medicion':
                    echo medicion($_GET["id_propietario"],$_GET["id_terreno"]);
                    break;
                    case 'spinnerterreno':
                       echo spinner_terreno($_GET["id_propietario"]);
                        break;
                        case 'medicion_r':
                            echo medicion_r($_GET["id_terreno"],
                            $_GET["temperatura_med"]    ,
                            $_GET["humedad_med"]                    ,
                            $_GET["oxigeno_med"],
                            $_GET["observacion_med"]
                        );
                            break;
 
}
function login($identificacion_usu, $password_usu)
{
    $where = "where identificacion_usu='$identificacion_usu' and password_usu='$password_usu'";
    $tabla = "usuario";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    $estado = true;
    $nombre_usu = "";
    $apellido_usu = "";
    if ($contar === 0) {
        $estado = false;
    }
    while ($row = $sql->fetch()) {
        $nombre_usu = $row["nombre_usu"];
        $apellido_usu = $row["apellido_usu"];
    }
    array_push($lista_array, array("estado" => $estado, "nombre_usu" => $nombre_usu, "apellido_usu" => $apellido_usu));
    return json_encode($lista_array);
}

function propetario_r($identificacion_pro, $apellido_pro, $nombre_pro, $email_pro, $telefono_pro) //,$apellido,$nombre)
{
 
    $estado = "Save";
    $where = "where identificacion_pro='$identificacion_pro'";
    $tabla = "propietario";
    $campo = "id_pro,identificacion_pro,apellido_pro,nombre_pro,email_pro,telefono_pro,estado_pro,fecha_creacion_pro";
    $valor = "null,'$identificacion_pro','$apellido_pro','$nombre_pro','$email_pro','$telefono_pro','1',now()";

    $actualizado = "apellido_pro='$apellido_pro',nombre_pro='$nombre_pro',email_pro='$email_pro',telefono_pro='$telefono_pro'";
    $sql = consultas($tabla, "*", $where);
    $contar = $sql->rowCount();
    if ($contar > 0) {
        $estado = "Update";
        update_table("$tabla", "$actualizado", "$where");
    } else {
        insertar("$tabla", "$campo", "$valor");
    }
    $lista_array = array();


    array_push($lista_array, array("estado" => $estado));
    return json_encode($lista_array);
}
function tabla($tabla)
{
    
    $sql2 = "SHOW COLUMNS FROM $tabla";
    $sql = operacion($sql2);
    while ($row = $sql->fetch()) {
        echo "{$row[0]},";
    }
}
function terreno()
{
    $campo = "id_ter, numeroRegistro_ter, lat_ter, lng_ter, foto_ter, descripcion_ter, producto.nombre_produc, concat(propietario.nombre_pro,' ',propietario.apellido_pro) as propietario, parroquia.nombre_par, barrio.nombre_bar, fecha_creacion_ter
, tiempo_cosecha_ter, estado_ter";
    $where = "";
    $tabla = "terreno";
    $inner = "INNER JOIN propietario on propietario.id_pro=terreno.fk_id_pro
    INNER JOIN producto on producto.id_produc=terreno.fk_id_produc
    INNER JOIN barrio on barrio.id_bar=terreno.fk_id_bar
    INNER JOIN parroquia on parroquia.id_par=terreno.fk_id_par";
    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where $inner  ORDER BY terreno.id_ter ASC");
    
    while ($row = $sql->fetch()) { 
       

        array_push($lista_array, array("mostrar" => $row["id_ter"]."º Coordenas:" . $row["lat_ter"] . "," . $row["lng_ter"] . " ;" . $row["propietario"] . " terreno de  " . $row["nombre_produc"] . " en " . $row["descripcion_ter"] . " del barrio " . $row["nombre_bar"]));
    }

    return json_encode($lista_array);
}
function propietario()
{
    $where = "";
    $tabla = "propietario";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    $estado = true;
    $nombre_usu = "";
    $apellido_usu = "";
    if ($contar === 0) {
        $estado = false;
    }
    while ($row = $sql->fetch()) {


        array_push($lista_array, array("mostrar" => "Cedula:" . $row["identificacion_pro"] . " Nombre:" . $row["apellido_pro"] . " " . $row["nombre_pro"]));
    }

    return json_encode($lista_array);
}
function spinner_propietario()
{
    $where = "";
    $tabla = "propietario";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    while ($row = $sql->fetch()) {


        array_push($lista_array, array("mostrar" => $row["apellido_pro"] . " " . $row["nombre_pro"], "id_pro" => $row["id_pro"]));
    }

    return json_encode($lista_array);
}
function spinner_parroquia()
{
    $where = "";
    $tabla = "parroquia";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    $estado = true;
    $nombre_usu = "";
    $apellido_usu = "";
    if ($contar === 0) {
        $estado = false;
    }

    while ($row = $sql->fetch()) {


        array_push($lista_array, array("mostrar" => $row["nombre_par"], "id_par" => $row["id_par"]));
    }

    return json_encode($lista_array);
}

function spinner_barrio($fk_id_par)
{
    $where = "where  fk_id_par='$fk_id_par'";
    $tabla = "barrio";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    $estado = true;
    $nombre_usu = "";
    $apellido_usu = "";
    if ($contar === 0) {
        $estado = false;
    }

    while ($row = $sql->fetch()) {


        array_push($lista_array, array("mostrar" => $row["nombre_bar"], "id_bar" => $row["id_bar"]));
    }

    return json_encode($lista_array);
}
function spinner_producion()
{
    $where = "";
    $tabla = "producto";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    while ($row = $sql->fetch()) {
        array_push($lista_array, array("mostrar" => $row["nombre_produc"], "id_produc" => $row["id_produc"]));
    }

    return json_encode($lista_array);
}

function spinner_terreno($fk_id_pro)
{
    $where = "where terreno.fk_id_pro='$fk_id_pro'";
    $tabla = "terreno";
    $campo = "*";

    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$where");
    $contar = $sql->rowCount();
    while ($row = $sql->fetch()) {
        array_push($lista_array, array("mostrar" => $row["numeroRegistro_ter"], "id_ter" => $row["id_ter"]));
    }

    return json_encode($lista_array);
}

function spinner_tiempo()
{
    $lista_array = array();
for ($i=1; $i <=12 ; $i++) { 
     
    array_push($lista_array, array("mostrar" => $i ." meses", "id_tiempo" => "$i"));
}

 

    return json_encode($lista_array);
}
function terreno_r($id_propietario,$id_parroquia,$id_barrio,$id_produccion,$lng_ter,$lat_ters,$descripcion_ters,$id_tiempo) //,$apellido,$nombre)
{
 $numeroRegistro_ter=date("Yds").$id_propietario;
    $estado = "Save";
    $where = "where fk_id_produc='$id_propietario' and fk_id_produc='$id_produccion'";
    $tabla = "terreno";
    $campo = " id_ter, numeroRegistro_ter, lat_ter, lng_ter, foto_ter, descripcion_ter, fk_id_produc, fk_id_pro, fk_id_par, fk_id_bar, fecha_creacion_ter, tiempo_cosecha_ter, estado_ter, codigo_ter";
    $valor = " null,'$numeroRegistro_ter','$lat_ters','$lng_ter','','$descripcion_ters',
    '$id_produccion','$id_propietario','$id_parroquia','$id_barrio',now(),'$id_tiempo','1',''";

    $actualizado = "lat_ter='$lat_ters',lng_ter='$lng_ter',descripcion_ter='$descripcion_ters',fk_id_par='$id_parroquia',fk_id_bar='$id_barrio',fecha_creacion_ter=now(),tiempo_cosecha_ter='$id_tiempo'";
    $sql = consultas($tabla, "*", $where);
    $contar = $sql->rowCount();
    if ($contar > 0) {
        $estado = "Update";
       update_table("$tabla", "$actualizado", "$where");
    } else {
       insertar("$tabla", "$campo", "$valor");
    }
    $lista_array = array();


    array_push($lista_array, array("estado" => $estado));
    return json_encode($lista_array);
}



function medicion($id_pro,$id_ter)
{
    $where = "WHERE propietario.id_pro='$id_pro'
    and 
    terreno.id_ter='$id_ter' ";
    $tabla = "medicion";
    $campo = "*";
$inner=" INNER JOIN terreno on terreno.id_ter=medicion.fk_id_ter INNER JOIN propietario on propietario.id_pro=terreno.fk_id_pro";
    $lista_array = array();
    $sql = consultas("$tabla", "$campo", "$inner $where");
    $contar = $sql->rowCount();
    
    if ($contar === 0) {
        $mensaje="";
        if ($id_pro==0) {
            $mensaje.=" propietario ,";
        }
        
        if ($id_ter==0) {
            $mensaje.=" terreno .";
        }
        array_push($lista_array, array("mostrar" =>"Seleccione "));
        return json_encode($lista_array);
    }
    while ($row = $sql->fetch()) {


        array_push($lista_array, array("mostrar" => $row["id_med"]."º Temp:º" . $row["temperatura_med"] . " Humed:" . $row["humedad_med"] . " Oxi:" . $row["oxigeno_med"]." Fecha:".$row["fecha_creacion_med"]." ".$row["observacion_med"]));
    }

    return json_encode($lista_array);
}

function medicion_r($id_terreno,$temperatura_med,$humedad_med,$oxigeno_med,$observacion_med) //,$apellido,$nombre)
{
 
    $estado = "Save";
 
    $tabla = "medicion";
    //id_med,temperatura_med,humedad_med,oxigeno_med,observacion_med,fecha_creacion_med,fk_id_ter,estado_med
    $campo = " id_med, temperatura_med, humedad_med, oxigeno_med, observacion_med, fecha_creacion_med, fk_id_ter, estado_med ";
    $valor = " null,'$temperatura_med','$humedad_med','$oxigeno_med','$observacion_med',now(),'$id_terreno','1'";
 
  $sql=insertar("$tabla", "$campo", "$valor"); 
    $lista_array = array();


    array_push($lista_array, array("estado" => $estado));
    return json_encode($lista_array);
}
