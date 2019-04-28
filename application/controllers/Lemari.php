<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lemari_model');
    }

    public function index()
    {
        if ($_SESSION['logged_in'] != TRUE) {
            redirect('login','refresh');
        } 
        else {
            $data['konten'] = "data_lemari";
            $data['lemari'] = $this->Lemari_model->getLemari();
            $this->load->view('template', $data);
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('no_lemari', 'no_lemari', 'required');

        $data = array(
            'no_lemari' => $this->input->post('no_lemari')
        );

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Lemari_model->tambahLemari($data);
            redirect('lemari/index','refresh');
        } else {
            $this->session->set_flashdata('message', 'gagal tambah data');
            redirect('barang/index');
        }
    }

    public function delete($id)
    {
        $this->Lemari_model->delete($id);
        redirect('lemari','refresh');
    }

}

/* End of file Lemari.php */
