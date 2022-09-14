<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ktu extends CI_Controller
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

    public function surat_keluar()
    {
        $data['judul'] = "Surat Keluar";
        $data['surat'] = $this->surma_model->dataSuratK();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data_surkel();
        $data['num_pesan'] = 1;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view("Admin/Surat_Keluar/surat_keluar", $data, NULL);
        $this->load->view('templates/footer');
    }

    public function kirim_surat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['judul'] = 'Kirim Surat';
        $data['num_pesan'] = 2;

        $data['data_user'] = $this->User_model->getUser();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('ktu_kirim_surat/index');
        $this->load->view('templates/footer');
    }

    public function kirim_surat_ktu()
    {
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('nomorAgenda', 'NomorAgenda', 'trim|required|max_length[25]|xss_clean');
        // $this->form_validation->set_rules('jenisSurat', 'JenisSurat', 'trim|required|max_length[20]|xss_clean');
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|max_length[256]|xss_clean');
        // $this->form_validation->set_rules('perihal', 'perihal', 'trim|required|max_length[256]|xss_clean');
        // $this->form_validation->set_rules('pilihTujuan', 'pilihTujuan', 'trim|required|max_length[30]|xss_clean');
        // $this->form_validation->set_rules('File_name', 'file_name', 'required');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('File_name')) {
            // var_dump($config);
            // die;
            $this->kirim_surat();
        } else {
            $no_agenda    = $this->input->post('no_agenda');
            $no_agenda     = $this->input->post('jenis_surat');
            $keterangan     = $this->input->post('keterangan');
            $perihal        = $this->input->post('perihal');
            $tujuan    = $this->input->post('tujuan');
            $File_name      = $this->input->post('File_name');

            $data = [
                'nomorAgenda'       => $no_agenda,
                'jenisSurat'        => $no_agenda,
                'perihal'        => $perihal,
                'keterangan'    => $keterangan,
                'pilihTujuan'    => $tujuan,
                'File_name'    => $File_name,
                'date_sended'  => date('Y-m-d'),
                'year' => date('Y'),
                'month' => date('m'),

            ];


            $upload_data = $this->upload->data();
            //mengambil file_name...
            $data['File_name'] = $upload_data['file_name'];
            //untuk kirim ke database..
            $result = $this->surma_model->kirimSuratKtu($data, 'surat_keluar');

            if ($result) {
                redirect('ktu/upload_success');
            } else {
                echo "Gagal";
            }
        }

        // if ($this->form_validation->run() == FALSE) {
        //     echo "Upload asdf";
        //     print_r($this->input->post('File_name'));
        // } else {

        //     $nomorAgenda    = $this->input->post('nomorAgenda');
        //     $jenisSurat     = $this->input->post('jenisSurat');
        //     $keterangan     = $this->input->post('keterangan');
        //     $perihal        = $this->input->post('perihal');
        //     $pilihTujuan    = $this->input->post('pilihTujuan');
        //     $File_name      = $_FILES['File_name'];
        //     if ($File_name == '') {
        //     } else {
        //         $config['upload_path']  = '../../assets/suratKeluar';
        //         $config['allowed_types']  = 'jpg|png';

        //         $this->load->library('upload', $config);
        //         if (!$this->upload->do_upload('File_name')) {
        //             echo "Upload gagal";
        //             die();
        //         } else {
        //             $File_name = $this->upload->data('file_name');
        //         }
        //     }

        //     $isiSurat = [
        //         'nomorAgenda'       => $nomorAgenda,
        //         'jenisSurat'        => $jenisSurat,
        //         'perihal'        => $perihal,
        //         'keterangan'    => $keterangan,
        //         'pilihTujuan'    => $pilihTujuan,
        //         'File_name'    => $File_name,

        //     ];

        //     $result = $this->surma_model->kirimSuratKtu($isiSurat, 'surat_keluar');
        //     if ($result > 0) {
        //         echo (json_encode(array('status' => TRUE)));
        //     } else {
        //         echo (json_encode(array('status' => FALSE)));
        //     }
        // }
    }

    public function upload_success()
    {
        $getsurat = $this->user_m->getSuratData();
        $data['jenis_surat'] = $getsurat;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['totals'] = $this->surma_model->count_all_data();
        $data['num_pesan'] = 2;
        $error = array('error' => $this->upload->display_errors());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data, $error);
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/upload_success');
        $this->load->view('templates/footer');
    }

    public function disposisi()
    {
        $data['judul'] = "KTU Disposisi";
        $data['surat'] = $this->surma_model->dataSuratD();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totals'] = $this->surma_model->count_all_data();
        $data['num_pesan'] = 'true';

        $bawahan = 3;
        $data['user_biro'] = $this->User_model->getUserBiro($bawahan);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view("Admin/Disposisi/disposisi", $data, NULL);
        $this->load->view('templates/footer');
    }

    public function getKaroTtd($is_dispo_karo)
    {
        $data['ttd_karo'] = $is_dispo_karo;

        $this->load->view('Admin/Disposisi/details', $data);
    }

    public function detailDispo()
    {
        $idnya = $this->input->post('idnya');
        $data['disposisi'] = $this->surma_model->getDataDisposisi();
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

    public function filterArsipKeluar($year, $month)
    {
        $data['surat'] = $this->surma_model->getArsipKeluar($year, $month);
        // print_r($data['surat']);

        $this->load->view('arsip/surkel', $data);
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
                'surat_masuk_id' => $idnya,
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

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }

    public function dispoKtu1()
    {
        $idnya = $this->input->post('idnya');

        $result = $this->surma_model->dispoKtu1($idnya);

        if ($result == false) {
            echo (json_encode(array('status' => FALSE)));
        } else {
            echo (json_encode($result[0]));
        }
    }

    public function push_dispo_ktu1()
    {
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|max_length[20]|xss_clean');
        $this->form_validation->set_rules('catKtu1', 'CatKtu1', 'trim|required|max_length[256]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $idnya              = $this->input->post('dKtu1_id');
            $tujuan             = $this->input->post('tujuan');
            $catKtu1            = $this->input->post('catKtu1');

            $isiDispoKtu1 = [
                'tujuan_ktu'       => $tujuan,
                'catKtu1'           => $catKtu1,
            ];

            $result = $this->surma_model->tambahDispoKtu1($isiDispoKtu1, $idnya);
            $update = $this->surma_model->updateStatusKtu1($idnya, $tujuan);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
    