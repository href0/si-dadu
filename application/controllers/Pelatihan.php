<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pelatihan', 'pelatihan');
        $this->load->model('model_satuankerja', 'satuankerja');
    }


    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Jenis Pelatihan',
            'sub_page'      => '',
            'table'         => $this->pelatihan->getAll(),
            'content'       => 'pelatihan/index'
        ];
        $this->load->view('template/master', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('pelatihan', 'Pelatihan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Jenis Pelatihan',
                'sub_page'      => 'Tambah',
                'satuan_kerja'  => $this->satuankerja->getAll(),
                'content'       => 'pelatihan/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'id_kejuruan' => $this->input->post('kejuruan') ?? 1,
                'pelatihan'   => $this->input->post('pelatihan'),
                'tgl_awal'   => $this->input->post('tgl_awal'),
                'tgl_akhir'   => $this->input->post('tgl_akhir'),
                'lokasi'   => $this->input->post('lokasi'),
            ];
            $insert = $this->pelatihan->add($data);
            if ($insert > 0) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil menambah data pelatihan</div>'
                );
                redirect('pelatihan');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
                );
                redirect('pelatihan');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->pelatihan->delete($id);
        if ($delete == true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Berhasil menghapus data pelatihan</div>'
            );
            redirect('pelatihan');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
            );
            redirect('pelatihan');
        }
    }

    public function laporan()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Laporan Pelatihan',
            'sub_page'      => '',
            // 'table'         => $this->pelatihan->getAll(),
            'content'       => 'pelatihan/laporan'
        ];
        $this->load->view('template/master', $data);
    }
}
