<?php
  class Servicios extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("servicio");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoServicios"]=$this->servicio->consultarTodos();
      $this->load->view("header");
      $this->load->view("administracion/servicios/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("administracion/servicios/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_ser){
      $data["servicio"]=$this->servicio->consultarPorId($id_ser);
      $this->load->view("header");
      $this->load->view("administracion/servicios/editar",$data);
      $this->load->view("footer");
    }

    public function guardarServicio(){
      $datosNuevoServicio=array(
          "titulo_ser"=>$this->input->post("titulo_ser"),
          "subtitulo_ser"=>$this->input->post("subtitulo_ser"),
          "titulo_uno_ser"=>$this->input->post("titulo_uno_ser"),
          "descripcion_uno_ser"=>$this->input->post("descripcion_uno_ser"),
          "titulo_dos_ser"=>$this->input->post("titulo_dos_ser"),
          "titulo_dos_ser"=>$this->input->post("titulo_dos_ser"),
          "descripcion_dos_ser"=>$this->input->post("descripcion_dos_ser")
      );
      if($this->servicio->insertar($datosNuevoServicio)){
          $this->session->set_flashdata("confirmacion", "Nuevo servicio insertado exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("servicios/index");
    }

    public function procesarActualizacion(){
      $id_ser=$this->input->post("id_ser");
      $datosServicioEditado=array(
        "titulo_ser"=>$this->input->post("titulo_ser"),
        "subtitulo_ser"=>$this->input->post("subtitulo_ser"),
        "titulo_uno_ser"=>$this->input->post("titulo_uno_ser"),
        "descripcion_uno_ser"=>$this->input->post("descripcion_uno_ser"),
        "titulo_dos_ser"=>$this->input->post("titulo_dos_ser"),
        "titulo_dos_ser"=>$this->input->post("titulo_dos_ser"),
        "descripcion_dos_ser"=>$this->input->post("descripcion_dos_ser"),
        "fecha_modificacion_ser"=>$this->input->post("fecha_modificacion_ser")
      );
      if($this->servicio->actualizar($id_ser,$datosServicioEditado)){
        $this->session->set_flashdata("confirmacion", "Actualizado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("servicios/index");
    }

    public function procesarEliminacion($id_ser){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->servicio->eliminar($id_ser)){
            $this->session->set_flashdata("confirmacion", "Servicio Eliminada exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("servicios/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
