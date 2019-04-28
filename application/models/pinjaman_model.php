<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_model extends CI_Model {

    public function getPinjaman()
    {
        if ($_SESSION['level'] == 2) {
            $query = $this->db->select('*')
            ->from('data_pinjaman')
            ->join('data_barang', 'data_barang.id_barang = data_pinjaman.id_barang')
            ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
            ->join('user', 'user.id_user = data_pinjaman.id_peminjam')
            ->get()
            ->result();
            return $query;
        } elseif($_SESSION['level'] == 0) {
            $query = $this->db->select('*')
            ->from('data_pinjaman')
            ->join('data_barang', 'data_barang.id_barang = data_pinjaman.id_barang')
            ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
            ->join('user', 'user.id_user = data_pinjaman.id_peminjam')
            ->where('id_peminjam', $_SESSION['id_peminjam'])
            ->get()
            ->result();
            return $query;
        } else {
            $query = $this->db->select('*')
            ->from('data_pinjaman')
            ->join('data_barang', 'data_barang.id_barang = data_pinjaman.id_barang')
            ->join('jenis_barang', 'jenis_barang.id_jenis_barang = data_barang.jenis_barang')
            ->join('user', 'user.id_user = data_pinjaman.id_peminjam')
            ->where('status !=', 2)
            ->get()
            ->result();
            return $query;
        }
    }

    public function getPinjamanById($id)
    {
        return $this->db->select('*')
        ->from('data_pinjaman')
        ->where('id_pinjaman', $id)
        ->get()
        ->result();
    }

    public function tambahPinjaman($data)
    {
        $this->db->insert('data_pinjaman', $data);
        $this->session->set_flashdata('messages', 'berhasil tambah data');
    }

    public function editPinjaman($id)
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_peminjam' => $_SESSION['id_peminjam'],
            'status' => $this->input->post('status'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali')
        );
        $this->db->where('id', $id);
        $this->db->update('data_pinjaman', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('data_pinjaman', array('id_pinjaman' => $id));
    }

    public function konfirmasi($id)
    {
        $data = array(
            'status' => 1
        );
        $this->db->where('id_pinjaman', $id);
        $this->db->update('data_pinjaman', $data);
    }

    public function kembali($id)
    {
        $data = array(
            'status' => 2
        );
        $this->db->where('id_pinjaman', $id);
        $this->db->update('data_pinjaman', $data);
    }
}

/* End of file Pinjaman_model.php */
