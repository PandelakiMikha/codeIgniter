<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Dispo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'User Home';
        $data['totals'] = $this->Serverside_model->count_all_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('dispo/index');
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
}
