<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pinjaman_model');
        $this->load->model('Barang_model');
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        if (isset($_SESSION['logged_in']) != true) {
            redirect('login','refresh');
        }
    }


    public function index(){
        $data['konten'] = "pinjaman";
        $data['pinjaman'] = $this->Pinjaman_model->getPinjaman();
        $data['barang'] = $this->Barang_model->getBarang();
        $this->load->view('template', $data);
    } 

    public function add()
    {   
        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'tgl_kembali', 'required');

        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_peminjam' => $_SESSION['id_peminjam'],
            'status' => 1,
            'tgl_pinjam' => date('Y-m-d H:i:s'),
            'tgl_kembali' => $this->input->post('tgl_kembali')
        );

        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Pinjaman_model->tambahPinjaman($data);
            redirect('home/index','refresh');
        } else {
            $this->session->set_flashdata('message', 'gagal tambah data');
            redirect('home/index');
        }
    }

    public function edit($id)
    {
        $data['barang'] = $this->Barang_model->getBarang();
        $data['pinjaman'] = $this->Pinjaman_model->getPinjamanById($id);
        $this->load->view('edit_pinjaman', $data);

        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'tgl_kembali', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->Pinjaman_model->editPinjaman($id);
            redirect('home/index','refresh');
        } 
    }

    public function delete($id)
    {
        $this->Pinjaman_model->delete($id);
        redirect('home','refresh');
    }
}