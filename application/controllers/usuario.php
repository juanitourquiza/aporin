<?php

class Usuario extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
    }

    function index()
    {
        $this->load->library('pagination'); //cargamos la libreria de paginacion
        $this->load->library('table'); //cargamos la libreria para el manejo de tablas
        $this->load->model('usuario_model'); //cargamos el archivo usuario_model.php

        $config['base_url'] = base_url().'index.php/usuario/index/'; //establecemos la URL para las paginas
        $config['total_rows'] = $this->usuario_model->get_usuarios_cantidad();  //llamo a una funcion del modelo que me retorna la cantidad de usuarios que tengo en la tabla usuario.
        $config['per_page'] = '5'; //cantidad de filas a mostrar por pagina

        $this->pagination->initialize($config); // le paso el vector con mis configuraciones al paginador

        //llamo a la funcion get_usuarios que me retorna el resultado de la consulta SQL con los datos.
        $data['results'] = $this->usuario_model->get_usuarios($config['per_page'],$this->uri->segment(3));

        //obtengo los usuarios ordenados descendientemente por el id
        $data['usuario'] = $this->usuario_model->get_usuarios_desc('id');

        $this->load->view('usuario_index',$data); //cargo la vista usuario_index y le paso el vector

    }
}