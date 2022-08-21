<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surma_model extends CI_Model
{

    function dataSuratM()
    {
        $checkUserR = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');
        $checkUserE = $this->session->userdata('email');
        $currentUri = current_url();
        $currentDate = date('Y-m-d');

        if ($checkUserR == 1) {
            if ($currentUri == 'http://localhost/codeIgniter/karoo') {
                return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->result();
            } else {
                return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();
            }
        } elseif ($checkUserR == '2') {
            if ($currentUri == 'http://localhost/codeIgniter/kabag') {
                if ($checkUserN == $checkUserN) {
                    return $query = $this->db->get_where('surat_masuk', [
                        'date_sended' => $currentDate,
                        'penerima_dispo' => $checkUserE
                    ])->result();
                }
            } else {
                if ($checkUserN == $checkUserN) {
                    return $query = $this->db->get_where('surat_masuk', ['penerima_dispo' => $checkUserE])->result();
                }
            }
        } elseif ($checkUserR == '3') {
            if ($currentUri == 'http://localhost/codeIgniter/ktu') {
                return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->result();
            } else {
                $this->db->select('*');
                $this->db->from('surat_masuk');
                $this->db->where(['is_done_dispo' => 'false']);
                $this->db->join('tbl_dispo', 'tbl_dispo.surat_masuk_id = surat_masuk.id', 'left');
                $query = $this->db->get();
                return $query->result();
                // return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();
            }
        } elseif ($checkUserR == '4') {
            if ($currentUri == 'http://localhost/codeIgniter/jabfung') {
                if ($checkUserN == $checkUserN) {
                    return $query = $this->db->get_where('surat_masuk', [
                        'date_sended' => $currentDate,
                        'is_dispo_ktu' => 'true',
                        'penerima_dispo' => $checkUserE
                    ])->result();
                }
            } else {
                return $query = $this->db->get_where('surat_masuk', [
                    'is_dispo_ktu' => 'true',
                    'penerima_dispo' => $checkUserE
                ])->result();
            }
        }
    }

    function dataSuratKelUser()
    {
        $checkUserN = $this->session->userdata('name');

        if ($checkUserN == $checkUserN) {
            return $query = $this->db->get_where('surat_masuk', ['sender' => $checkUserN])->result();
            // return $query = $this->db->get_where('surat_masuk', ['is_done_dispo' => 'false'])->result();
        }
    }

    function count_all_data()
    {
        $checkUser = $this->session->userdata('role_id');
        $checkUserN = $this->session->userdata('name');
        $currentUri = current_url();
        $currentDate = date('y-m-d');

        $query = $this->db->get('surat_masuk')->num_rows();
        if ($currentUri == 'http://localhost/codeIgniter/karoo' || $currentUri == 'http://localhost/codeIgniter/kabag' || $currentUri == 'http://localhost/codeIgniter/ktu') {
            return $query = $this->db->get_where('surat_masuk', ['date_sended' => $currentDate])->num_rows();
        } elseif ($checkUser == 4 && $currentUri == 'http://localhost/codeIgniter/jabfung' || $currentUri == 'http://localhost/codeIgniter/jabfung/disposisi') {
            return $query = $this->db->get_where('surat_masuk', ['is_dispo_ktu' => 'true'])->num_rows();
        } elseif ($checkUser == 5) {
            return $query = $this->db->get_where('surat_masuk', ['sender' => $checkUserN])->num_rows();
        } else {
            return $query = $this->db->get('surat_masuk')->num_rows();
        }

        return $query;
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

    function updateStatusKtu1($idnya)
    {
        $isiDispoKtu1 = [
            'is_dispo' => 'true',
            'is_dispo_ktu' => 'true',
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
        if ($tujuan == 'test3@gmail.com') {
            $isDispoKaro = [
                'is_dispo' => 'false',
                'is_dispo_karo' => 'true',
                'penerima_dispo' => $tujuan
            ];
        } elseif ($tujuan == 'kabag1@gmail.com' || $tujuan == 'kabag2@gmail.com' || $tujuan == 'kabag3@gmail.com') {
            $isDispoKaro = [
                'is_dispo_karo' => 'true',
                'penerima_dispo' => $tujuan
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
        if ($tujuan == 'test3@gmail.com') {
            $isDispoKabag = [
                'is_dispo' => 'false',
                'is_dispo_kabag' => 'true',
            ];
        } else {
            $isDispoKabag = [
                'is_dispo_kabag' => 'true',
            ];
        }
        $this->db->where('id', $idnya);
        $this->db->update('surat_masuk', $isDispoKabag);

        return $this->db->affected_rows();
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
}
