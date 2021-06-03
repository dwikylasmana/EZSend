<?php
class Order_m extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('order');
		if($id != null) {
			$this->db->where('noresi', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'nama_p' => $data['nama_p'],
			'alamat_p' => $data['alamat_p'],
			'telp_p' => $data['telp_p'],
			'paket' => $data['paket'],
		);
		$this->db->insert('order', $param);
	}

	public function del($id)
	{
		$this->db->where('noresi', $id);
		$this->db->delete('order');
	}

}