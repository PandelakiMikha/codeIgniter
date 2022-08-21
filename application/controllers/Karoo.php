<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karoo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surma_model');
        $this->load->model('User_model');
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
        $data['judul'] = "Karo Disposisi";
        $data['surat'] = $this->surma_model->dataSuratM();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();

        $bawahan = 1;

        $data['user_biro'] = $this->User_model->getUserBiro($bawahan);
        // var_dump($data['user_biro']);
        // die;

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

    public function dispoKaro()
    {
        $idnya = $this->input->post('idnya');

        $result = $this->surma_model->dispoKaro($idnya);

        if ($result == false) {
            echo (json_encode(array('status' => FALSE)));
        } else {
            echo (json_encode($result[0]));
        }
    }

    public function push_dispo_karo()
    {
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('mengharapkan', 'Mengharapkan', 'trim|required|max_length[30]|xss_clean');
        $this->form_validation->set_rules('catKaro', 'CatKaro', 'trim|required|max_length[256]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $idnya              = $this->input->post('dKaro_id');
            $tujuan             = $this->input->post('tujuan');
            $mengharapkan       = $this->input->post('mengharapkan');
            $catKaro            = $this->input->post('catKaro');

            $isiDispoKaro = [
                'tujuan_karo'       => $tujuan,
                'mengharapkan'      => $mengharapkan,
                'catKaro'           => $catKaro,
            ];

            $result = $this->surma_model->tambahDispoKaro($isiDispoKaro, $idnya);
            $update = $this->surma_model->updateStatusKaro($idnya, $tujuan);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
