<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['data'] = $this->pesan->read()->result();
		$this->load->view('invitation', $data, FALSE);
	}

	public function postPesan()
	{
		if (!empty($this->input->post('nama'))) {
			$this->pesan->insert();
			$arr = array(
				'nama' => htmlspecialchars($this->input->post('nama')),
				'pesan' => htmlspecialchars($this->input->post('pesan')),
				'status' => 'sukses'
			);
			echo json_encode($arr);
		}
	}
}
