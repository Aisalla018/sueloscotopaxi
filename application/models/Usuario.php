<?php
class Usuario extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function buscarUsuarioPorEmailPassword($identificacion_usu,$password_usu){
      $this->db->where("identificacion_usu",$identificacion_usu);
      $this->db->where("password_usu",$password_usu);
      $usuarioEncontrado=$this->db->get("usuario");
      if($usuarioEncontrado->num_rows()>0){
        return $usuarioEncontrado->row();
      }else{
        return false;
      }
    }

    public function insertar($datos){
        return $this->db->insert("usuario",$datos);
    }

    public function actualizar($id_usu,$datos){
      $this->db->where("id_usu",$id_usu);
      return $this->db->update("usuario",$datos);
    }

    public function consultarPorId($id_usu){
      $this->db->where("id_usu",$id_usu);
      $usuario=$this->db->get("usuario");
      if($usuario->num_rows()>0){
        return $usuario->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoUsuarios=$this->db->get("usuario");
        if($listadoUsuarios->num_rows()>0){
          return $listadoUsuarios;
        }else{
          return false;
        }
    }

    public function eliminar($id_usu){
      $this->db->where("id_usu",$id_usu);
      return $this->db->delete("usuario");
    }

    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_usu",$estado);
      $usuario=$this->db->get("usuario");
      if ($usuario->num_rows()>0) {
        return $usuario;
      } else {
        return false;
      }
    }


 }//cierre de la clase
