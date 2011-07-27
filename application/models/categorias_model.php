<?php

class categorias_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    /* dado un campo existente en la bd retorna todos los datos del usuario ordenados desc por ese campo */
    public function get_doc($categoria,$idD)
    {
        
        $this->db->where("id",$idD);
        $this->db->where("categorias_id",$categoria);
        $query = $this->db->get('documentos');

        return $query;
    }


    public function get_docs($num,$offset,$idC=null)
    {
        $this->db->where('categorias_id',$idC);
        $query = $this->db->get('documentos', $num, $offset);
        return $query;
    }
    /* dado un campo existente en la bd retorna todos los datos del usuario ordenados desc por ese campo */
    public function get_docs_desc($campo,$idC)
    {
        $this->db->where('categorias_id',$idC);
        $this->db->order_by($campo.' desc');
        $query = $this->db->get('documentos');

        return $query;
    }
   /* retorna la cantidad de usuarios que hay en la tabla usuario */
    public function get_docs_cantidad ($idC=null)
    {
        $this->db->where('categorias_id',$idC);
        $query = $this->db->count_all_results('documentos');
        //print $query;
        //exit;
    	return $query;
    }

}
?>
