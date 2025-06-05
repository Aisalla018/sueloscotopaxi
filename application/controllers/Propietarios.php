<?php
  class Propietarios extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("propietario");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoPropietarios"]=$this->propietario->consultarTodos();
      $this->load->view("header");
      $this->load->view("propietarios/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("propietarios/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_pro){
      $data["propietario"]=$this->propietario->consultarPorId($id_pro);
      $this->load->view("header");
      $this->load->view("propietarios/editar",$data);
      $this->load->view("footer");
    }

    public function guardarPropietarios(){
      $datosNuevoPropietario=array(
        "identificacion_pro"=>$this->input->post("identificacion_pro"),
        "apellido_pro"=>$this->input->post("apellido_pro"),
        "nombre_pro"=>$this->input->post("nombre_pro"),
        "email_pro"=>$this->input->post("email_pro"),
        "telefono_pro"=>$this->input->post("telefono_pro"),
        "fecha_creacion_pro"=>$this->input->post("fecha_creacion_pro")
      );
      if($this->propietario->insertar($datosNuevoPropietario)){
          $this->session->set_flashdata("confirmacion", "Nuevo Propietario insertado exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("propietarios/index");
    }

    public function procesarActualizacion(){
      $id_pro=$this->input->post("id_pro");
      $datosPropietarioEditado=array(
        "identificacion_pro"=>$this->input->post("identificacion_pro"),
        "apellido_pro"=>$this->input->post("apellido_pro"),
        "nombre_pro"=>$this->input->post("nombre_pro"),
        "email_pro"=>$this->input->post("email_pro"),
        "telefono_pro"=>$this->input->post("telefono_pro"),
        "fecha_creacion_pro"=>$this->input->post("fecha_creacion_pro"),
        "estado_pro"=>$this->input->post("estado_pro")
      );
      if($this->propietario->actualizar($id_pro,$datosPropietarioEditado)){
        $this->session->set_flashdata("confirmacion", "Propietario actualizado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("propietarios/index");
    }

    public function procesarEliminacion($id_pro){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->propietario->eliminar($id_pro)){
          $this->session->set_flashdata("confirmacion", "Propietario Eliminado exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("propietarios/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }


  //apis
  public function apiObtenerPropietario(){
    $listadoPropietarios=$this->propietario->consultarTodos();
    if ($listadoPropietarios) {
      $jsonResultado=array('resultado'=>'ok', 'datos'=>$listadoPropietarios->result());
      echo json_encode($jsonResultado);
    }else {
      $jsonResultado=array('resultado'=>'error',
        'mensaje'=>'No existen productos registrados');
        echo json_encode($jsonResultado);
    }
  }

  }//cierre de la clase
