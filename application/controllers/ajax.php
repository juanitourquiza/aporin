<?php
class Ajax extends CI_Controller
{
	// Constructor
	public function __construct()
	{
		parent::__construct();

		// llamamos a nuestro controlador  Ajax_model, le asignamos un alia "ajax"
		$this->load->model('Ajax_model','ajax');
	}
	function index()
	{
                $data="";
                //$this->load->helper('url');
		$this->load->view("buscar",$data);
                
                //$this->load->view('home');
	}

	public function buscar($q=''){

		// consultamos el metodo buscar, pasandole el parametro de busqueda
		$data['data'] = $this->ajax->buscar($q);
		// mostramos el resultado en nuestra vista mostrar
		$this->load->view("mostrar",$data);
	}
}
?>