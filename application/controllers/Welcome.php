<?php
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("servicio");
        $this->load->model("experiencia");
        $this->load->model("terreno");
        $this->load->database(); // Cargar la biblioteca Database de CodeIgniter
    }

    public function index(){
        // Obtener el contador de visitas
        $query = $this->db->get('visitas');
        $row = $query->row();

        if ($row) {
            // Incrementar el contador de visitas
            $contador = $row->contador + 1;

            // Actualizar el contador en la base de datos
            $this->db->where('id', $row->id);
            $this->db->set('contador', $contador);
            $this->db->update('visitas');
        } else {
            // Insertar el primer registro con contador inicializado en 1
            $contador = 1;
            $this->db->set('contador', $contador);
            $this->db->insert('visitas');
        }

        // Pasar el contador a la vista
        $data['contador'] = $contador;
        $data["listadoServicios"] = $this->servicio->consultarTodos();
        $data["listadoExperiencias"] = $this->experiencia->consultarTodos();
        $data["listadoTerrenos"] = $this->terreno->consultarTodos();
        $this->load->view('welcome_message', $data);
    }
}
