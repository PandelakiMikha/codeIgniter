<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

    public function kirim_surat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        $data['judul'] = 'User Home';
        $this->load->view('templates/header', $data);
        $this->load->view('user/kirim_surat', $data);
        $this->load->view('templates/footer');
    }

    public function tampilanHome_user()
    {
        $getdata = $this->user_m->getdatadaerah();
        $data['data_daerah'] = $getdata;
        $data['judul'] = 'Home User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('user/tampilanHome_user', $data);
        $this->load->view('templates/datatables');
        $this->load->view('templates/footer');
    }

    // public function user_surat_kel()
    // {
    //     $data['judul'] = 'Home User';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar_user');
    //     $this->load->view('user/user_surat_kel', $data);
    //     // $this->load->view('templates/datatables');
    //     $this->load->view('templates/footer');
    // }
}
