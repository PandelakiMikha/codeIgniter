<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kabag extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surma_model');
        $this->load->model('User_model');
    }
    public function index()
    {

        // $get = $this->uri->segment(1);
        // var_dump($get);
        // die;

        $data['judul'] = "Surat Masuk";
        $data['surat'] = $this->surma_model->dataSuratM();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view("Admin/Surat_Masuk/surat_masuk", $data, NULL);
        $this->load->view('templates/footer');
    }

    public function disposisi()
    {
        // echo date('y-m-d');
        $data['judul'] = "Kabag Disposisi";
        $data['surat'] = $this->surma_model->dataSuratM();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

        $bawahan = '';
        if ($data['user']['name'] == 'Kepala Bagian Tata Laksana') {
            $bawahan = 1;
        } elseif ($data['user']['name'] == 'Kepala Bagian Kelembagaan dan Anjab') {
            $bawahan = 2;
        } elseif ($data['user']['name'] == 'Kepala Bagian Reformasi Birokrasi') {
            $bawahan = 3;
        }

        $data['user_biro'] = $this->User_model->getUserBiro($bawahan);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view("Admin/Disposisi/disposisi", $data, NULL);
        $this->load->view('templates/footer');
    }

    public function arsip()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['judul'] = 'Arsip';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('arsip/index.php');
        $this->load->view('templates/footer');
    }

    public function dispoKabag()
    {
        $idnya = $this->input->post('idnya');

        $result = $this->surma_model->dispoKabag($idnya);

        if ($result == false) {
            echo (json_encode(array('status' => FALSE)));
        } else {
            echo (json_encode($result[0]));
        }
    }

    public function push_dispo_kabag()
    {
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('catKabag', 'CatKabag', 'trim|required|max_length[256]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $idnya              = $this->input->post('dKabag_id');
            $tujuan             = $this->input->post('tujuan');
            $catKabag            = $this->input->post('catKabag');

            // $data = ['tujuan' => $tujuan];
            // $this->session->set_tujuandata($data);

            $isiDispoKabag = [
                'tujuan_kabag'       => $tujuan,
                'catKabag'           => $catKabag,
            ];

            $result = $this->surma_model->tambahDispoKabag($isiDispoKabag, $idnya);
            $update = $this->surma_model->updateStatusKabag($idnya, $tujuan);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
