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
        $this->load->model('surma_model');
    }

    public function index()
    {
        $getsurat = $this->user_m->getSuratData();
        $data['jenis_surat'] = $getsurat;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['totals'] = $this->user_m->count_all_data();
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data, $error);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/U_table_suratMasuk', $data);
        $this->load->view('templates/footer');
    }

    public function kirim_surat()
    {
        //form validation

        // $this->form_validation->set_rules('type', 'Type', 'required');
        // $this->form_validation->set_rules('date_sended', 'Date_sended', 'required');
        // $this->form_validation->set_rules('regarding', 'Regarding', 'required');
        // $this->form_validation->set_rules('File_name', 'file_name', 'required');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);


        // if ($this->form_validation->run() == FALSE) {
        if (!$this->upload->do_upload('File_name')) {
            $getsurat = $this->user_m->getSuratData();

            $data['jenis_surat'] = $getsurat;
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Dashboard';
            $data['totals'] = $this->surma_model->count_all_data();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('user/kirim_surat', $data);
            $this->load->view('templates/footer');
        } else {


            $type   = $this->input->post('type');
            $date_sended   = $this->input->post('date_sended');
            $regarding   = $this->input->post('regarding');
            $File_name  = $this->input->post('File_name');
            $sender  = $this->input->post('sender');

            $data = array(
                'type' => $type,
                'date_sended' => $date_sended,
                'regarding' => $regarding,
                'File_name' => $File_name,
                'sender' => $sender,
                'is_done_dispo' => 'false',
                'is_dispo' => 'false',
            );


            $upload_data = $this->upload->data();
            //mengambil file_name... 
            $data['File_name'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $insert = $this->user_m->input_data($data, 'surat_masuk');

            if ($insert) {
                redirect('User/upload_success');
            } else {
                echo "Gagal";
            }
        }
    }

    public function upload_success()
    {
        $getsurat = $this->user_m->getSuratData();
        $data['jenis_surat'] = $getsurat;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['totals'] = $this->surma_model->count_all_data();
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data, $error);
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/upload_success');
        $this->load->view('templates/footer');
    }

    //function untuk mendownload surat....
    function download($id)
    {
        $data = $this->db->get_where('surat_masuk', ['id' => $id])->row();
        force_download('uploads/' . $data->File_name, NULL);
    }


    public function user_surat_kel()
    {
        $getsurat = $this->user_m->getSuratData();
        $data['jenis_surat'] = $getsurat;

        $data['judul'] = "Dashboard";
        $data['surat'] = $this->surma_model->dataSuratKelUser();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

        $error = array('error' => $this->upload->display_errors());


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data, $error);
        $this->load->view('templates/navbar', $data);
        $this->load->view("templates/U_table_suratKel", $data, NULL);
        $this->load->view('templates/footer');
    }


    //function untuk data table surat masuk......
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
}
