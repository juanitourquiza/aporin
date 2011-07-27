<?php 
class Articulos extends CI_Controller {
    function index() {
        //echo 'Bienvenido a mi primer controlador en CodeIgniter';
        $data["descripcion"]="prueba1";
        $data["cuerpo"]="prueba2";
        $data["titulo"]="pruBOTA";
        $data["query"]=  $this->db->get('articulo');

        $this->load->view('mivista',$data);

    }
    function televisores() {
        echo "Aqui encuentra tv";
    }
    function ordenadores($marca=null, $modelo=null) {
        if (is_null($marca) && is_null($modelo)) {
            echo 'Aquí se muestran los productos de ordenadores';
        }elseif(is_null($modelo)) {
            echo 'Mostrando ordenadores de marca ' . $marca;
        }else {
            echo 'Mostrando ordenadores de marca ' . $marca . ' y modelo ' . $modelo;
        }
    }

    function Blog(){
        parent::__construct();
        $this->load->scaffolding('entries');
        
    }

}
?>