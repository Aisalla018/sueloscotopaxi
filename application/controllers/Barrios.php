<?php
  class Barrios extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("barrio");
        $this->load->model("parroquia");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoBarrios"]=$this->barrio->consultarTodos();
      $this->load->view("header");
      $this->load->view("barrios/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $this->load->view("header");
      $this->load->view("barrios/nuevo",$data);
      $this->load->view("footer");
    }

    public function editar($id_bar){
      $data["barrio"]=$this->barrio->consultarPorId($id_bar);
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $this->load->view("header");
      $this->load->view("barrios/editar",$data);
      $this->load->view("footer");
    }

    public function guardarBarrios(){
      $datosNuevoBarrio=array(
        "nombre_bar"=>$this->input->post("nombre_bar"),
        "fk_id_par"=>$this->input->post("fk_id_par")
      );
      if($this->barrio->insertar($datosNuevoBarrio)){
        $this->session->set_flashdata("confirmacion", "Barrio insertado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("barrios/index");
    }

    public function procesarActualizacion(){
      $id_bar=$this->input->post("id_bar");
      $datosBarrioEditado=array(
        "nombre_bar"=>$this->input->post("nombre_bar"),
        "fk_id_par"=>$this->input->post("fk_id_par")
      );
      if($this->barrio->actualizar($id_bar,$datosBarrioEditado)){
        $this->session->set_flashdata("confirmacion", "Barrio editado exitosamente.");

      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("barrios/index");
    }



    public function procesarEliminacion($id_bar){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->barrio->eliminar($id_bar)){
            $this->session->set_flashdata("confirmacion", "Barrio Eliminado exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("barrios/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
