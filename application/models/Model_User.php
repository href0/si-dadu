<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Model_User extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->get('users')->result_array();
    }
    public function getByUsername($username)
    {
        return $this->db
            ->get_where('users', ['username' => $username])->row_array();
    }
    public function add($data)
    {
        return $this->db
            ->insert('users', $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id', $id)
            ->delete('users');
    }
}
