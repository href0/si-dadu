<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('model_pelatihan', 'pelatihan');
        $this->load->model('model_satuankerja', 'satuankerja');
        $this->load->model('model_laporan', 'laporan');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }


    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Jenis Pelatihan',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
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
                'sidebar_nama'   => $this->login_nama,
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
                'lokasi'   => $this->input->post('lokasi')
            ];

            $insert = $this->pelatihan->add($data);
            if ($insert > 0) {

                alert('success', 'Berhasil menambah data pelatihan');
                redirect('pelatihan');
            } else {

                alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
                redirect('pelatihan');
            }
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('pelatihan', 'Pelatihan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Jenis Pelatihan',
                'sub_page'      => 'Edit',
                'pelatihan'     => $this->pelatihan->getbyId($id),
                'sidebar_nama'   => $this->login_nama,
                'satuan_kerja'  => $this->satuankerja->getAll(),
                'content'       => 'pelatihan/edit'
            ];
            $this->load->view('template/master', $data);
        } else {

            $data = [
                // 'id_kejuruan' => $this->input->post('kejuruan') ?? 1,
                'pelatihan'   => $this->input->post('pelatihan'),
                'tgl_awal'   => $this->input->post('tgl_awal'),
                'tgl_akhir'   => $this->input->post('tgl_akhir'),
                'lokasi'   => $this->input->post('lokasi')
            ];

            $update = $this->pelatihan->update($data, $id);
            if ($update > 0) {

                alert('success', 'Berhasil update data pelatihan');
                redirect('pelatihan');
            } else {

                alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
                redirect('pelatihan');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->pelatihan->delete($id);
        if ($delete > 0) {
            alert('success', 'Berhasil menghapus data pelatihan');
            redirect('pelatihan');
        } else {
            alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
            redirect('pelatihan');
        }
    }

    public function laporan()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Laporan Pelatihan',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $this->laporan->getAll(),
            'content'       => 'pelatihan/laporan'
        ];
        $this->load->view('template/master', $data);
    }
}
