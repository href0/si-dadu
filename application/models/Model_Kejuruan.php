<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_Kejuruan extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->where('id_kejuruan !=', 1)
            ->get('kejuruan')->result_array();
    }

    public function getBySatkerId($id)
    {
        return $this->db
            ->get_where('kejuruan', ['id_satuan_kerja' => $id])
            ->row_array();
    }

    public function getById($id)
    {
        return $this->db
            ->get_where('kejuruan', ['id_kejuruan' => $id])
            ->row_array();
    }

    public function add($data)
    {
        return $this->db
            ->insert('kejuruan', $data);
    }
    public function edit($data, $id)
    {
        return $this->db
            ->where('id_kejuruan', $id)
            ->update('kejuruan', $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_kejuruan', $id)
            ->delete('kejuruan');
    }
}
