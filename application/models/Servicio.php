<?php
class Servicio extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("servicio",$datos);
    }

    public function actualizar($id_ser,$datos){
      $this->db->where("id_ser",$id_ser);
      return $this->db->update("servicio",$datos);
    }

    public function consultarPorId($id_ser){
      $this->db->where("id_ser",$id_ser);
      $servicio=$this->db->get("servicio");
      if($servicio->num_rows()>0){
        return $servicio->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoServicios=$this->db->get("servicio");
        if($listadoServicios->num_rows()>0){
          return $listadoServicios;
        }else{
          return false;
        }
    }

    public function eliminar($id_ser){
      $this->db->where("id_ser",$id_ser);
      return $this->db->delete("servicio");
    }
 }//cierre de la clase
