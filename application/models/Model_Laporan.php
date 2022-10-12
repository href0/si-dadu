<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_Laporan extends CI_Model
{
    public function getAllQB()
    {
        return $this->db
            ->select('*,count(if(peserta.hasil_pelatihan = Lulus, 1, Null))  as hasilPelatihan')
            ->from('peserta')
            ->join('pelatihan', 'pelatihan.id_pelatihan = peserta.id_pelatihan')
            ->join('kejuruan', 'kejuruan.id_kejuruan = pelatihan.id_kejuruan')
            ->join('satuan_kerja', 'satuan_kerja.id_satuan_kerja = kejuruan.id_satuan_kerja')
            ->group_by('pelatihan')
            ->get()
            ->result_array();
    }
    public function getAll()
    {
        $query = "SELECT  *, 
                 COUNT(id_peserta),
                  COUNT(IF(hasil_pelatihan = 'Lulus', 1, NULL)) 'Lulus',
                  COUNT(IF(hasil_pelatihan = 'Tidak Lulus', 1, NULL)) 'Tidak Lulus' 
                   FROM `peserta`
                  JOIN `pelatihan` ON `pelatihan`.`id_pelatihan` = `peserta`.`id_pelatihan`
                  JOIN `kejuruan` ON `kejuruan`.`id_kejuruan` = `pelatihan`.`id_kejuruan`
                  JOIN `satuan_kerja` ON `satuan_kerja`.`id_satuan_kerja` = `kejuruan`.`id_satuan_kerja`
                  GROUP BY `pelatihan`
        ";
        return $this->db->query($query)->result_array();
    }
}
