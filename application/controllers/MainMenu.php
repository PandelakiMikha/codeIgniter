<!-- 

    !!!!! CATATAN
    Ini controller kita dapake cuman for load page disposisi lewat sidebar
 -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainMenu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
    }
    // kase nama fungsi show_daftar_dispo
    public function index()
    {
        $data['totals'] = $this->Serverside_model->count_all_data();

        $data['judul'] = 'Main Menu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/footer');
    }


    public function disposisi()
    {

        $data['totals'] = $this->Serverside_model->count_all_data();

        $data['judul'] = 'Disposisi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('disposisi/disposisi');
        $this->load->view('templates/footer');
    }
}
