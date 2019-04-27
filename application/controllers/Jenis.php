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

}

/* End of file Jenis.php */
