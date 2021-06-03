<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function index()
	{
		$this->load->view('_header');
		$this->load->view('katalog');
		$this->load->view('_footer');
	}

}
