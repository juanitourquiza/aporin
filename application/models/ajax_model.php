<?php
class Ajax_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($q){

        $this->db->select('descripcion,cuerpo');
        $this->db->like('cuerpo', $q);    // Like para hacer el filtro

        $query  = $this->db->get('articulo');
        //print $query;
        //exit;

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }

    }
}
?>