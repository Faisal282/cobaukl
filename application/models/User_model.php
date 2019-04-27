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

}

/* End of file User_model.php */
