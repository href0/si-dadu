<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('model_user', 'user');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }
    public function index()
    {

        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'User',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $this->user->getAll(),
            'content'       => 'user/index'
        ];
        $this->load->view('template/master', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('retype_password', 'Password', 'trim|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'User',
                'sub_page'      => 'Tambah',
                'sidebar_nama'   => $this->login_nama,
                'content'       => 'user/form'
            ];
            $this->load->view('template/master', $data);
        } else {

            $password = $this->input->post('password');
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'username'      => strtolower($this->input->post('username')),
                'password'      => $passwordHash,
                'nama'          => $this->input->post('nama'),
                'email'          => $this->input->post('email'),
            ];
            $insert = $this->user->add($data);
            if ($insert > 0) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil menambah user</div>'
                );
                redirect('user');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Terjadi kesalahan, silahkan hub admin / penanggung jawab</div>'
                );
                redirect('user');
            }
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('retype_password', 'Password', 'trim|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'User',
                'sub_page'      => 'Edit',
                'user'          => $this->user->getById($id),
                'sidebar_nama'   => $this->login_nama,
                'content'       => 'user/edit'
            ];
            $this->load->view('template/master', $data);
        } else {

            $password = $this->input->post('password');
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'username'      => strtolower($this->input->post('username')),
                'password'      => $passwordHash,
                'nama'          => $this->input->post('nama'),
                'email'          => $this->input->post('email'),
            ];
            $update = $this->user->update($data, $id);
            if ($update > 0) {
                alert('success', 'Berhasil update user');
                redirect('user');
            } else {
                alert('danger', 'Terjadi kesalahan, silahkan hub admin / penanggung jawab');
                redirect('user');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->user->delete($id);
        if ($delete == true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Berhasil menghapus data user</div>'
            );
            redirect('user');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
            );
            redirect('user');
        }
    }
}
