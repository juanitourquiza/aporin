<?php

class Colaborar extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');
        $this->form_validation->set_rules('titulo','titulo','required');
        $this->form_validation->set_rules('editorial','editorial');
        $this->form_validation->set_rules('alojado','alojado');
        $this->form_validation->set_rules('etiquetas','etiquetas');
        $this->form_validation->set_rules('idioma','idioma','required');
        $this->form_validation->set_rules('resumen','resumen','required');
        $this->form_validation->set_rules('imagen_libro','imagen_libro','prep_url');
        $this->form_validation->set_rules('descarga','descarga','required|prep_url');
        $this->form_validation->set_message('required','Debe introducir el campo %s');

        if($this->form_validation->run()==FALSE){
            $this->load->view('frontend/form_vista');
        }else{
            $data['titulo']=$this->input->post('titulo');
            $data['editorial']=$this->input->post('editorial');
            $data['alojado']=$this->input->post('alojado');
            $data['etiquetas']=$this->input->post('etiquetas');
            $data['idioma']=$this->input->post('idioma');
            $data['categoria']=$this->input->post('categoria');
            $data['tamano']=$this->input->post('tamano');
            $data['numero_paginas']=$this->input->post('numero_paginas');
            $data['resumen']=$this->input->post('resumen');
            $data['imagen_libro']=$this->input->post('imagen_libro');
            $data['descarga']=$this->input->post('descarga');
            $this->load->view('frontend/exito_vista',$data);
        }
        $this->load->view('frontend/piepagina');
    }
}

?>