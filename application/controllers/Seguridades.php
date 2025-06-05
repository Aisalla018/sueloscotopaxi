<?php
  class Seguridades extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model("usuario");
    }
    public function formularioLogin(){
      $this->load->view("seguridades/formularioLogin");
    }

    public function validarAcceso(){
      $identificacion_usu=$this->input->post("identificacion_usu");
      $password_usu=$this->input->post("password_usu");
      $usuario=$this->usuario->buscarUsuarioPorEmailPassword($identificacion_usu,$password_usu);
      if ($usuario){
        if ($usuario->estado_usu>0) {
          $this->session->set_userdata("c0nectadoUTC",$usuario);
          $this->session->set_flashdata("bienvenida","Saludos, bienvenido al sistema");
          redirect("indicadores/index");
        } else {
          $this->session->set_flashdata("error","Usuario bloqueado");
          redirect("seguridades/formularioLogin");
        }
      } else {
        $this->session->set_flashdata("error","Usuario o contraseña incorrectos");
        redirect("seguridades/formularioLogin");
      }
    }

    //matando la sesion
    public function cerrarSesion(){
      $this->session->sess_destroy();
      redirect("");
    }
  }//cierre de clase
