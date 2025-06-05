<?php
class Solicitud extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("solicitud",$datos);
    }

    public function actualizar($id_sol,$datos){
      $this->db->where("id_sol",$id_sol);
      return $this->db->update("solicitud",$datos);
    }

    public function consultarPorId($id_sol){
      $this->db->where("id_sol",$id_sol);
      $solicitud=$this->db->get("solicitud");
      if($solicitud->num_rows()>0){
        return $solicitud->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
      $this->db->order_by("id_sol","DESC");
        $listadoSolicitudes=$this->db->get("solicitud");
        if($listadoSolicitudes->num_rows()>0){
          return $listadoSolicitudes;
        }else{
          return false;
        }
    }

    public function eliminar($id_sol){
      $this->db->where("id_sol",$id_sol);
      return $this->db->delete("solicitud");
    }
}//cierre de la clase
