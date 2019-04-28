<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Lemari_model');
        $this->load->model('Jenis_barang_model');
    }

    public function index()
    {
        if ($_SESSION['logged_in'] != TRUE) {
            redirect('login','refresh');
        } 
        else {
            $data['konten'] = "data_barang";
            $data['barang'] = $this->Barang_model->getBarang();
            $data['lemari'] = $this->Lemari_model->getLemari();
            $data['jenis'] = $this->Jenis_barang_model->getJenisBarang();
            $this->load->view('template', $data);
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'jenis_barang', 'required');
        $this->form_validation->set_rules('lemari', 'lemari', 'required');

        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'lemari' => $this->input->post('lemari')
        );

        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Barang_model->tambahBarang($data);
            redirect('barang/index','refresh');
        } else {
            $this->session->set_flashdata('message', 'gagal tambah data');
            redirect('barang/index');
        }
    }

    public function edit($id)
    {
        $data['jenis_barang'] = $this->Jenis_barang_model->getJenisBarang();
        $data['lemari'] = $this->Lemari_model->getLemari();
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('edit_barang', $data);

        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'jenis_barang', 'required');
        $this->form_validation->set_rules('lemari', 'lemari', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Barang_model->editBarang($id);
            redirect('barang/index','refresh');
        } 
    }

    public function delete($id)
    {
        $this->Barang_model->delete($id);
        redirect('barang','refresh');
    }

}

/* End of file Barang.php */
