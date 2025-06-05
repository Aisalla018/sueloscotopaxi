<?php
class Terreno extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function insertar($datos){
        return $this->db->insert("terreno",$datos);
    }

    public function actualizar($id_ter,$datos){
      $this->db->where("id_ter",$id_ter);
      return $this->db->update("terreno",$datos);
    }

    public function consultarPorId($id_ter){
      $this->db->where("id_ter",$id_ter);
      $this->db->join("propietario","propietario.id_pro=terreno.fk_id_pro");
      $this->db->join("producto","producto.id_produc=terreno.fk_id_produc");
      $this->db->join("parroquia","parroquia.id_par=terreno.fk_id_par");
      $this->db->join("barrio","barrio.id_bar=terreno.fk_id_bar");
      $terreno=$this->db->get("terreno");
      if($terreno->num_rows()>0){
        return $terreno->row();
      }else{
        return false;
      }
    }

    public function consultarTodos(){
    $this->db->join("propietario","propietario.id_pro=terreno.fk_id_pro");
    $this->db->join("producto","producto.id_produc=terreno.fk_id_produc");
    $this->db->join("parroquia","parroquia.id_par=terreno.fk_id_par");
    $this->db->join("barrio","barrio.id_bar=terreno.fk_id_bar");
    $listadoTerrenos=$this->db->get("terreno");
      if($listadoTerrenos->num_rows()>0){
        return $listadoTerrenos;
      }else{
        return false;
      }
    }

    public function eliminar($id_ter){
      $this->db->where("id_ter",$id_ter);
      return $this->db->delete("terreno");
    }

    public function obtenerInidicadoresPorEstado($estado){
      $this->db->where("estado_ter",$estado);
      $terreno=$this->db->get("terreno");
      if ($terreno->num_rows()>0) {
        return $terreno;
      } else {
        return false;
      }
    }
 }//cierre de la clase
