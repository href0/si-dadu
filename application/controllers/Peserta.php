<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        //Do your magic here
        $this->load->model('model_peserta', 'peserta');
        $this->load->model('model_satuankerja', 'satuankerja');
        $this->load->model('model_pelatihan', 'pelatihan');
        $this->load->model('model_kejuruan', 'kejuruan');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }
    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Peserta',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $this->peserta->getAll(),
            'content'       => 'peserta/index'
        ];
        $this->load->view('template/master', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('satuan_kerja', 'Satuan Kerja', 'trim|required');
        if ($this->input->post('satuan_kerja') == '1') {
            $this->form_validation->set_rules('kejuruan', 'kejuruan', 'trim|required');
        }
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No handphone', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
        $this->form_validation->set_rules('rwdusun', 'RW/Dusun', 'trim|required');
        $this->form_validation->set_rules('rt', 'RT', 'trim|required');
        $this->form_validation->set_rules('detail_alamat', 'Detail Alamat', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Peserta',
                'sub_page'      => 'Tambah',
                'sidebar_nama'   => $this->login_nama,
                'satuan_kerja'  => $this->satuankerja->getAll(),
                'content'       => 'peserta/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            $foto = 'default.jpg';
            if ($_FILES['foto']['size'] != 0) {
                $generate_name_utama = $this->input->post('nama') . '-' . date('Y') . '-' . time() . rand();
                $config['upload_path']   = './assets/foto/';
                $config['allowed_types'] = 'gif|png|jpg|jpeg'; //mencegah upload backdor
                $config['max_size']      = '4000';
                $config['file_name']      = $generate_name_utama;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">' . $error . '</div>'
                    );
                    redirect('peserta/add');
                    $this->load->view('upload_form', $error);
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $data = [
                'id_pelatihan'      => $this->input->post('pelatihan'),
                'nik'               => $this->input->post('nik'),
                'nama'              => $this->input->post('nama'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'kecamatan'         => $this->input->post('kecamatan'),
                'kelurahan'         => $this->input->post('kelurahan'),
                'rw-dusun'          => $this->input->post('pelatihan'),
                'rt'                => $this->input->post('rt'),
                'detail_alamat'     => $this->input->post('detail_alamat'),
                'no_hp'             => $this->input->post('no_hp'),
                'email'             => $this->input->post('email'),
                'foto'              => $foto,
            ];
            if ($this->peserta->add($data) > 0) {

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil menambah peserta</div>'
                );
                redirect('peserta');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Terjadi kesalahan</div>'
                );
                redirect('peserta');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->peserta->delete($id);
        if ($delete == true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Berhasil menghapus data peserta</div>'
            );
            redirect('peserta');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
            );
            redirect('peserta');
        }
    }

    public function pilihpelatihan()
    {
        if ($this->input->post('action') == 'satker') {
            if ($this->input->post('satuan_kerja_id') == '2') {
                $output = '<option value="" selected="true" disabled>-- Pilih Pelatihan --</option>';
                $satuan_kerja_id = $this->input->post('satuan_kerja_id');
                foreach ($this->pelatihan->getBySatuanKerjaId($satuan_kerja_id) as $row) {
                    $output .= '<option value="' . $row['id_pelatihan'] . '">' . $row['pelatihan'] . '</option>';
                }
                echo $output;
            } else if ($this->input->post('satuan_kerja_id') == '1') {
                $output = '<option value="" selected="true" disabled>-- Pilih Kejuruan --</option>';
                $satuan_kerja_id = $this->input->post('satuan_kerja_id');
                foreach ($this->kejuruan->getAll() as $row) {
                    $output .= '<option value="' . $row['id_kejuruan'] . '">' . $row['kejuruan'] . '</option>';
                }
                echo $output;
            }
        } else if ($this->input->post('action') == 'kejuruan') {
            $output = '<option value="" selected="true" disabled>-- Pilih Pelatihan --</option>';
            $kejuruan_id = $this->input->post('kejuruan_id');
            foreach ($this->pelatihan->getByKejuruanId($kejuruan_id) as $row) {
                $output .= '<option value="' . $row['id'] . '">' . $row['pelatihan'] . '</option>';
            }
            echo $output;
        }
    }
}
