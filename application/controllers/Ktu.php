<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ktu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surma_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
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
        $data['judul'] = "KTU Disposisi";
        $data['surat'] = $this->surma_model->dataSuratM();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

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

    public function dispoKTU()
    {
        $idnya = $this->input->post('idnya');

        $result = $this->surma_model->dispoKTU($idnya);

        if ($result == false) {
            echo (json_encode(array('status' => FALSE)));
        } else {
            echo (json_encode($result[0]));
        }
    }

    public function push_dispo_ktu()
    {
        $this->form_validation->set_rules('suratDari', 'SuratDari', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('tanggalKeluar', 'TanggalKeluar', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('noSurat', 'NoSurat', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('noAgenda', 'NoAgenda', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('tglSurat', 'TglSurat', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('sifatSurat', 'SifatSurat', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('diterima', 'Diterima', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('hal', 'Hal', 'trim|required|max_length[128]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $idnya = $this->input->post('dKtu_id');
            var_dump($idnya);
            die;
            $suratDari    = $this->input->post('suratDari');
            $tanggalKeluar     = $this->input->post('tanggalKeluar');
            $noSurat     = $this->input->post('noSurat');
            $noAgenda = $this->input->post('noAgenda');
            $tglSurat    = $this->input->post('tglSurat');
            $sifatSurat     = $this->input->post('sifatSurat');
            $diterima     = $this->input->post('diterima');
            $status = $this->input->post('status');
            $hal = $this->input->post('hal');

            $isiDispoKtu = [

                'suratDari'     => $suratDari,
                'tanggalKeluar' => $tanggalKeluar,
                'noSurat'       => $noSurat,
                'noAgenda'      => $noAgenda,
                'tglSurat'      => $tglSurat,
                'sifatSurat'    => $sifatSurat,
                'diterima'      => $diterima,
                'status'        => $status,
                'hal'           => $hal

            ];

            $result = $this->surma_model->tambahDispoKtu($isiDispoKtu);
            $update = $this->surma_model->updateStatus($idnya);

            // redirect('ktu');

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
