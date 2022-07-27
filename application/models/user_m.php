<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{
    function getdatadaerah()
    {
        $query = $this->db->query("SELECT * FROM daerah ORDER BY name ASC");

        return $query->result();
        // $query = $this->db->get_where('perangkat_daerah', ['daerah_id' => $id_daerah])->result_array();

        // return $query;
    }
}
