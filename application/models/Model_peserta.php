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
            ->join('kelurahan', 'kelurahan.id_kelurahan = peserta.id_kelurahan')
            ->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan')
            ->get('peserta')
            ->result_array();
    }

    public function add($data)
    {
        return $this->db
            ->insert('peserta', $data);
    }

    public function edit($data, $id)
    {
        return $this->db
            ->where('id_peserta', $id)
            ->update('peserta', $data);
    }

    public function getById($id)
    {
        return $this->db
            ->join('pelatihan', 'pelatihan.id_pelatihan = peserta.id_pelatihan')
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->join('kelurahan', 'kelurahan.id_kelurahan = peserta.id_kelurahan')
            ->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan')
            ->get_where('peserta', ['id_peserta' => $id])->row_array();
    }

    public function getByIdPelatihan($id)
    {
        return $this->db
            ->join('pelatihan', 'pelatihan.id_pelatihan = peserta.id_pelatihan')
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->join('kelurahan', 'kelurahan.id_kelurahan = peserta.id_kelurahan')
            ->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan')
            ->get_where('peserta', ['peserta.id_pelatihan' => $id])
            ->result_array();
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_peserta', $id)
            ->delete('peserta');
    }
}
