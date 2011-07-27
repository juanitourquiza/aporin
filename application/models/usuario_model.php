<?php

class usuario_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /* obtiene los usuarios con una consulta SQL que utiliza LIMIT para devolver una cantidad limitada de 5 */
    public function get_usuarios($num,$offset)
    {
        $query = $this->db->get('articulo', $num, $offset);
        return $query;
    }
    /* dado un campo existente en la bd retorna todos los datos del usuario ordenados desc por ese campo */
    public function get_usuarios_desc($campo)
    {
        $this->db->order_by($campo.' desc');
        $query = $this->db->get('articulo');
        return $query;
    }
   /* retorna la cantidad de usuarios que hay en la tabla usuario */
    public function get_usuarios_cantidad ()
    {
    	return $this->db->count_all('articulo');
    }

}
?>
