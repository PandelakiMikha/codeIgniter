<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
        $this->load->model('user_m');
        // $this->load->model('Serverside_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['totals'] = $this->user_m->count_all_data();
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/U_table_suratMasuk', $data);
        $this->load->view('templates/footer');
    }

    //function untuk data table......
    public function getData()
    {
        $results = $this->user_m->getDataSurat();
        $data = [];
        foreach ($results as $result) {

            $row = array();
            $row[] = $result->Perihal;
            $row[] = $result->Jenis_surat;
            $row[] = $result->No_agenda;
            $row[] = $result->Nama_file;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->user_m->count_all_data(),
            "recordsFiltered" => $this->user_m->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getDataPerangkatDaerah()
    {
        $id_daerah = $this->input->post('daerah');
        // $id_perangkat_daerah = $this->input->post('perangkatDaerah');
        // var_dump($id_daerah);
        // die;

        $getDaerah = $this->Serverside_model->getDaerah($id_daerah);

        echo json_encode($getDaerah);
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

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();
        $data['judul'] = 'Home User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user');
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/user_surat_kel', $data);
        $this->load->view('templates/U_table_suratKel');
        $this->load->view('templates/footer');
    }
}


// catatan
// $row[] = '<div class="cuss">
            //             <div>
            //                 <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
            //                     <i class="bi bi-eye"></i>    
            //                     Lihat
            //                 </button>
            //             </div>
            //             <div class="middle">
            //                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            //                     <i class="bi bi-check-circle"></i>    
            //                     Disposisi
            //                 </button>
            //             </div>
            //             <div>
            //                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            //                     <i class="bi bi-file-earmark-text"></i>    
            //                     Detail
            //                 </button>
            //             </div>
            //           </div>';