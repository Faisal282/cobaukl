<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari_model extends CI_Model {

    public function getLemari()
    {
        return $this->db->get('lemari')->result();
    }

    public function tambahLemari($data)
    {
        return $this->db->insert('lemari', $data);
    }

    public function delete($id)
    {
        $this->db->delete('lemari', array('id_lemari' => $id));
    }

}

/* End of file Lemari_model.php */
