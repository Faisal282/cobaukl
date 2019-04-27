<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function getBarang()
    {
        return $this->db
        ->select('*')
        ->from('data_barang')
        ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
        ->join('lemari', 'lemari.id_lemari = data_barang.lemari')
        ->get()
        ->result();
    }

}

/* End of file Barang_model.php */
