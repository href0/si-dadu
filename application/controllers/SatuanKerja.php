<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SatuanKerja  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('model_satuankerja', 'satuankerja');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }

    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Satuan Kerja',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $this->satuankerja->getAll(),
            'content'       => 'satuan_kerja/index'
        ];
        $this->load->view('template/master', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('satuan_kerja', 'Satuan Kerja', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Satuan Kerja',
                'sidebar_nama'   => $this->login_nama,
                'sub_page'      => 'Tambah',
                'content'       => 'satuan_kerja/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'satuan_kerja' => $this->input->post('satuan_kerja')
            ];
            $insert =  $this->satuankerja->add($data);
            if ($insert > 0) {
                alert('success', 'Berhasil menambah satuan kerja');
                redirect('satuankerja');
            } else {
                alert('danger', 'Gagal menambah, terjadi kesalahan. silahkan coba lagi');
                redirect('satuankerja');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('satuan_kerja', 'Satuan Kerja', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Satuan Kerja',
                'sidebar_nama'  => $this->login_nama,
                'data'          => $this->satuankerja->get($id),
                'sub_page'      => 'Edit',
                'content'       => 'satuan_kerja/edit'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'satuan_kerja'  => $this->input->post('satuan_kerja')
            ];
            $update = $this->satuankerja->update($data, $id);
            if ($update > 0) {
                alert('success', 'Berhasil update satuan kerja');
                redirect('satuankerja');
            } else {
                alert('danger', 'Gagal update, terjadi kesalahan. silahkan coba lagi');
                redirect('satuankerja');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->satuankerja->delete($id);
        if ($delete == true) {

            alert('success', 'Berhasil menghapus data satuan kerja');
            redirect('satuankerja');
        } else {
            alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
            redirect('satuankerja');
        }
    }
}
