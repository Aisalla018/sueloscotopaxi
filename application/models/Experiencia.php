<?php
class Experiencia extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("experiencia",$datos);
    }

    public function actualizar($id_exp,$datos){
      $this->db->where("id_exp",$id_exp);
      return $this->db->update("experiencia",$datos);
    }

    public function consultarPorId($id_exp){
      $this->db->where("id_exp",$id_exp);
      $experiencia=$this->db->get("experiencia");
      if($experiencia->num_rows()>0){
        return $experiencia->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoExperiencias=$this->db->get("experiencia");
        if($listadoExperiencias->num_rows()>0){
          return $listadoExperiencias;
        }else{
          return false;
        }
    }

    public function eliminar($id_exp){
      $this->db->where("id_exp",$id_exp);
      return $this->db->delete("experiencia");
    }
 }//cierre de la clase
