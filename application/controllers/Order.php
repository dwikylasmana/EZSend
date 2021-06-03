<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('order_m', 'order');
	}

	public function index()
	{
		$query = $this->order->get();
		// $data['header'] = 'Tampil Data Buku';
		// $data['buku'] = $query->result();
		$data = array(
				'header' => 'Pendaftaran Pengiriman',
				'order' => $query->result(),
			);
		$this->load->view('_header', $data);
		$this->load->view('order_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$data = array(
				'header' => 'Pengiriman Baru'
			);
		$this->load->view('_header', $data);
		$this->load->view('order_tambah');
		$this->load->view('_footer');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->order->add($inputan);
		}
		redirect('order');
	}

	public function del($id)
	{
		$this->order->del($id);
		redirect('order');
	}

}
