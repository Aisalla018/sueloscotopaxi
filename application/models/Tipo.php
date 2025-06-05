<?php
class Tipo extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("tipo",$datos);
    }

    public function actualizar($id_tipo,$datos){
      $this->db->where("id_tipo",$id_tipo);
      return $this->db->update("tipo",$datos);
    }

    public function consultarPorId($id_tipo){
      $this->db->where("id_tipo",$id_tipo);
      $this->db->join("producto","producto.id_produc=tipo.fk_id_pro");
      $tipo=$this->db->get("tipo");
      if($tipo->num_rows()>0){
        return $tipo->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
      $this->db->join("producto","producto.id_produc=tipo.fk_id_pro");
      $listadoTipos=$this->db->get("tipo");
      if($listadoTipos->num_rows()>0){
        return $listadoTipos;
      }else{
        return false;
      }
    }

    public function eliminar($id_tipo){
      $this->db->where("id_tipo",$id_tipo);
      return $this->db->delete("tipo");
    }
 }//cierre de la clase
