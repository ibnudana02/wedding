<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->db->query('CREATE TABLE IF NOT EXISTS ucapan (id INTEGER PRIMARY KEY AUTOINCREMENT, nama VARCHAR NOT NULL, pesan VARCHAR NOT NULL)');
		$data['data'] = $this->db->get('ucapan')->result();
		$this->load->view('invitation', $data, FALSE);
	}

	public function postPesan()
	{
		$nama = htmlspecialchars($this->input->post('nama'));
		$pesan = htmlspecialchars($this->input->post('pesan'));
		$data = array(
			'nama' => $nama,
			'pesan' => $pesan
		);
		if (!empty($data)) {
			$this->db->insert('ucapan', $data);
			$arr = array_merge($data, array('status' => 'sukses'));
			echo json_encode($arr);
		} else {

			redirect('welcome', 'refresh');
		}
		// redirect('welcome', 'refresh');
	}
}
