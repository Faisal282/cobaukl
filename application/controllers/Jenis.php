<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jenis_barang_model');
    }

    public function index()
    {
        if ($_SESSION['logged_in'] != TRUE) {
            redirect('login','refresh');
        } 
        else {
            $data['konten'] = "jenis_barang";
            $data['jenis'] = $this->Jenis_barang_model->getJenisBarang();
            $this->load->view('template', $data);
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_jenis', 'nama_jenis', 'required');

        $data = array(
            'nama_jenis' => $this->input->post('nama_jenis'),
        );

        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Jenis_barang_model->tambahJenisBarang($data);
            redirect('jenis/index','refresh');
        } else {
            $this->session->set_flashdata('message', 'gagal tambah data');
            redirect('jenis/index');
        }
    }

    public function delete($id)
    {
        $this->Jenis_barang_model->delete($id);
        redirect('jenis','refresh');
    }

}

/* End of file Jenis.php */
