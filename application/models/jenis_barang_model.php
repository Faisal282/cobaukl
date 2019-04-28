<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang_model extends CI_Model {

    public function getJenisBarang()
    {
        return $this->db->get('jenis_barang')->result();
    }

    public function tambahJenisBarang($data)
    {
        return $this->db->insert('jenis_barang', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('jenis_barang', array('id_jenis_barang' => $id));
    }

}

/* End of file Jenis_barang_model.php */
