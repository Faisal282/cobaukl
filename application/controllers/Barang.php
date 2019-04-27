<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        if ($_SESSION['logged_in'] != TRUE) {
            redirect('login','refresh');
        } 
        else {
            $data['konten'] = "data_barang";
            $data['barang'] = $this->Barang_model->getBarang();
            $this->load->view('template', $data);
        }
    }

}

/* End of file Barang.php */
