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
    // public function ups()
    // {
    //     $getsurat = $this->user_m->getSuratData();
    //     $data['jenis_surat'] = $getsurat;
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['judul'] = 'Dashboard';
    //     $data['totals'] = $this->user_m->count_all_data();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar_user', $data);
    //     $this->load->view('templates/navbar', $data);
    //     $this->load->view('user/kirim_surat', array('error' => ' '), $data);
    //     $this->load->view('templates/footer');
    // }

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
            //get the uploaded file name
            $data['File_name'] = $upload_data['file_name'];
            //store pic data to the db
            $insert = $this->user_m->input_data($data, 'surat_masuk');

            // $this->user_m->input_data($data, 'surat_masuk');
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('user/upload_success', $data);
            // redirect('User/kirim_surat');
            if ($insert) {
                redirect('User/kirim_surat');
            } else {
                echo "Gagal";
            }
            // echo 'Added successfully.';

        }
    }

    //fungsi untuk mengupload surat user.....
    // public function do_upload()
    // {
    //     $config['upload_path']          = './uploads/';
    //     $config['allowed_types']        = 'gif|jpg|png|pdf';
    //     $config['max_size']             = 2000;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload');
    //     $this->upload->initialize($config);


    //     if (!$this->upload->do_upload('File_name')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->kirim_surat($error);
    //     } else {
    //         // $upload_data = $this->upload->data();
    //         // $data = $upload_data['File_name'];

    //         // $insert = $this->user_m->input_data($data);
    //         $data = array('upload_data' => $this->upload->data());

    //         $this->load->view('user/upload_success', $data);

    //         //         $this->load->view('user/upload_success', $data);
    //         // if ($insert) {
    //         //     redirect('User/kirim_surat');
    //         // } else {
    //         //     echo "Gagal";
    //         // }
    //     }
    // }

    // public function upload_file()
    // {
    //     $status = "";
    //     $msg = "";
    //     $file_element_name = 'File_name';

    //     if (empty($_POST['File_name'])) {
    //         $status = "error";
    //         $msg = "Please enter a title";
    //     }

    //     if ($status != "error") {
    //         $config['upload_path'] = './uploads/';
    //         $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
    //         $config['max_size'] = 1024 * 8;
    //         $config['encrypt_name'] = TRUE;

    //         $this->load->library('upload', $config);

    //         if (!$this->upload->do_upload($file_element_name)) {
    //             $status = 'error';
    //             $msg = $this->upload->display_errors('', '');
    //         } else {
    //             $data = $this->upload->data();
    //             $file_id = $this->user_model->input_data($data['File_name'], $_POST['File_name']);
    //             if ($file_id) {
    //                 $status = "success";
    //                 $msg = "File successfully uploaded";
    //             } else {
    //                 unlink($data['full_path']);
    //                 $status = "error";
    //                 $msg = "Something went wrong when saving the file, please try again.";
    //             }
    //         }
    //         @unlink($_FILES[$file_element_name]);
    //     }
    //     echo json_encode(array('status' => $status, 'msg' => $msg));
    // }

    // end of file upload

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
        // $data['kode'] = $this->user_m->download();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

        $error = array('error' => $this->upload->display_errors());


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_user', $data, $error);
        $this->load->view('templates/navbar', $data);
        $this->load->view("templates/U_table_suratKel", $data, NULL);
        $this->load->view('templates/footer');
    }

    // public function download($kode)
    // {
    //     $data = $this->db->get_where('surat_masuk', ['id' => $kode])->$row();
    //     force_download('uploads/' . $data->File_name, NULL);
    // }


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

    //function untuk data table surat keluar...
    // public function getDataKel()
    // {
    //     $results = $this->user_m->getDataSuratKel();
    //     $data = [];
    //     foreach ($results as $result) {

    //         $row = array();
    //         $row[] = $result->Perihal;
    //         $row[] = $result->Jenis_surat;
    //         $row[] = $result->Nama_file;
    //         $data[] = $row;
    //     }

    //     $output = array(
    //         "draw" => $_POST['draw'],
    //         "recordsTotal" => $this->user_m->count_all_dataKel(),
    //         "recordsFiltered" => $this->user_m->count_filtered_data(),
    //         "data" => $data,
    //     );

    //     $this->output->set_content_type('application/json')->set_output(json_encode($output));
    // }

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