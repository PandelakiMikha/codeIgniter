<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madm extends CI_Model
{
    function show_users()
    {
        $query = $this->db->get('user');
        $query_result = $query->result();
        return $query_result;
    }

    function show_user_id($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_pass($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
