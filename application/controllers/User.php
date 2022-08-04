<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->model('Serverside_model');
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
        $data['totals'] = $this->Serverside_model->count_all_data();

        // $data = [
        //     "Daerah" => $this->input->post('daerah', true),
        //     "Perangkat" => $this->input->post('perangkat_daerah2', true),
        //     "Jenis_perangkat" => $this->input->post('daftar_dinal', true),
        //     "UPTD" => $this->input->post('uptd', true),
        //     "Jenis_surat" => $this->input->post('jenis_surat', true),
        //     "Lainya" => $this->input->post('lainya', true),
        //     "Perihal" => $this->input->post('perihal', true),
        //     "Nama_file" => $this->input->post('nama_file', true),
        // ];

        // $this->db->insert('surat_masuk_user', $data);
        // redirect('User/tampilanHome_user');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/tampilanHome_user');
        $this->load->view('templates/datatables');
        $this->load->view('templates/footer');
    }

    //untuk menangkap data daerah yang yang di lemparkan dari User_m.php
    public function getDataPerangkat()
    {
        $id_daerah = $this->input->post('daerah');

        $ambilDaerah = $this->User_m->ambilDaerah($id_daerah);

        echo json_encode($ambilDaerah);
    }

    //untuk menangkap data dinas yang yang di lemparkan dari User_m.php
    public function getDataDinas()
    {
        $id_dinas = $this->input->post('dinas');

        $ambilDinas = $this->User_m->ambilDinas($id_dinas);

        echo json_encode($ambilDinas);
    }


    public function user_surat_kel()
    {
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['judul'] = 'Home User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/user_surat_kel', $data);
        $this->load->view('templates/U_table_suratKel');
        $this->load->view('templates/footer');
    }
}
