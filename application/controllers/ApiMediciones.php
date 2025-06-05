<?php
  class ApiMediciones extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("medicion");
        $this->load->model("terreno");
        $this->load->model("propietario");
        $this->load->model("producto");
        $this->load->model("parroquia");
        $this->load->model("barrio");

    }


    public function apiObtenerMediciones(){
      $listadoMediciones=$this->medicion->consultarTodos();
      if ($listadoMediciones) {
        echo json_encode($listadoMediciones->result());
      }else {
        echo json_encode("No se encontraron registros");
      }
    }

  }//cierre de la clase
