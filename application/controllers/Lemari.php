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

}

/* End of file Lemari.php */
