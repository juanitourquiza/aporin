<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

    function index() {
        //$this->load->helper('url');
        $this->load->view('autocomplete');
    }

    function suggestions() {
        $this->load->model('autocomplete_model');
        $term = $this->input->post('term',TRUE);

        if (strlen($term) < 1) break;

        $rows = $this->autocomplete_model->GetAutocomplete(array('titulo' => $term));

        $keywords = array();
        foreach ($rows as $row)
            array_push($keywords, $row->titulo);

        echo json_encode($keywords);
    }

}

/* End of file autocomplete.php */
/* Location: ./application/controllers/autocomplete.php */
