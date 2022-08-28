<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_SatuanKerja extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->get('satuan_kerja')->result_array();
    }

    public function add($data)
    {
        return $this->db
            ->insert('satuan_kerja', $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_satuan_kerja', $id)
            ->delete('satuan_kerja');
    }
}
