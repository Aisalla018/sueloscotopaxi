<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
            redirect("seguridades/formularioLogin");
        }
        // Cargar la biblioteca Database de CodeIgniter
        $this->load->database();
        $this->load->model('Visitas_model'); // Cargar el modelo Visitas_model
    }

    public function index() {

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

            // Incrementar el contador utilizando el modelo Visitas_model
            $this->Visitas_model->incrementarContador();
        } else {
            // Insertar el primer registro con contador inicializado en 1
            $contador = 1;
            $this->db->set('contador', $contador);
            $this->db->insert('visitas');
        }

        // Pasar el contador a la vista
        $data['contador'] = $contador;

        $this->load->view('header');
        $this->load->view('inicio/index', $data);
        $this->load->view('footer');
    }
}
