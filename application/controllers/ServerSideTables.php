<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServerSideTables extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        $data['judul'] = 'User Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/dataTables');
        $this->load->view('templates/footer');
    }
}
