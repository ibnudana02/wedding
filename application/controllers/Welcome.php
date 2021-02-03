<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['data'] = $this->db->get('ucapan')->result();
		$this->load->view('invitation', $data, FALSE);
	}

	public function postPesan()
	{
		$this->db->query('CREATE TABLE IF NOT EXISTS ucapan (id INTEGER PRIMARY KEY AUTOINCREMENT, nama VARCHAR NOT NULL, pesan VARCHAR NOT NULL)');
		$nama = htmlspecialchars($this->input->post('nama'));
		$pesan = htmlspecialchars($this->input->post('pesan'));
		$data = array(
			'nama' => $nama,
			'pesan' => $pesan
		);
		if (!empty($data)) {
			$this->db->insert('ucapan', $data);
		}

		redirect('welcome', 'refresh');
	}
}
