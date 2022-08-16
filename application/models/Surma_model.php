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

    function dispoKTU($idnya)
    {
        $isDispo = [
            'is_dispo' => 'true',
        ];

        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispo);
        $query = $this->db->get();

        if (!$query->result()) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambahDispoKtu($isiDispoKtu)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_dispo', $isiDispoKtu);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;

        // $isDispo = [
        //     'id' => 100,
        // ];
        // $this->db->replace('surat_masuk', $isDispo);


        // $this->db->where('id', $idnya);
        // $this->db->update('surat_masuk', $isDispo);

        // return $this->db->affected_rows();
    }
    function updateStatus($idnya)
    {
        $isDispo = [
            'id' => 100,
        ];
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispo);

        return $this->db->affected_rows();
    }
}
