<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kejuruan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_kejuruan', 'kejuruan');
    }

    public function index()
    {
        $data = [
            'title'         => 'SI Dadu',
            'page'          => 'Kejuruan',
            'sub_page'      => '',
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
                'content'       => 'kejuruan/form'
            ];
            $this->load->view('template/master', $data);
        } else {
            $data = [
                'kejuruan' => $this->input->post('kejuruan')
            ];
            $insert =  $this->kejuruan->add($data);
            if ($insert > 0) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Berhasil menambah kejuruan</div>'
                );
                redirect('kejuruan');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->kejuruan->delete($id);
        if ($delete == true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Berhasil menghapus data kejuruan</div>'
            );
            redirect('kejuruan');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-info" role="alert">Terjadi kesalahan pada server, silahkan hub admin</div>'
            );
            redirect('kejuruan');
        }
    }
}
