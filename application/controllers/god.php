<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class God extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('random');
		$this->load->view('foot');
	}
	
}
