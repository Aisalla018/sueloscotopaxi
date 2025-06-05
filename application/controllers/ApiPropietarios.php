<?php
  class ApiPropietarios extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("propietario");

    }

  //apis
  public function apiObtenerPropietario(){
    $listadoPropietarios=$this->propietario->consultarTodos();
    if ($listadoPropietarios) {
      echo json_encode($listadoPropietarios->result());
    }else {
      echo json_encode("No se encontraron registros");
    }
  }

  }//cierre de la clase
