<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serverside_model extends CI_Model
{
    var $table = 'surat_masuk';
    var $column_order = array('id', 'sender', 'type', 'date_sended', 'regarding');
    var $order = array('id', 'sender', 'type', 'date_sended', 'regarding');

    private function _get_data_query1($val_daerah){
        if($val_daerah != 0)
        {
            // var_dump( $this->db->get_where('surat_masuk', ['daerah_id' => $val_daerah])->result_array()); die;
            var_dump('ayaya'); die;
        }
    }

    private function _get_data_query()
    {
        // var_dump('ayayas'); die;
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])) {
            $this->db->like('sender', $_POST['search']['value']);
            $this->db->or_like('type', $_POST['search']['value']);
            $this->db->or_like('date_sended', $_POST['search']['value']);
            $this->db->or_like('regarding', $_POST['search']['value']);
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('date_sended', 'ASC');
        }
    }

    public function getDataSurat($val_daerah)
    {
        // var_dump($val_daerah); die;
        $this->_get_data_query();
        $this->_get_data_query1($val_daerah);
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

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function getDataDaerah()
    {
        $this->db->order_by("name", "asc");
        $query = $this->db->get('daerah');

        return $query->result();
    }

    public function getDaerah($id_daerah)
    {
        // $this->db->order_by("name", "asc");
        $query = $this->db->get_where('perangkat_daerah', ['daerah_id' => $id_daerah])->result_array();

        return $query;
    }
}
