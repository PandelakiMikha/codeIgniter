<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
{
    function downloadSM($id)
    {
        $data = $this->db->get_where('surat_masuk', ['id' => $id])->row();
        force_download('uploads/' . $data->File_name, NULL);
    }

    function downloadSK($id)
    {
        $data = $this->db->get_where('surat_keluar', ['id' => $id])->row();
        force_download('uploads/' . $data->File_name, NULL);
    }
}
