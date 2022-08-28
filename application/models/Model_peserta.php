<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_peserta extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->join('pelatihan', 'pelatihan.id_pelatihan = peserta.id_pelatihan')
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->get('peserta')
            ->result_array();
    }

    public function add($data)
    {
        return $this->db
            ->insert('peserta', $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_peserta', $id)
            ->delete('peserta');
    }
}
