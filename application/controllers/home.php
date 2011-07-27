<?php

/*
 * librerias: pagination, table estan cargados en autoload
 * metodo: home_model esta cargado en autoload
 *
 * Posibles Mejoras:
 * - menu separar de busqueda
 * - menu dinámico
*/

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
 * Método inicial del sitio web - homepage
    */

    public function index() {
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $data['num_messages'] = $this->twitterpagination_model->num_messages();
        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');
        $data['latest_messages'] = $this->twitterpagination_model->get_messages();
        $this->load->view('frontend/buscadorCentro',$data);
        $this->load->view('frontend/piepagina');
    }


    /*
     * Método para buscar utilizando ajax varia en la vista porque muestra ajax
     * y si es necesario paginación
    */

    public function buscar($q=null) {
        //$data['num_messages'] = $this->twitterpagination_model->num_messages($q);
        //$data['latest_messages'] = $this->twitterpagination_model->get_messages('',$q);
        //print $q;
        $qf=str_replace("%20"," ",$q);
        //echo "<br>";
        //print $qf;
        //exit;
        $data['latest_messages'] = $this->home_model->get_buscar_desc($qf);
        $this->load->view("frontend/mostrar",$data);
    }

    public function get_messages($offset) {
        $data['latest_messages'] = $this->twitterpagination_model->get_messages($offset);
        $this->load->view("frontend/get_messages",$data);
    }

    public function mostrar($idC=null) {
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $data['num_messages'] = $this->twitterpagination_model->num_messages();
        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');
        $data['latest_messages'] = $this->twitterpagination_model->get_messages();
        $this->load->view('frontend/buscadorCentro',$data);
        $this->load->view('frontend/piepagina');
    }
}

?>
