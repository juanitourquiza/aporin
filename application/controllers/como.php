<?php

class Como extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $data['num_messages'] = $this->twitterpagination_model->num_messages();
        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');
        
        $this->load->view('frontend/mostrarC');
        $this->load->view('frontend/piepagina');
    }
}
?>
