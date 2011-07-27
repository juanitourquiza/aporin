<?php

class home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    /* obtiene los usuarios con una consulta SQL que utiliza LIMIT para devolver una cantidad limitada de 5 */
    public function get_home($num,$offset)
    {
        //$tabla= array('documentos as a','categorias as b');
        //$this->db->select('titulo, imagen_libro, descripcion, a.id');
        //$this->db->where('a.equipo','codigo');
        //$query = $this->db->get($tabla, $num, $offset);
        
        $query = $this->db->get('documentos', $num, $offset);
        return $query;
    }
    /* dado un campo existente en la bd retorna todos los datos del usuario ordenados desc por ese campo */
    public function get_home_desc($campo)
    {
        $this->db->order_by($campo.' desc');
        $query = $this->db->get('documentos');

        return $query;
    }
   /* retorna la cantidad de usuarios que hay en la tabla usuario */
    public function get_home_cantidad ()
    {
    	return $this->db->count_all('documentos');
    }

    public function get_total_buscar($q){

        //$this->db->select('titulo,resumen');
        $this->db->like('resumen', $q);    // Like para hacer el filtro

        //$query  = $this->db->get('documentos');
        $query = $this->db->count_all_results('documentos');
        //print $query;
        //exit;
        return $query;
        //if ($query->num_rows() > 0)
        //{
          //  return $query->result_array();
        //}
    }

    public function get_buscar($num,$offset,$q=null)
    {
        $this->db->like('resumen',$q);
        $query = $this->db->get('documentos', $num, $offset);
        
        return $query;
    }

    public function get_buscar_desc($q)
    {
        //$this->db->order_by($campo.' desc');
        $this->db->like('resumen',$q);
        $query = $this->db->get('documentos');
        return $query->result();
    }
}
?>
