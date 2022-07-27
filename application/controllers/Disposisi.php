<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi extends CI_Controller
{
    // kase nama fungsi show_daftar_dispo
    public function index()
    {
        $this->load->view('disposisi/header');
        $this->load->view('templates/sidebar');
        $this->load->view('disposisi/disposisi');
        $this->load->view('disposisi/footer');
    }
}
