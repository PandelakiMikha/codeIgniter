<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serverside_model extends CI_Model
{
    var $table = 'surat_masuk';
    var $column_order = array('id', 'sender', 'type', 'date_sended', 'regarding');
    var $order = array('id', 'sender', 'type', 'date_sended', 'regarding');

    private function _get_data_query()
    {
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

    public function getDataSurat()
    {
        $this->_get_data_query();

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
}
