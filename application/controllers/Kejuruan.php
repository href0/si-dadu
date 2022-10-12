<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kejuruan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('model_kejuruan', 'kejuruan');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }

    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Kejuruan',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $this->kejuruan->getAll(),
            'content'       => 'kejuruan/index'
        ];
        $this->load->view('template/master', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('kejuruan', 'Kejuruan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Kejuruan',
                'sub_page'      => 'Tambah',
                'sidebar_nama'   => $this->login_nama,
                'content'       => 'kejuruan/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'kejuruan'          => $this->input->post('kejuruan'),
                'id_satuan_kerja'   => 1
            ];
            $insert =  $this->kejuruan->add($data);
            if ($insert > 0) {
                alert('success', 'Berhasil menambah kejuruan');
                redirect('kejuruan');
            } else {
                alert('danger', 'Gagal menambah kejuruan, silahkan coba lagi');
                redirect('kejuruan');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('kejuruan', 'Kejuruan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Kejuruan',
                'sub_page'      => 'Edit',
                'kejuruan'      => $this->kejuruan->getById($id),
                'sidebar_nama'   => $this->login_nama,
                'content'       => 'kejuruan/edit'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'kejuruan' => $this->input->post('kejuruan')
            ];
            $update = $this->kejuruan->edit($data, $id);
            if ($update > 0) {
                alert('success', 'Berhasil mengubah kejuruan');
                redirect('kejuruan');
            } else {
                alert('danger', 'Gagal mengubah kejuruan, silahkan coba lagi');
                redirect('kejuruan');
            }
        }
    }



    public function delete($id)
    {
        $delete = $this->kejuruan->delete($id);
        if ($delete > 0) {
            alert('success', 'Berhasil menghapus data kejuruan');
            redirect('kejuruan');
        } else {
            alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
            redirect('kejuruan');
        }
    }
}
