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

    public function getBarangById($id)
    {
        return $this->db
        ->select('*')
        ->from('data_barang')
        ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
        ->join('lemari', 'lemari.id_lemari = data_barang.lemari')
        ->where('id_barang', $id)
        ->get()
        ->result();
    }

    public function tambahBarang($data)
    {
        return $this->db->insert('data_barang', $data);
    }

    public function editBarang($id)
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'lemari' => $this->input->post('lemari')
        );
        $this->db->where('id_barang', $id);
        $this->db->update('data_barang', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('data_barang', array('id_barang' => $id));
    }


}

/* End of file Barang_model.php */
