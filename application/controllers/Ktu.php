<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Ktu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('surat_masuk/index');
        $this->load->view('templates/footer');
    }


    public function kirim_surat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kirim Surat';
        $data['totals'] = $this->Serverside_model->count_all_data();
        $data['data_daerah'] = $this->Serverside_model->getDataDaerah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('ktu_kirim_surat/index');
        $this->load->view('templates/footer');
    }

    public function getData()
    {
        $results = $this->Serverside_model->getDataSurat();
        $data = [];
        foreach ($results as $result) {
            $row = array();
            $row[] = $result->sender;
            $row[] = $result->type;
            $row[] = $result->regarding;
            $row[] = $result->date_sended;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Serverside_model->count_all_data(),
            "recordsFiltered" => $this->Serverside_model->count_filtered_data(),
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