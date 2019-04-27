<?php

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        if( $this->session->userdata('logged_in') == TRUE ){
            // $this->load->view('login_view');
            redirect('home');
        }else{
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            $this->load->view('login_view');

            if ($this->form_validation->run() == true) {
                $data = [
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                ];
                if ($this->login_model->cekLogin($data) != false) {
                    $query = $this->login_model->cekLogin($data)[0];
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('nama_user', $query['nama_user']);
                    $this->session->set_userdata('username', $query['username']);
                    $this->session->set_userdata('level', $query['level']);
                    $this->session->set_userdata('id_peminjam', $query['id_user']);
                }
                // redirect('user','refresh');
            }
        }
    }
    public function logout()
    {
        unset(
            $_SESSION['logged_in'], 
            $_SESSION['status']
        );
        
        redirect('login/index','refresh');
        
    }
    public function register()
    {
        if( $this->session->userdata('logged_in') == TRUE ){
            // $this->load->view('login_view');
            redirect('user');
        } else {
            $this->load->view('register');

            $this->form_validation->set_rules('namalengkap', 'namalengkap', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            if ($this->form_validation->run() == true) {
                $data = [
                    'namalengkap' => $this->input->post('namalengkap'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                ];
                $this->login_model->addUser($data);
                redirect('index.php/login/index','refresh');
            }
        }
    }
}