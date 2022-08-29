<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user', 'user');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->user->getByUsername($username);
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $dataSession = [
                        'username'        => $user['username'],
                        'nama'            => $user['nama'],
                        'user_id'         => $user['id']
                    ];
                    $this->session->set_userdata('auth', $dataSession);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Username atau password salah</div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Username atau password salah</div>'
                );
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('auth');
        redirect('auth');
    }
}
