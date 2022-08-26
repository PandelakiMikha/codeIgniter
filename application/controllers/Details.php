<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller
{
    public function getDetails($idnya, $is_dispo_karo)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ttd_karo'] = $is_dispo_karo;
        $data['id'] = $idnya;

        $this->load->view('Admin/Disposisi/detail', $data);
    }
}
