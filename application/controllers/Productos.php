<?php
  class Productos extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("producto");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $this->load->view("header");
      $this->load->view("productos/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("productos/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_produc){
      $data["producto"]=$this->producto->consultarPorId($id_produc);
      $this->load->view("header");
      $this->load->view("productos/editar",$data);
      $this->load->view("footer");
    }

    public function guardarProducto(){
      $datosNuevoProducto=array(
          "nombre_produc"=>$this->input->post("nombre_produc")
      );
      if($this->producto->insertar($datosNuevoProducto)){
          $this->session->set_flashdata("confirmacion", "Nuevo producto insertado exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("productos/index");
    }

    public function procesarActualizacion(){
      $id_produc=$this->input->post("id_produc");
      $datosProductoEditado=array(
        "nombre_produc"=>$this->input->post("nombre_produc")
      );
      if($this->producto->actualizar($id_produc,$datosProductoEditado)){
        $this->session->set_flashdata("confirmacion", "Producto actualizado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("productos/index");
    }

    public function procesarEliminacion($id_produc){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->producto->eliminar($id_produc)){
          $this->session->set_flashdata("confirmacion", "Producto Eliminado exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("productos/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
