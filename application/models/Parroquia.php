<?php
class Parroquia extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("parroquia",$datos);
    }

    public function actualizar($id_par,$datos){
      $this->db->where("id_par",$id_par);
      return $this->db->update("parroquia",$datos);
    }

    public function consultarPorId($id_par){
      $this->db->where("id_par",$id_par);
      $parroquia=$this->db->get("parroquia");
      if($parroquia->num_rows()>0){
        return $parroquia->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoParroquias=$this->db->get("parroquia");
        if($listadoParroquias->num_rows()>0){
          return $listadoParroquias;
        }else{
          return false;
        }
    }

    public function eliminar($id_par){
      $this->db->where("id_par",$id_par);
      return $this->db->delete("parroquia");
    }

    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_par",$estado);
      $parroquia=$this->db->get("parroquia");
      if ($parroquia->num_rows()>0) {
        return $parroquia;
      } else {
        return false;
      }
    }
 }//cierre de la clase
