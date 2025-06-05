<?php
  class Usuarios extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("usuario");
        if ($this->session->userdata("c0nectadoUTC")) {
        } else {
          redirect("seguridades/formularioLogin");
        }
    }

    public function index(){
      $data["listadoUsuarios"]=$this->usuario->consultarTodos();
      $this->load->view("header");
      $this->load->view("usuarios/index",$data);
      $this->load->view("footer");
    }
    public function nuevo(){
      $this->load->view("header");
      $this->load->view("usuarios/nuevo");
      $this->load->view("footer");
    }

    public function editar($id_usu){
      $data["usuario"]=$this->usuario->consultarPorId($id_usu);
      $this->load->view("header");
      $this->load->view("usuarios/editar",$data);
      $this->load->view("footer");
    }

    public function guardarUsuarios(){
      $datosNuevoUsuario=array(
        "identificacion_usu"=>$this->input->post("identificacion_usu"),
        "apellido_usu"=>$this->input->post("apellido_usu"),
        "nombre_usu"=>$this->input->post("nombre_usu"),
        "email_usu"=>$this->input->post("email_usu"),
        "password_usu"=>$this->input->post("password_usu"),
        "telefono_usu"=>$this->input->post("telefono_usu"),
        "direccion_usu"=>$this->input->post("direccion_usu"),
        "perfil_usu"=>$this->input->post("perfil_usu"),
        "fecha_creacion_usu"=>$this->input->post("fecha_creacion_usu")
      );
      if($this->usuario->insertar($datosNuevoUsuario)){
          $this->session->set_flashdata("confirmacion", "Nuevo Usuario insertado exitosamente.");
      }else{
         $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("usuarios/index");
    }

    public function procesarActualizacion(){
      $id_usu=$this->input->post("id_usu");
      $datosUsuarioEditado=array(
        "identificacion_usu"=>$this->input->post("identificacion_usu"),
        "apellido_usu"=>$this->input->post("apellido_usu"),
        "nombre_usu"=>$this->input->post("nombre_usu"),
        "email_usu"=>$this->input->post("email_usu"),
        "password_usu"=>$this->input->post("password_usu"),
        "telefono_usu"=>$this->input->post("telefono_usu"),
        "direccion_usu"=>$this->input->post("direccion_usu"),
        "perfil_usu"=>$this->input->post("perfil_usu"),
        "estado_usu"=>$this->input->post("estado_usu"),
        "fecha_creacion_usu"=>$this->input->post("fecha_creacion_usu")
      );
      if($this->usuario->actualizar($id_usu,$datosUsuarioEditado)){
        $this->session->set_flashdata("confirmacion", "Usuario actualizado exitosamente.");
      }else{
        $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
      }
      redirect("usuarios/index");
    }

    public function procesarEliminacion($id_usu){
      if ($this->session->userdata("c0nectadoUTC")->perfil_usu=="SUPERADMINISTRADOR") {
        if($this->usuario->eliminar($id_usu)){
          $this->session->set_flashdata("confirmacion", "Usuario Eliminado exitosamente.");
        }else{
            $this->session->set_flashdata("error", "Error al procesar, intente nuevamente.");
        }
        redirect("usuarios/index");
      } else {
        redirect("seguridades/formularioLogin");
      }
    }
  }//cierre de la clase
