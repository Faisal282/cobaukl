<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cekLogin($data)
    {
        // var_dump($this->db->get('user')->result());die;
        $query = $this->db->get_where('user', array(
            'username' => $data['username'],
            'password' => $data['password']
        ));
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function addUser($data)
    {
        // var_dump($data);die;
        $query = $this->db->insert('user', array(
            'nama_user' => $data['namalengkap'],
            'username' => $data['username'],
            'password' => $data['password']
        ));
        redirect('login/index','refresh');
    }

}

/* End of file Login_model.php */
