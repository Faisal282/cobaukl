<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        if (isset($_SESSION['logged_in'])) {
            if ($_SESSION['logged_in'] != TRUE) {
                redirect('login','refresh');
                $this->load->model('User_model');
            } else {
                $this->load->model('User_model');
            }
        } else {

        }
    }

    public function index()
    {
        $data['konten'] = "daftar_user";
        $data['user'] = $this->User_model->getUser();
        $this->load->view('template', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );

        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->User_model->tambahUser($data);
            redirect('user/index','refresh');
        } else {
            $this->session->set_flashdata('message', 'gagal tambah data');
            redirect('user/index');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('edit_user', $data);

        $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('message', 'berhasil tambah data');
            $this->User_model->editUser($id);
            redirect('user/index','refresh');
        } 
    }
}

/* End of file User.php */
