<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surma_model extends CI_Model
{

    function dataSuratM()
    {
        $checkUserR = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');
        $checkUserE = $this->session->userdata('email');
        $currentDate = date('Y-m-d');

        if ($checkUserR == 1) {
            return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate, 'is_done_dispo' => 'false',])->result();
        } elseif ($checkUserR == 2) {
            if ($checkUserN == $checkUserN) {
                return $query = $this->db->get_where('surat_masuk', [
                    'dispo_sended' => $currentDate,
                    'penerima_dispo' => $checkUserN,
                    'is_done_dispo' => 'false',
                ])->result();
            }
        } elseif ($checkUserR == 3) {
            $this->db->select('*');
            $this->db->from('surat_masuk');
            $this->db->where(['date_sended' => $currentDate, 'is_done_dispo' => 'false',]);
            $query = $this->db->get();
            return $query->result();

            // return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate, 'is_done_dispo' => 'false',])->result();
        } elseif ($checkUserR == 4) {
            if ($checkUserN == $checkUserN) {
                return $query = $this->db->get_where('surat_masuk', [
                    'dispo_sended' => $currentDate,
                    'is_dispo_ktu' => 'true',
                    'penerima_dispo' => $checkUserN,
                    'is_done_dispo' => 'false',
                ])->result();
            }
        }
    }

    function dataSuratD()
    {
        $checkUserR = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');
        $checkUserE = $this->session->userdata('email');

        if ($checkUserR == 1) {
            $this->db->select('surat_masuk.*, surat_masuk.id as surma_id, tbl_dispo.*');
            $this->db->from('surat_masuk');
            $this->db->where(['is_done_dispo' => 'false']);
            $this->db->join('tbl_dispo', 'tbl_dispo.surat_masuk_id = surat_masuk.id', 'left');
            $query = $this->db->get();
            return $query->result();
        } elseif ($checkUserR == 2) {
            if ($checkUserN == $checkUserN) {
                $this->db->select('surat_masuk.*, surat_masuk.id as surma_id, tbl_dispo.*');
                $this->db->from('surat_masuk');
                $this->db->where([
                    'is_done_dispo' => 'false',
                    'penerima_dispo' => $checkUserN
                ]);
                $this->db->join('tbl_dispo', 'tbl_dispo.surat_masuk_id = surat_masuk.id', 'left');
                $query = $this->db->get();
                return $query->result();
                // return $query = $this->db->get_where('surat_masuk', ['penerima_dispo' => $checkUserE])->result();
            }
        } elseif ($checkUserR == 3) {
            $this->db->select('surat_masuk.*, surat_masuk.id as surma_id, tbl_dispo.*');
            $this->db->from('surat_masuk');
            $this->db->where(['is_done_dispo' => 'false']);
            $this->db->join('tbl_dispo', 'tbl_dispo.surat_masuk_id = surat_masuk.id', 'left');
            $query = $this->db->get();
            return $query->result();
        } elseif ($checkUserR == 4) {
            $this->db->select('surat_masuk.*, surat_masuk.id as surma_id, tbl_dispo.*');
            $this->db->from('surat_masuk');
            $this->db->where([
                'is_done_dispo' => 'false',
                'is_dispo_ktu' => 'true',
                'penerima_dispo' => $checkUserN
            ]);
            $this->db->join('tbl_dispo', 'tbl_dispo.surat_masuk_id = surat_masuk.id', 'left');
            $query = $this->db->get();
            return $query->result();
        }
    }

    function dataSuratK()
    {
        $currentDate = date('Y-m-d');

        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where('date_sended', $currentDate);
        $query = $this->db->get();
        return $query->result();
    }

    //function untuk mengecek user name di dalam table surat_masuk agar bisa di tampilkan pada dashbor surat keluar yang ada di pages user...
    function dataSuratKelUser()
    {
        $checkUserN = $this->session->userdata('name');

        if ($checkUserN == $checkUserN) {
            return $query = $this->db->get_where('surat_masuk', ['sender' => $checkUserN])->result();
            // return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();
        }
    }

    function getSuratData()
    {
        $checkUserN = $this->session->userdata('name');
        $checkUserE = $this->session->userdata('email');

        if ($checkUserN == $checkUserN) {
            return $query = $this->db->get_where('surat_keluar', ['pilihTujuan' => $checkUserE])->result();
            // return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();
        }
    }



    function count_all_data()
    {
        $currentDate = date('Y-m-d');
        $checkUserR = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');

        if ($checkUserR == 2) {
            if ($checkUserN == $checkUserN) {
                return $query = $this->db->get_where('surat_masuk', [
                    'date_sended' => $currentDate,
                    'penerima_dispo' => $checkUserN
                ])->num_rows();
            }
        } elseif ($checkUserR == 4) {
            if ($checkUserN == $checkUserN) {
                return $query = $this->db->get_where('surat_masuk', [
                    'dispo_sended' => $currentDate,
                    'penerima_dispo' => $checkUserN
                ])->num_rows();
            }
        } else {
            return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->num_rows();
        }
    }

    function count_all_data_surkel()
    {
        $currentDate = date('Y-m-d');

        return $query = $this->db->get_where('surat_keluar', ['date_sended' => $currentDate])->num_rows();
    }

    function dispoKTU($idnya)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $idnya);
        $query = $this->db->get();

        if (!$query->result()) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambahDispoKtu($isiDispoKtu)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_dispo', $isiDispoKtu);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    function updateStatus($idnya)
    {
        $isDispo = [
            'is_dispo' => 'true',
            'penerima_dispo' => 'Kepala Biro'
        ];
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispo);

        return $this->db->affected_rows();
    }

    function dispoKtu1($idnya)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $idnya);
        $query = $this->db->get();

        if (!$query->result()) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambahDispoKtu1($isiDispoKtu1, $idnya)
    {
        $this->db->where('surat_masuk_id', $idnya);
        $this->db->update('tbl_dispo', $isiDispoKtu1);

        return $this->db->affected_rows();
    }

    function updateStatusKtu1($idnya, $tujuan)
    {
        $isiDispoKtu1 = [
            'is_dispo' => 'true',
            'is_dispo_ktu' => 'true',
            'penerima_dispo' => $tujuan
        ];
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isiDispoKtu1);

        return $this->db->affected_rows();
    }

    function dispoKaro($idnya)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $idnya);
        $query = $this->db->get();

        if (!$query->result()) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambahDispoKaro($isiDispoKaro, $idnya)
    {
        $this->db->where('surat_masuk_id', $idnya);
        $this->db->update('tbl_dispo', $isiDispoKaro);

        return $this->db->affected_rows();
    }

    function updateStatusKaro($idnya, $tujuan)
    {
        $isDispoKaro = [];
        if ($tujuan == 'Kepala Tata Usaha') {
            $isDispoKaro = [
                'is_dispo' => 'false',
                'is_dispo_karo' => 'true',
                'penerima_dispo' => $tujuan,
                'dispo_sended' => date('Y-m-d')
            ];
        } elseif ($tujuan == 'Bendahara') {
            $isDispoKaro = [
                'is_dispo_karo' => 'true',
                'is_dispo_ktu' => 'true',
                'penerima_dispo' => $tujuan,
                'dispo_sended' => date('Y-m-d')
            ];
        } else {
            $isDispoKaro = [
                'is_dispo_karo' => 'true',
                'penerima_dispo' => $tujuan,
                'dispo_sended' => date('Y-m-d')
            ];
        }
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispoKaro);

        return $this->db->affected_rows();
    }

    function dispoKabag($idnya)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $idnya);
        $query = $this->db->get();

        if (!$query->result()) {
            return false;
        } else {
            return $query->result();
        }
    }

    function tambahDispoKabag($isiDispoKabag, $idnya)
    {
        $this->db->where('surat_masuk_id', $idnya);
        $this->db->update('tbl_dispo', $isiDispoKabag);

        return $this->db->affected_rows();
    }

    function updateStatusKabag($idnya, $tujuan)
    {
        $isDispoKabag = [];
        if ($tujuan == 'Kepala Tata Usaha') {
            $isDispoKabag = [
                'is_dispo' => 'false',
                'is_dispo_kabag' => 'true',
                'penerima_dispo' => $tujuan
            ];
        } else {
            $isDispoKabag = [
                'is_dispo_kabag' => 'true',
                'penerima_dispo' => $tujuan
            ];
        }
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispoKabag);

        return $this->db->affected_rows();
    }

    function push_done($id)
    {
        // $push = ['is_done_dispo' => 'true'];
        // echo 'bisa';
        $this->db->set('is_done_dispo', 'true');
        $this->db->where('id', $id);
        $this->db->update('surat_masuk');
    }

    function getDataDisposisi($idSurat)
    {
        $this->db->select('*');
        $this->db->from('tbl_dispo');
        $this->db->where('surat_masuk_id', $idSurat);
        $query = $this->db->get();
        return $query->result();
        // return $query = $this->db->get_where('tbl_dispo', ['surat_masuk_id' => $idSurat])->result();
        // return $query = $this->db->get('tbl_dispo');
        // var_dump($query);
    }

    function kirimSuratKtu($data)
    {
        $this->db->trans_start();
        $this->db->insert('surat_keluar', $data);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    function get_year()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $query = $this->db->get();
        return $query->result();
    }

    function getArsip($year, $month)
    {
        if ($year && $month) {
            $this->db->select('*');
            $this->db->from('surat_masuk');
            $this->db->where([
                'year' => $year,
                'month' => $month,
                'is_done_dispo' => 'true'
            ]);
            $query = $this->db->get();
            return $query->result();
        } else if ($year && !$month) {
            $this->db->select('*');
            $this->db->from('surat_masuk');
            $this->db->where([
                'year' => $year,
                'is_done_dispo' => 'true'
            ]);
            $query = $this->db->get();
            return $query->result();
        }
    }

    function getArsipKeluar($year, $month)
    {
        if ($year && $month) {
            $this->db->select('*');
            $this->db->from('surat_keluar');
            $this->db->where([
                'year' => $year,
                'month' => $month,
            ]);
            $query = $this->db->get();
            return $query->result();
        } else if ($year && !$month) {
            $this->db->select('*');
            $this->db->from('surat_keluar');
            $this->db->where([
                'year' => $year,
            ]);
            $query = $this->db->get();
            return $query->result();
        }
    }

    function track_log($idnya)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where([
            'id' => $idnya
        ]);
        $query = $this->db->get();
        return $query->result();
    }

    function get_karo_ttd()
    {
        $this->db->select('is_dispo_karo');
        $this->db->from('surat_masuk');
        $query = $this->db->get();
        return $query->result();
    }
}
