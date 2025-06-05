<?php
  class Tipos extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("tipo");
        $this->load->model("producto");
        if ($this->session->userdata("c0nectadoUTC")) {

        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoTipos"]=$this->tipo->consultarTodos();
      $this->load->view("header");
      $this->load->view("tipos/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $this->load->view("header");
      $this->load->view("tipos/nuevo",$data);
      $this->load->view("footer");
    }

    public function editar($id_tipo){
      $data["tipo"]=$this->tipo->consultarPorId($id_tipo);
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $this->load->view("header");
      $this->load->view("tipos/editar",$data);
      $this->load->view("footer");
    }

    public function guardarTipos(){
      $datosNuevoTipo=array(
        "nombre_tipo"=>$this->input->post("nombre_tipo"),
        "costo_tipo"=>$this->input->post("costo_tipo"),
        "fk_id_pro"=>$this->input->post("fk_id_pro")
      );
      if($this->tipo->insertar($datosNuevoTipo)){
        $this->session->set_flashdata("confirmacion", "Tipo insertado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("tipos/index");
    }

    public function procesarActualizacion(){
      $id_tipo=$this->input->post("id_tipo");
      $datosTipoEditado=array(
        "nombre_tipo"=>$this->input->post("nombre_tipo"),
        "costo_tipo"=>$this->input->post("costo_tipo"),
        "fk_id_pro"=>$this->input->post("fk_id_pro")
      );
      if($this->tipo->actualizar($id_tipo,$datosTipoEditado)){
        $this->session->set_flashdata("confirmacion", "Tipo editado exitosamente.");

      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("tipos/index");
    }



    public function procesarEliminacion($id_tipo){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->tipo->eliminar($id_tipo)){
            redirect("tipos/index");
        }else{
            echo "ERROR AL ELIMINAR";
        }
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
?>
