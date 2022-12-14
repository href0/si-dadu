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
        $this->load->model('model_kecamatan', 'kecamatan');
        $this->load->model('model_kelurahan', 'kelurahan');
        $this->login_nama = $this->session->userdata('auth')['nama'];
    }
    public function index()
    {
        $id_pelatihan = $this->input->get('pelatihan');
        // echo '<pre>';
        // print_r($id_pelatihan);
        // echo '</pre>';
        // die;
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Peserta',
            'sub_page'      => '',
            'sidebar_nama'   => $this->login_nama,
            'table'         => $id_pelatihan != '' ? $this->peserta->getByIdPelatihan($id_pelatihan) : $this->peserta->getAll(),
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
        $this->form_validation->set_rules('pelatihan', 'Pelatihan', 'trim|required');
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
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Peserta',
                'sub_page'      => 'Tambah',
                'sidebar_nama'   => $this->login_nama,
                'satuan_kerja'  => $this->satuankerja->getAll(),
                'kecamatan'     => $this->kecamatan->getAll(),
                'content'       => 'peserta/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            // echo '<pre>';
            // print_r($this->input->post());
            // echo '</pre>';
            // die;
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
                'id_pelatihan'          => $this->input->post('pelatihan'),
                'nik'                   => $this->input->post('nik'),
                'nama'                  => $this->input->post('nama'),
                'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
                // 'kecamatan'             => $this->input->post('kecamatan'),
                'id_kelurahan'             => $this->input->post('kelurahan'),
                'rw-dusun'              => $this->input->post('rwdusun'),
                'rt'                    => $this->input->post('rt'),
                'detail_alamat'         => $this->input->post('detail_alamat'),
                'no_hp'                 => $this->input->post('no_hp'),
                'email'                 => $this->input->post('email'),
                'foto'                  => $foto,
                'tgl_lahir'             => $this->input->post('tgl_lahir'),
                'tempat_lahir'          => $this->input->post('tempat_lahir'),
                'pendidikan_terakhir'    => $this->input->post('pendidikan_terakhir')

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

    public function edit($id)
    {
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
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
        $peserta = $this->peserta->getById($id);
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Peserta',
                'sub_page'      => 'Edit',
                'sidebar_nama'   => $this->login_nama,
                'peserta'       => $peserta,
                'kecamatan'     => $this->kecamatan->getAll(),
                'kelurahan'        => $this->kelurahan->get($peserta['id_kelurahan']),
                'satuan_kerja'  => $this->satuankerja->getAll(),
                'content'       => 'peserta/edit'
            ];
            $this->load->view('template/master', $data);
        } else {

            $peserta = $this->peserta->getById($id);
            $foto = $peserta['foto'];
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
                    $peserta['foto'] != 'default.png' ?  unlink('assets/foto/' . $peserta['foto']) : false;
                    $foto = $this->upload->data('file_name');
                }
            }
            $data = [
                'nik'               => $this->input->post('nik'),
                'nama'              => $this->input->post('nama'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                // 'kecamatan'         => $this->input->post('kecamatan'),
                'id_kelurahan'         => $this->input->post('kelurahan'),
                'rw-dusun'          => $this->input->post('rwdusun'),
                'rt'                => $this->input->post('rt'),
                'detail_alamat'     => $this->input->post('detail_alamat'),
                'no_hp'             => $this->input->post('no_hp'),
                'email'             => $this->input->post('email'),
                'foto'              => $foto,
                'tgl_lahir'         => $this->input->post('tgl_lahir'),
                'tempat_lahir'      => $this->input->post('tempat_lahir'),
                'pendidikan_terakhir'      => $this->input->post('pendidikan_terakhir')
            ];
            $update = $this->peserta->edit($data, $id);
            if ($update > 0) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil update data peserta</div>'
                );
                redirect('peserta');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Terjadi kesalahan, silahkan hub admin</div>'
                );
                redirect('peserta');
            }
        }
    }

    public function nilai($id)
    {
        $peserta = $this->peserta->getById($id);
        $this->form_validation->set_rules('sertifikasi', 'Sertifikasi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'         => 'SI Dadu',
                'page'          => 'Peserta',
                'sub_page'      => 'Edit',
                'sidebar_nama'   => $this->login_nama,
                'peserta'       => $peserta,
                'content'       => 'peserta/nilai'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                // 'hasil_pelatihan'   => $this->input->post('hasil_pelatihan'),
                'sertifikasi'   => $this->input->post('sertifikasi')
                // 'penyerapan_lulusan'   => $this->input->post('penyerapan_lulusan')
            ];
            $update = $this->peserta->edit($data, $id);
            if ($update > 0) {

                alert('success', 'Berhasil menambah data nilai');
                redirect('peserta');
            } else {

                alert('danger', 'Terjadi kesalahan pada server, silahkan hub admin');
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
                $satker = $this->kejuruan->getBySatkerId($satuan_kerja_id);
                foreach ($this->pelatihan->getByKejuruanId($satker['id_kejuruan']) as $row) {
                    $output .= '<option value="' . $row['id_pelatihan'] . '">' . $row['pelatihan'] . ' - ' . $row['tgl_awal'] . ' - ' . $row['lokasi'] . '</option>';
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
                $output .= '<option value="' . $row['id_pelatihan'] . '">' . $row['pelatihan'] . ' - ' . $row['tgl_awal'] . ' - ' . $row['lokasi'] . '</option>';
            }
            echo $output;
        }
    }
    public function pilihkelurahan()
    {
        if ($this->input->post('action') == 'kelurahan') {
            if ($this->input->post('id_kecamatan')) {
                $output = '<option value="" selected="true" disabled>-- Pilih Kelurahan --</option>';
                $id_kecamatan = $this->input->post('id_kecamatan');
                foreach ($this->kelurahan->getByIdKecamatan($id_kecamatan) as $row) {
                    $output .= '<option value="' . $row['id_kelurahan'] . '">' . $row['kelurahan'] . '</option>';
                }
                echo $output;
            }
        }
    }
}
