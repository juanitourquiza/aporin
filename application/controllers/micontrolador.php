<?php
class MiControlador extends CI_Controller {
function index(){
$datos = array(
'titulo' => 'Página de prueba',
'descripcion' => 'Esta es la descripción de esta página, un poco más larga.',
'cuerpo' => 'El cuerpo de la página probablemente será un texto muy largo...<p>Con varios párrafos</p>'
    );
$this->load->view('mivista', $datos);
}
}
?>

