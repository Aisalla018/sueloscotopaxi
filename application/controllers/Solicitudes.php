<?php
  class Solicitudes extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("solicitud");
    }

    public function index(){
      $data["listadoSolicitudes"]=$this->solicitud->consultarTodos();
      $this->load->view("header");
      $this->load->view("solicitudes/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("solicitudes/nuevo");
    }

    public function editar($id_sol){
      $data["solicitud"]=$this->solicitud->consultarPorId($id_sol);
      $this->load->view("header");
      $this->load->view("solicitudes/editar",$data);
      $this->load->view("footer");
    }

    public function guardarSolicitudes(){
      $datosNuevaSolicitud=array(
        "apellido_sol"=>$this->input->post("apellido_sol"),
        "nombre_sol"=>$this->input->post("nombre_sol"),
        "telefono_sol"=>$this->input->post("telefono_sol"),
        "descripcion_sol"=>$this->input->post("descripcion_sol"),
        "fecha_ingreso_sol"=>$this->input->post("fecha_ingreso_sol")
      );
      if($this->solicitud->insertar($datosNuevaSolicitud)){
          $this->session->set_flashdata("confirmacion", "Nueva solicitud insertada exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("seguridades/formularioLogin");
    }

    public function procesarActualizacion(){
      $id_sol=$this->input->post("id_sol");
      $datosSolicitudEditado=array(
        "apellido_sol"=>$this->input->post("apellido_sol"),
        "nombre_sol"=>$this->input->post("nombre_sol"),
        "telefono_sol"=>$this->input->post("telefono_sol"),
        "descripcion_sol"=>$this->input->post("descripcion_sol"),
        "fecha_ingreso_sol"=>$this->input->post("fecha_ingreso_sol"),
        "estado_sol"=>$this->input->post("estado_sol")
      );
      if($this->solicitud->actualizar($id_sol,$datosSolicitudEditado)){
        $this->session->set_flashdata("confirmacion", "solicitud actualizada exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("solicitudes/index");
    }

    public function procesarEliminacion($id_sol){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->solicitud->eliminar($id_sol)){
          $this->session->set_flashdata("confirmacion", "solicitud Eliminada exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("solicitudes/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }

  }//cierre de la clase
