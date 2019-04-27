<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pinjaman_model');
        $this->load->model('Barang_model');
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    }


    public function index(){
        if ($_SESSION['logged_in'] != TRUE) {
            redirect('login','refresh');
        } 
        else {
            $data['konten'] = "pinjaman";
            $data['pinjaman'] = $this->Pinjaman_model->getPinjaman();
            $data['barang'] = $this->Barang_model->getBarang();
            // var_dump($this->Pinjaman_model->getPinjaman());die;
            $this->load->view('template', $data);
        }
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
}