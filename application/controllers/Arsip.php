<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['judul'] = 'Arsip';
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('arsip/index.php');
        $this->load->view('templates/footer');
    }


    public function arsip_surat_masuk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Lampiran Arsip';
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar');
        $this->load->view('lampiran_arsip/index');
        $this->load->view('templates/footer');
    }
}
