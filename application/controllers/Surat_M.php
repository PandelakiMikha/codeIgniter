<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surat_M extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surma_model');
    }
    public function index()
    {

        $data['judul'] = "Surat Masuk";
        $data['belanja'] = $this->surma_model->dataSuratM();

        $this->load->view('templates/header', $data);
        $this->load->view("surat_m/index", $data, NULL);
        $this->load->view('templates/footer');
    }
}
