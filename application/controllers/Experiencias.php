<?php
  class Experiencias extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("experiencia");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoExperiencias"]=$this->experiencia->consultarTodos();
      $this->load->view("header");
      $this->load->view("administracion/experiencias/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("administracion/experiencias/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_exp){
      $data["experiencia"]=$this->experiencia->consultarPorId($id_exp);
      $this->load->view("header");
      $this->load->view("administracion/experiencias/editar",$data);
      $this->load->view("footer");
    }

    public function guardarExperiencia(){
      $datosNuevaExperiencia=array(
          "titulo_exp"=>$this->input->post("titulo_exp"),
          "descripcion_exp"=>$this->input->post("descripcion_exp"),
          "descripcion_uno_exp"=>$this->input->post("descripcion_uno_exp"),
          "descripcion_dos_exp"=>$this->input->post("descripcion_dos_exp"),
          "descripcion_tres_exp"=>$this->input->post("descripcion_tres_exp")
      );
      if($this->experiencia->insertar($datosNuevaExperiencia)){
          $this->session->set_flashdata("confirmacion", "Insertado exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("experiencias/index");
    }

    public function procesarActualizacion(){
      $id_exp=$this->input->post("id_exp");
      $datosExperienciaEditado=array(
        "titulo_exp"=>$this->input->post("titulo_exp"),
        "descripcion_exp"=>$this->input->post("descripcion_exp"),
        "descripcion_uno_exp"=>$this->input->post("descripcion_uno_exp"),
        "descripcion_dos_exp"=>$this->input->post("descripcion_dos_exp"),
        "descripcion_tres_exp"=>$this->input->post("descripcion_tres_exp"),
        "fecha_modificacion_exp"=>$this->input->post("fecha_modificacion_exp")
      );
      if($this->experiencia->actualizar($id_exp,$datosExperienciaEditado)){
        $this->session->set_flashdata("confirmacion", "Actualizado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("experiencias/index");
    }

    public function procesarEliminacion($id_exp){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->experiencia->eliminar($id_exp)){
            $this->session->set_flashdata("confirmacion", "Eliminado exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("experiencias/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
