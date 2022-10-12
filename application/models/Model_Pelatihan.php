<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_Pelatihan extends CI_Model
{

    public function getAll()
    {
        return $this->db
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->get('pelatihan')->result_array();
    }
    public function getById($id)
    {
        return $this->db
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->get_where('pelatihan', ['id_pelatihan' => $id])->row_array();
    }

    public function getBySatuanKerjaId($id)
    {
        return $this->db
            ->get_where('pelatihan', ['id_satuan_kerja' => $id])
            ->result_array();
    }
    public function getByKejuruanId($id)
    {
        return $this->db
            ->get_where('pelatihan', ['id_kejuruan' => $id])
            ->result_array();
    }

    public function add($data)
    {
        return $this->db->insert('pelatihan', $data);
    }

    public function update($data, $id)
    {
        return $this->db
            ->where('id_pelatihan', $id)
            ->update('pelatihan', $data);
    }
    public function delete($id)
    {
        return $this->db
            ->where('id_pelatihan', $id)
            ->delete('pelatihan');
    }
}
