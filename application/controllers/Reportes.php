<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reportes extends CI_Controller{
	public function __construct(){
			parent::__construct();
			$this->load->model("medicion");
			$this->load->model("terreno");
			$this->load->model("propietario");
			$this->load->model("producto");
			$this->load->model("parroquia");
			$this->load->model("barrio");
      $this->load->model("solicitud");
	}

	public function index(){
		$data["listadoMediciones"]=$this->medicion->consultarTodos();
		$this->load->view("reportes/index",$data);
	}
}
