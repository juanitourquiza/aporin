<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
class Categorias extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($categoria=null, $idD=null) {
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        $data["query"]=  $this->db->get('articulo');

        $this->load->view('frontend/cabecera',$data);
        $this->load->model('categorias_model'); //cargamos el archivo usuario_model.php
        $data['results'] = $this->categorias_model->get_doc($categoria,$idD);
        $this->load->view('frontend/menu');
        $this->load->view('frontend/buscadorCentroU',$data);
        $this->load->view('frontend/piepagina');

    }

    public function mostrar($idC,$idL=null) {
        $data["titulo"]="aporin.com v1.0 - CI";
        $data["slogan"]="(Documentos en linea de libre acceso)";
        //$data["query"]=  $this->db->get('articulo');

        $this->load->view('frontend/cabecera',$data);
        $this->load->view('frontend/menu');

        $config['base_url'] = base_url().'index.php/categorias/mostrar/'.$idC; //establecemos la URL para las paginas
        $config['total_rows'] = $this->categorias_model->get_docs_cantidad($idC);  //llamo a una funcion del modelo que me retorna la cantidad de usuarios que tengo en la tabla usuario.
        $config['per_page'] = '6'; //cantidad de filas a mostrar por pagina
        
        //if(is_null($idL))
          //  $config['uri_segment'] = '3';
        //else
            $config['uri_segment'] = '4';
        
        $this->pagination->initialize($config); // le paso el vector con mis configuraciones al paginador

        //llamo a la funcion get_usuarios que me retorna el resultado de la consulta SQL con los datos.
        if(is_null($idL))
            $data['results'] = $this->categorias_model->get_docs($config['per_page'],0,$idC);
        else
            $data['results'] = $this->categorias_model->get_docs($config['per_page'],$this->uri->segment(4),$idC);
        

        //obtengo los usuarios ordenados descendientemente por el id
        $data['usuario'] = $this->categorias_model->get_docs_desc('id',$idC);

        $this->load->view('frontend/buscadorCentroC',$data);
        $this->load->view('frontend/piepagina');
    }
}
?>