<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ucapan_model extends CI_Model
{

    private $_table = 'ucapan';
    public $nama;
    public $pesan;
    public $created;

    public function insert()
    {
        $post = $this->input->post();
        $this->nama = htmlspecialchars($post['nama']);
        $this->pesan = htmlspecialchars($post['pesan']);
        $this->created = date('Y-m-d H:i:s');
        $this->komp = $this->input->ip_address();

        $this->db->insert($this->_table, $this);
    }
    public function read()
    {
        return $this->db->get($this->_table, 5, 0);
    }

    public function getData($offset, $limit)
    {
        return $this->db->get($this->_table, $limit, $offset);
    }
}

/* End of file Ucapan_model.php */
