<?php
class Medicion extends CI_Model{
    public function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function insertar($datos){
        return $this->db->insert("medicion",$datos);
    }

    public function actualizar($id_med,$datos){
      $this->db->where("id_med",$id_med);
      return $this->db->update("medicion",$datos);
    }

    public function consultarPorId($id_med){
      $this->db->where("id_med",$id_med);
      
      $medicion=$this->db->get("medicion");
      if($medicion->num_rows()>0){
        return $medicion->row();
      }else{
        return false;
      }
    }

    public function consultarTodos() {

      $listadoMediciones = $this->db->get("medicion");
      if ($listadoMediciones->num_rows() > 0) {
          return $listadoMediciones->result();
      } else {
          return false;
      }
  }
  
 

    public function eliminar($id_med){
      $this->db->where("id_med",$id_med);
      return $this->db->delete("medicion");
    }


    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_med",$estado);
      $medicion=$this->db->get("medicion");
      if ($medicion->num_rows()>0) {
        return $medicion;
      } else {
        return false;
      }
    }
 }//cierre de la clase
