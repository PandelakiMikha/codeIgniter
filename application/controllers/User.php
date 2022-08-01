<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
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
        $getdata = $this->User_m->getdataDaerah();
        $getsurat = $this->User_m->getdataSurat();
        $data['jenis_surat'] = $getsurat;
        $data['daerah_data'] = $getdata;
        $data['judul'] = 'Home User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('user/tampilanHome_user');
        // $this->load->view('templates/datatables');
        $this->load->view('templates/footer');
    }

    public function getDataPerangkat()
    {
        $id_daerah = $this->input->post('daerah');
        // $id_perangkat_daerah = $this->input->post('perangkatDaerah');

        $ambilDaerah = $this->User_m->ambilDaerah($id_daerah);

        echo json_encode($ambilDaerah);
    }

    //untuk dinas
    public function getDataDinas()
    {
        $id_dinas = $this->input->post('dinas');


        $ambilDinas = $this->User_m->ambilDinas($id_dinas);

        echo json_encode($ambilDinas);
    }


    public function user_surat_kel()
    {
        $data['judul'] = 'Home User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('user/user_surat_kel', $data);
        // $this->load->view('templates/datatables');
        $this->load->view('templates/footer');
    }
}
