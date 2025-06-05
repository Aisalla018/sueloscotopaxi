<?php
class Mediciones extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("medicion");
        $this->load->model("terreno");
        $this->load->model("propietario");
        $this->load->model("producto");
        $this->load->helper('url');
        $this->load->model("parroquia");
        $this->load->model("barrio");
        $this->load->model('Medicion_model', 'medicion');
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
            redirect("seguridades/formularioLogin");
        }
    }

    public function index() {
        $data['listadoMediciones'] = $this->medicion->consultarTodos();
        $this->load->view("header");
        $this->load->view("mediciones/tabla", $data);
        $this->load->view("footer");
    }

    public function obtener_ultimas_mediciones() {
      $ultimasMediciones = $this->medicion->consultarTodos(); // Utiliza la función consultarUltimas del modelo
      echo json_encode($ultimasMediciones);
  }
  

    public function nuevo(){
      $data["listadoTerrenos"]=$this->terreno->consultarTodos();
      $data["listadoPropietarios"]=$this->propietario->consultarTodos();
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $data["listadoBarrios"]=$this->barrio->consultarTodos();
      $this->load->view("header");
      $this->load->view("mediciones/nuevo",$data);
      $this->load->view("footer");
    }

    public function editar($id_med){
      $data["medicion"]=$this->medicion->consultarPorId($id_med);
      $data["listadoTerrenos"]=$this->terreno->consultarTodos();
      $data["listadoPropietarios"]=$this->propietario->consultarTodos();
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $data["listadoBarrios"]=$this->barrio->consultarTodos();
      $this->load->view("header");
      $this->load->view("mediciones/editar",$data);
      $this->load->view("footer");
    }
    public function obtener_mediciones() {
      $data["listadoMediciones"] = $this->medicion->consultarTodos();
      //$html = $this->load->view("mediciones/tabla", $data, true);
      //echo $html;
       echo json_encode($data);
  }

  
    public function guardarMediciones(){
      $datosNuevaMedicion=array(
        "temperatura_med"=>$this->input->post("temperatura_med"),
        "humedad_med"=>$this->input->post("humedad_med"),
        "oxigeno_med"=>$this->input->post("oxigeno_med"),
        "observacion_med"=>$this->input->post("observacion_med"),
        "fecha_creacion_med"=>$this->input->post("fecha_creacion_med"),
        "fk_id_ter"=>$this->input->post("fk_id_ter")
      );
      if($this->medicion->insertar($datosNuevaMedicion)){
        $this->session->set_flashdata("confirmacion", "medicion insertada exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("mediciones/index");
    }

    public function procesarActualizacion(){
      $id_med=$this->input->post("id_med");
      $datosMedicionEditada=array(
        "temperatura_med"=>$this->input->post("temperatura_med"),
        "humedad_med"=>$this->input->post("humedad_med"),
        "oxigeno_med"=>$this->input->post("oxigeno_med"),
        "observacion_med"=>$this->input->post("observacion_med"),
        "estado_med"=>$this->input->post("estado_med"),
        "fk_id_ter"=>$this->input->post("fk_id_ter")
      );
      if($this->medicion->actualizar($id_med,$datosMedicionEditada)){
        $this->session->set_flashdata("confirmacion", "Medicion Editada exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("mediciones/index");
    }

    public function procesarEliminacion($id_med){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->medicion->eliminar($id_med)){
          $this->session->set_flashdata("confirmacion", "Medicion Eliminada exitosamente.");
        }else{
          $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("mediciones/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }


  }//cierre de la clase
