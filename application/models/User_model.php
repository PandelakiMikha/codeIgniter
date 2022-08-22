<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUserBiro($bawahan)
    {
        $checkUserR = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');

        if ($checkUserR == 1) {
            return $query = $this->db->get_where('user', ['bawahan_karo' => $bawahan])->result();
        } elseif ($checkUserR == 2) {
            if ($checkUserN == $checkUserN) {
                return $query = $this->db->get_where('user', ['bawahan_kabag' => $bawahan])->result();
            }
        } elseif ($checkUserR == 3) {
            return $query = $this->db->get_where('user', ['bawahan_ktu' => $bawahan])->result();
        }
    }

    function getUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 5);
        $query = $this->db->get();
        return $query->result();
    }
}
