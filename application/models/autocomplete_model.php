<?php
/**
 * Autocomplete_Model
 *
 * @package autocomplete
 */

class Autocomplete_Model extends CI_Model
{
    public function GetAutocomplete($options = array())
    {
	    $this->db->select('titulo');
	    $this->db->like('titulo', $options['titulo'], 'after');
   	    $query = $this->db->get('documentos');
	    return $query->result();
    }
}
