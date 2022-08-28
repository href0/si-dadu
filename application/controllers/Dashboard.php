<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }

    public function index()
    {
        $data = [
            'title'         => 'Padaidi Corp',
            'page'          => 'Dashboard',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'content'       => 'dashboard/index'
        ];
        $this->load->view('template/master', $data);
    }
}
