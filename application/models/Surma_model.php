<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surma_model extends CI_Model
{

    function dataSuratM()
    {
        $checkUser = $this->session->userdata('role_id');
        $currentUri = current_url();
        $currentDate = date('y-m-d');

        if ($currentUri == 'http://localhost/codeIgniter/karoo' || $currentUri == 'http://localhost/codeIgniter/kabag' || $currentUri == 'http://localhost/codeIgniter/ktu') {
            return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->result();
        } elseif ($checkUser == 4 && $currentUri == 'http://localhost/codeIgniter/jabfung' || $currentUri == 'http://localhost/codeIgniter/jabfung/disposisi') {
            return $query = $this->db->get_where('surat_masuk', ['is_dispo_ktu' => 'true'])->result();
        } else {
            return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();

            var_dump($query);
            die;
        }
    }

    function count_all_data()
    {
        $checkUser = $this->session->userdata('role_id');
        $currentUri = current_url();
        $currentDate = date('y-m-d');

        $query = $this->db->get('surat_masuk')->num_rows();
        if ($currentUri == 'http://localhost/codeIgniter/karoo' || $currentUri == 'http://localhost/codeIgniter/kabag' || $currentUri == 'http://localhost/codeIgniter/ktu') {
            return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->num_rows();
        } elseif ($checkUser == 4 && $currentUri == 'http://localhost/codeIgniter/jabfung' || $currentUri == 'http://localhost/codeIgniter/jabfung/disposisi') {
            return $query = $this->db->get_where('surat_masuk', ['is_dispo_ktu' => 'true'])->num_rows();
        } else {
            return $query = $this->db->get('surat_masuk')->num_rows();
        }

        return $query;
    }
}
