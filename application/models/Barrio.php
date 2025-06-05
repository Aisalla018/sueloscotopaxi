<?php
class Barrio extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("barrio",$datos);
    }

    public function actualizar($id_bar,$datos){
      $this->db->where("id_bar",$id_bar);
      return $this->db->update("barrio",$datos);
    }

    public function consultarPorId($id_bar){
      $this->db->where("id_bar",$id_bar);
      $this->db->join("parroquia","parroquia.id_par=barrio.fk_id_par");
      $barrio=$this->db->get("barrio");
      if($barrio->num_rows()>0){
        return $barrio->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
      $this->db->join("parroquia","parroquia.id_par=barrio.fk_id_par");
      $listadoBarrios=$this->db->get("barrio");
      if($listadoBarrios->num_rows()>0){
        return $listadoBarrios;
      }else{
        return false;
      }
    }

    public function eliminar($id_bar){
      $this->db->where("id_bar",$id_bar);
      return $this->db->delete("barrio");
    }

    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_bar",$estado);
      $barrio=$this->db->get("barrio");
      if ($barrio->num_rows()>0) {
        return $barrio;
      } else {
        return false;
      }
    }
 }//cierre de la clase
