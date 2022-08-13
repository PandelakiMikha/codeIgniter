<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surma_model extends CI_Model
{

    function dataSuratM()
    {
        $query = $this->db->get_where('surat_masuk', ['sender' => 'Kemenpan']);

        return $query->result();
    }
}
