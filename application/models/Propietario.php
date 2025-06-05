<?php
class Propietario extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("propietario",$datos);
    }

    public function actualizar($id_pro,$datos){
      $this->db->where("id_pro",$id_pro);
      return $this->db->update("propietario",$datos);
    }

    public function consultarPorId($id_pro){
      $this->db->where("id_pro",$id_pro);
      $propietario=$this->db->get("propietario");
      if($propietario->num_rows()>0){
        return $propietario->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoPropietarios=$this->db->get("propietario");
        if($listadoPropietarios->num_rows()>0){
          return $listadoPropietarios;
        }else{
          return false;
        }
    }

    public function eliminar($id_pro){
      $this->db->where("id_pro",$id_pro);
      return $this->db->delete("propietario");
    }

    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_pro",$estado);
      $propietario=$this->db->get("propietario");
      if ($propietario->num_rows()>0) {
        return $propietario;
      } else {
        return false;
      }
    }


 }//cierre de la clase
