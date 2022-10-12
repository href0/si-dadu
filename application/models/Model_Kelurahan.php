<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_kelurahan extends CI_Model
{
    public function getByIdKecamatan($id_kecamatan)
    {
        return $this->db
            ->get_where('kelurahan', ['id_kecamatan' => $id_kecamatan])->result_array();
    }
    public function get($id)
    {
        return $this->db
            // ->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan')
            ->get_where('kelurahan', ['id_kelurahan' => $id])->result_array();
    }
}
