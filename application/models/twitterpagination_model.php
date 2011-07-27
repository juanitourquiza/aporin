<?php
class twitterpagination_model extends CI_Model {

    public function get_messages($offset=0,$q=null,$idC=null) {
        $this->db->order_by('id', 'desc');
        if(!is_null($q)):
            $this->db->like('resumen', $q);
        endif;
        if(!is_null($idC)):
            $this->db->where('categorias_id', $idC);
        endif;
        $query = $this->db->get('documentos', 9, $offset);
        return $query->result();
    }

    public function num_messages($idC=null) {
        if(!is_null($idC)):
            $this->db->where('categorias_id', $idC);
        endif;
        $query = $this->db->count_all_results('documentos');
        //print $query; exit;
        return $query;
    }

}