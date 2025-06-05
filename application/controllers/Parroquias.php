<?php
  class Parroquias extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("parroquia");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $this->load->view("header");
      $this->load->view("parroquias/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("parroquias/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_par){
      $data["parroquia"]=$this->parroquia->consultarPorId($id_par);
      $this->load->view("header");
      $this->load->view("parroquias/editar",$data);
      $this->load->view("footer");
    }

    public function guardarParroquia(){
      $datosNuevaParroquia=array(
          "nombre_par"=>$this->input->post("nombre_par")
      );
      if($this->parroquia->insertar($datosNuevaParroquia)){
          $this->session->set_flashdata("confirmacion", "Nueva Parroquia insertada exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("parroquias/index");
    }

    public function procesarActualizacion(){
      $id_par=$this->input->post("id_par");
      $datosParroquiaEditada=array(
        "nombre_par"=>$this->input->post("nombre_par")
      );
      if($this->parroquia->actualizar($id_par,$datosParroquiaEditada)){
        $this->session->set_flashdata("confirmacion", "Parroquia actualizada exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("parroquias/index");
    }

    public function procesarEliminacion($id_par){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->parroquia->eliminar($id_par)){
            $this->session->set_flashdata("confirmacion", "Parroquia Eliminada exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("parroquias/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
