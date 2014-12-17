<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class God extends CI_Controller {

	public function index()
	{
		$data = array('msg' => $this->uri->segment(1));
		$this->load->view('head', $data);
		$this->load->view('random', $data);
		$this->load->view('foot');
	}
	public function sb(){
		$data = array('msg' => rawurldecode($this->uri->segment(3)));
		$this->load->view('head', $data);
		$this->load->view('random', $data);
		$this->load->view('foot');
	}
	

}
