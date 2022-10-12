<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_kecamatan extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->get('kecamatan')->result_array();
    }
}
