<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{
    //untuk menampilkan data daerah yang ada dalam database....
    function getdataDaerah()
    {
        $query = $this->db->query("SELECT * FROM daerah ORDER BY name ASC");
        var_dump($query);

        return $query->result();
    }

    //untuk mengambil data perangkat daerah...
    public function ambilDaerah($id_daerah)
    {
        $query = $this->db->get_where('perangkat_daerah', ['daerah_id' => $id_daerah])->result_array();

        return $query;
    }

    //untuk megambil data dinas/badan/setda.....
    public function ambilDinas($id_dinas)
    {
        $query = $this->db->get_where('dinas', ['id_perangkat_daerah' => $id_dinas])->result_array();

        return $query;
    }

    //model untuk pilih jenis surat
    function getdataSurat()
    {
        $query = $this->db->query("SELECT * FROM jenis_surat ORDER BY name ASC");

        return $query->result();
    }
}
