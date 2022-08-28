<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SatuanKerja  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_satuankerja', 'satuankerja');
    }

    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Satuan Kerja',
            'sub_page'      => '',
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
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil menambah satuan kerja</div>'
                );
                redirect('satuankerja');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->satuankerja->delete($id);
        if ($delete == true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Berhasil menghapus data satuan kerja</div>'
            );
            redirect('satuankerja');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
            );
            redirect('satuankerja');
        }
    }
}
