<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari_model extends CI_Model {

    public function getLemari()
    {
        return $this->db->get('lemari')->result();
    }

}

/* End of file Lemari_model.php */
