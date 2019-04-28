<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUser()
    {
        return $this->db->select('*')
        ->from('user')
        ->where('level !=', 2)
        ->get()
        ->result();
    }

    public function getUserById($id)
    {
        return $this->db->select('*')
        ->from('user')
        ->where('id_user', $id)
        ->get()
        ->result();
    }

    public function tambahUser($data)
    {
       return $this->db->insert('user', $data);
    }

    public function editUser($id)
    {
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );
        $this->db->where('id_user', $id);
        return $this->db->update('user', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('user', array('id_user' => $id));
    }
}

/* End of file User_model.php */
