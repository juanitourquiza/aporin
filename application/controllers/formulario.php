<?php

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');
        $this->form_validation->set_rules('nombre','nombre','required');
        $this->form_validation->set_rules('email','correo electronico','required|valid_email|trim');
        $this->form_validation->set_rules('password','contraseña','required|trim|sha1');
        $this->form_validation->set_rules('repassword','reescribir contraseña','required|matches[password]|trim|sha1');

        $this->form_validation->set_message('required','Debe introducir el campo %s');
        $this->form_validation->set_message('valid_email','No es un e-mail valido');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('frontend/form_view');
        }else {
            $data['nombre']=$this->input->post('nombre');
            $data['password']=$this->input->post('password');
            $this->load->view('frontend/exito_view',$data);
        }

        $this->load->view('frontend/piepagina');
    }
}
?>