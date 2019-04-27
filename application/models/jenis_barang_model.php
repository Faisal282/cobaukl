<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang_model extends CI_Model {

    public function getJenisBarang()
    {
        return $this->db->get('jenis_barang')->result();
    }

}

/* End of file Jenis_barang_model.php */
