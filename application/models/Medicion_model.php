<?php
class Medicion_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('medicion_model', 'medicion');
        $this->load->database();
    }

    public function obtenerUltimasMediciones($cantidad = 10) {
        // Cambia "medicion" por el nombre de tu tabla de mediciones
        $this->db->select("medicion.*, terreno.numeroRegistro_ter, propietario.apellido_pro, propietario.nombre_pro, producto.nombre_produc");
        $this->db->from("medicion");
        $this->db->join("terreno", "terreno.id_ter = medicion.fk_id_ter");
        $this->db->join("propietario", "propietario.id_pro = terreno.fk_id_pro");
        $this->db->join("producto", "producto.id_produc = terreno.fk_id_produc");
        $this->db->order_by("id_med", "desc"); // Ordenar por el ID de medición en orden descendente
        $this->db->limit($cantidad); // Obtener la cantidad especificada de mediciones
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function insertarMedicionDesdeSensor($datosSensor) {
        // Cambia "medicion" por el nombre de tu tabla de mediciones
        $this->db->insert("medicion", $datosSensor);
        return $this->db->insert_id(); // Devuelve el ID de la inserción (si lo necesitas)
    }
}
