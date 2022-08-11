<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{

    var $table = 'surat_masuk_user';
    var $column_order = array('id', 'Perihal', 'Jenis_surat', 'No_agenda', 'Nama_file');
    // var $order = array('id', 'sender', 'type', 'date_sended', 'regarding', 'daerah_id', 'perangkat_daerah_id');


    public function select()
    {
        //data is retrive from this query  
        $query = $this->db->get('surat_kel_user');
        return $query;
    }

    //untuk insert data kedalam table surat_masuk.....
    function input_data($data)
    {
        $this->db->insert('surat_masuk', $data);
        return true;
    }
    //untuk menampilkan data daerah yang ada dalam database....
    // function getdataDaerah()
    // {
    //     $query = $this->db->query("SELECT * FROM daerah ORDER BY name ASC");

    //     return $query->result();
    // }

    //untuk mengambil data perangkat daerah...
    // public function ambilDaerah($id_daerah)
    // {
    //     $query = $this->db->get_where('perangkat_daerah', ['daerah_id' => $id_daerah])->result_array();

    //     return $query;
    // }

    //untuk megambil data dinas/badan/setda.....
    // public function ambilDinas($id_dinas)
    // {
    //     $query = $this->db->get_where('dinas', ['id_perangkat_daerah' => $id_dinas])->result_array();

    //     return $query;
    // }

    //model untuk pilih jenis surat
    function getSuratData()
    {
        $query = $this->db->query("SELECT * FROM jenis_surat ORDER BY name ASC");

        return $query->result();
    }

    //----------------------------------------------------
    //untuk model yang di ambil dari severside model.....
    //----------------------------------------------------

    private function _get_data_query1()
    {
        // if ( != 0) {
        //     // var_dump( $this->db->get_where('surat_masuk', ['daerah_id' => ])->result_array()); die;
        //     var_dump('ayaya');
        //     die;
        // }
    }

    //private function untuk surat masuk user.....
    private function _get_data_query()
    {
        // var_dump('ayayas'); die;
        // $filter = $this->input->post('daerah');
        // var_dump($filter);
        // if ($filter = 1) {
        //     $this->db->like('daerah_id', $filter);
        // }
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])) {
            $this->db->like('Perihal', $_POST['search']['value']);
            $this->db->or_like('Jenis_surat', $_POST['search']['value']);
            $this->db->or_like('No_agenda', $_POST['search']['value']);
            // $this->db->or_like('Nama_file', $_POST['search']['value']);
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('Nama_file', 'ASC');
        }
    }



    //public function untuk mengambil data dari table surat masuk user...
    public function getDataSurat()
    {
        $this->_get_data_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }





    public function count_filtered_data()
    {
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }



    //

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    //



    // public function getDataDaerah()
    // {
    //     $this->db->order_by("name", "asc");
    //     $query = $this->db->get('daerah');

    //     return $query->result();
    // }

    // public function getDaerah($id_daerah)
    // {
    //     // $this->db->order_by("name", "asc");
    //     $query = $this->db->get_where('perangkat_daerah', ['daerah_id' => $id_daerah])->result_array();

    //     return $query;
    // }

}
