<?php
class Combo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cargaCmb($tabla) {
        $result = array();
        $query = $this->db->select("id, descripcion")->get($tabla);

        foreach($query->result() as $row)
            $result[$row->id] = $row->descripcion;
        return $result;
    }

    public function cargaCmbAnio() {
        $result = array();
        for($i=date('Y');$i>=1920;$i--)
            $result[$i] = $i;
        return $result;
    }
}
?>