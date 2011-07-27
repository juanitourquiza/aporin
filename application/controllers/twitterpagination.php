<?php
class twitterpagination extends CI_Controller {
    public function index()
{
	//$this->load->helper('url');
	$this->load->model('twitterpagination_model');
	$data['num_messages'] = $this->twitterpagination_model->num_messages();
	$data['latest_messages'] = $this->twitterpagination_model->get_messages();
	$this->load->view('twitterpagination/index', $data);
        }

        public function get_messages($offset)
{
	$this->load->model('twitterpagination_model');
	$data['latest_messages'] = $this->twitterpagination_model->get_messages($offset);
	$this->load->view('twitterpagination/get_messages', $data);
}

}