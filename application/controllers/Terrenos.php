<?php
  class Terrenos extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("terreno");
        $this->load->model("propietario");
        $this->load->model("producto");
        $this->load->model("parroquia");
        $this->load->model("barrio");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function ubicaciones(){
      $data["listadoTerrenos"]=$this->terreno->consultarTodos();
      $this->load->view('header');
      $this->load->view('ubicaciones/index',$data);
      $this->load->view('footer');
    }

    public function index(){
      $data["listadoTerrenos"]=$this->terreno->consultarTodos();
      $this->load->view("header");
      $this->load->view("terrenos/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $data["listadoPropietarios"]=$this->propietario->consultarTodos();
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $data["listadoBarrios"]=$this->barrio->consultarTodos();
      $this->load->view("header");
      $this->load->view("terrenos/nuevo",$data);
      $this->load->view("footer");
    }

    public function editar($id_ter){
      $data["terreno"]=$this->terreno->consultarPorId($id_ter);
      $data["listadoPropietarios"]=$this->propietario->consultarTodos();
      $data["listadoProductos"]=$this->producto->consultarTodos();
      $data["listadoParroquias"]=$this->parroquia->consultarTodos();
      $data["listadoBarrios"]=$this->barrio->consultarTodos();
      $this->load->view("header");
      $this->load->view("terrenos/editar",$data);
      $this->load->view("footer");
    }

    public function guardarTerrenos(){
      $datosNuevoTerreno=array(
        "numeroRegistro_ter"=>$this->input->post("numeroRegistro_ter"),
        "lat_ter"=>$this->input->post("lat_ter"),
        "lng_ter"=>$this->input->post("lng_ter"),
        "foto_ter"=>$this->input->post("foto_ter"),
        "descripcion_ter"=>$this->input->post("descripcion_ter"),
        "fk_id_produc"=>$this->input->post("fk_id_produc"),
        "fk_id_pro"=>$this->input->post("fk_id_pro"),
        "fk_id_par"=>$this->input->post("fk_id_par"),
        "fk_id_bar"=>$this->input->post("fk_id_bar"),
        "tiempo_cosecha_ter"=>$this->input->post("tiempo_cosecha_ter"),
        "fecha_creacion_ter"=>$this->input->post("fecha_creacion_ter")
      );
      $this->load->library("upload");
        $nombreTemporal="foto_terreno_".time()."_".rand(1,5000);
        $config["file_name"]=$nombreTemporal;
        $config["upload_path"]=APPPATH.'../uploads/terrenos/';
        $config["allowed_types"]="jpeg|jpg|png";
        $config["max_size"]=2*1024;
        $this->upload->initialize($config);
        if($this->upload->do_upload("foto_ter")){
          $dataSubida=$this->upload->data();
          $datosNuevoTerreno["foto_ter"]=$dataSubida["file_name"];
        }
      if($this->terreno->insertar($datosNuevoTerreno)){
        $this->session->set_flashdata("confirmacion", "Terreno insertado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("terrenos/index");
    }

    public function procesarActualizacion(){
      $id_ter=$this->input->post("id_ter");
      $datosTerrenoEditado=array(
        "lat_ter"=>$this->input->post("lat_ter"),
        "lng_ter"=>$this->input->post("lng_ter"),
        "foto_ter"=>$this->input->post("foto_ter"),
        "descripcion_ter"=>$this->input->post("descripcion_ter"),
        "fk_id_produc"=>$this->input->post("fk_id_produc"),
        "fk_id_pro"=>$this->input->post("fk_id_pro"),
        "fk_id_par"=>$this->input->post("fk_id_par"),
        "fk_id_bar"=>$this->input->post("fk_id_bar"),
        "fecha_creacion_ter"=>$this->input->post("fecha_creacion_ter")
      );
      
      $this->load->library("upload");
        $nombreTemporal="foto_terreno_".time()."_".rand(1,5000);
        $config["file_name"]=$nombreTemporal;
        $config["upload_path"]=APPPATH.'../uploads/terrenos/';
        $config["allowed_types"]="jpeg|jpg|png";
        $config["max_size"]=2*1024;
        $this->upload->initialize($config);
        if($this->upload->do_upload("foto_ter")){
          $dataSubida=$this->upload->data();
          $datosTerrenoEditado["foto_ter"]=$dataSubida["file_name"];
        }
      if($this->terreno->actualizar($id_ter,$datosTerrenoEditado)){
        $this->session->set_flashdata("confirmacion", "Terreno Editado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("terrenos/index");
    }

    public function procesarEliminacion($id_ter){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->terreno->eliminar($id_ter)){
          $this->session->set_flashdata("confirmacion", "Terreno Eliminado exitosamente.");
        }else{
          $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("terrenos/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
