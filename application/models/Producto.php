<?php
class Producto extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("producto",$datos);
    }

    public function actualizar($id_produc,$datos){
      $this->db->where("id_produc",$id_produc);
      return $this->db->update("producto",$datos);
    }

    public function consultarPorId($id_produc){
      $this->db->where("id_produc",$id_produc);
      $producto=$this->db->get("producto");
      if($producto->num_rows()>0){
        return $producto->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
        $listadoProductos=$this->db->get("producto");
        if($listadoProductos->num_rows()>0){
          return $listadoProductos;
        }else{
          return false;
        }
    }

    public function eliminar($id_produc){
      $this->db->where("id_produc",$id_produc);
      return $this->db->delete("producto");
    }
 }//cierre de la clase
