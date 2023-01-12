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
        $data['num_pesan'] = 1;

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
        $data['surat'] = $this->surma_model->dataSuratD();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['num_pesan'] = 2;

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

    // public function track_log($idnya)
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['log'] = $this->surma_model->track_log($idnya);

    //     $this->load->view('Admin/Disposisi/lihat', $data);
    // }

    public function getKaroTtd($is_dispo_karo)
    {
        $data['ttd_karo'] = $is_dispo_karo;

        $this->load->view('Admin/Disposisi/detail', $data);
    }

    public function arsip()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['judul'] = 'Arsip';
        $data['year'] = $this->surma_model->get_year();
        $data['num_pesan'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('arsip/index.php');
        $this->load->view('templates/footer');
    }

    public function filterArsip($year, $month)
    {
        $data['surat'] = $this->surma_model->getArsip($year, $month);
        // print_r($data['surat']);

        $this->load->view('arsip/result', $data);
    }

    public function filterArsipKeluar($year, $month)
    {
        $data['surat'] = $this->surma_model->getArsipKeluar($year, $month);
        // print_r($data['surat']);

        $this->load->view('arsip/surkel', $data);
    }

    public function arsip_surat_kel()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['judul'] = 'Arsip';
        $data['year'] = $this->surma_model->get_year();
        $data['num_pesan'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('arsip/surat_keluar.php');
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
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|max_length[50]|xss_clean');
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
            // var_dump($isiDispoKaro);
            // die;

            $result = $this->surma_model->tambahDispoKaro($isiDispoKaro, $idnya);
            $update = $this->surma_model->updateStatusKaro($idnya, $tujuan);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }

            echo 'berhasil';
        }
    }

    public function tambah_user()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama pengguna harus diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Email tidak sesuai',
            'is_unique' => 'Email ini sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Kata sandi harus diisi',
            'min_length' => 'Password harus lebih dari 3 karakter',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Kata sandi harus diisi',
        ]);

        if ($this->form_validation->run() == false) {

            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['totals'] = $this->surma_model->count_all_data();
            $data['year'] = $this->surma_model->get_year();
            $data['num_pesan'] = 2;
            $data['judul'] = "Tambah User";

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('admin/tambah_user/index.php');
            $this->load->view('templates/footer');
        } else {



            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 5,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">User Berhasil di Tambahkan</div>');
            redirect('Karoo/tambah_user');
        }
    }
}
