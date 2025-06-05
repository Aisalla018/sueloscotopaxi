<?php
  class Indicadores extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model("solicitud");
      if ($this->session->userdata("c0nectadoUTC")) {
      } else {
        redirect("seguridades/formularioLogin");
      }
    }

    public function index(){
      $data["listadoSolicitudes"]=$this->solicitud->consultarTodos();
      $this->load->view("header");
      $this->load->view("indicadores/index",$data);
      $this->load->view("footer");
    }


  }
