<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_model extends CI_Model {

    public function getPinjaman()
    {
        $query = $this->db->select('*')
        ->from('data_pinjaman')
        ->join('data_barang', 'data_barang.id_barang = data_pinjaman.id_barang')
        ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
        ->join('user', 'user.id_user = data_pinjaman.id_peminjam')
        ->get()
        ->result();

        return $query;
    }

    public function tambahPinjaman($data)
    {
        $this->db->insert('data_pinjaman', $data);
        $this->session->set_flashdata('messages', 'berhasil tambah data');
    }

}

/* End of file Pinjaman_model.php */
