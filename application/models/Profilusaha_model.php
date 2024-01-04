
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profilusaha_model extends CI_Model
{
    public function getProfilUsaha()
    {
        $query = $this->db->query("SELECT * FROM profil_usaha");
        return $query->result_array();
    }

    public function getMetodePembayaran()
    {
        $query = $this->db->query("SELECT * FROM metode_pembayaran");
        return $query->result_array();
    }

    public function get_metode_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM metode_pembayaran WHERE id_metode = $id");
        return $query->row();
    }

    public function tambah_metode_pembayaran()
    {
        $data = [
            'nama_merchant' => htmlspecialchars($this->input->post('nama_merchant', true)),
            'kode_pembayaran' => htmlspecialchars($this->input->post('kode_pembayaran', true)),
            'atas_nama' => htmlspecialchars($this->input->post('atas_nama', true)),
        ];
        $this->db->insert('metode_pembayaran', $data);
    }

    public function edit_metode_pembayaran()
    {
        $data = [
            'nama_merchant' => htmlspecialchars($this->input->post('nama_merchant', true)),
            'kode_pembayaran' => htmlspecialchars($this->input->post('kode_pembayaran', true)),
            'atas_nama' => htmlspecialchars($this->input->post('atas_nama', true)),
        ];
        $this->db->where('id_metode', $this->input->post('id_metode'));
        $this->db->update('metode_pembayaran', $data);
    }

    public function hapus_metode_pembayaran($id)
    {
        $this->db->where('id_metode', $id);
        $this->db->delete('metode_pembayaran');
    }

    public function edit_profil_usaha()
    {
        $pathFUsaha = "assets/img/";
        $current_usaha = $this->input->post('current_id');
        $getDataGambar = $this->db->query("SELECT * FROM profil_usaha WHERE id = $current_usaha");

        foreach ($getDataGambar->result_array() as $gambar) {
            $gambar1_old = $gambar['foto_usaha_1'];
            $gambar2_old = $gambar['foto_usaha_2'];
            $gambar3_old = $gambar['foto_usaha_3'];
            $gambar4_old = $gambar['foto_usaha_4'];
            $gambar5_old = $gambar['menu_1'];
            $gambar6_old = $gambar['menu_2'];
            $gambar7_old = $gambar['menu_3'];
        }

        if ($_FILES['foto_usaha_1']['size'] != 0) {
            $file_name1 = $_FILES['foto_usaha_1']['name'];
            $newfile_name1 = str_replace(' ', '', $file_name1);
            $config['upload_path']          = './assets/img/';
            $newName = date('dmYHis') .  $newfile_name1;
            $config['file_name']         = $newName;
            $config['max_size']             = 10100;
            $config['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto_usaha_1')) {
                if ($gambar1_old != "1.jpg") {
                    unlink($pathFUsaha . $gambar1_old);
                }
                $data = [
                    'foto_usaha_1' => $newName
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['foto_usaha_2']['size'] != 0) {
            $file_name2 = $_FILES['foto_usaha_2']['name'];
            $newfile_name2 = str_replace(' ', '', $file_name2);
            $config1['upload_path']          = './assets/img';
            $newName1 = date('dmYHis') .  $newfile_name2;
            $config1['file_name']         = $newName1;
            $config1['max_size']             = 10100;
            $config1['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);
            if ($this->upload->do_upload('foto_usaha_2')) {
                if ($gambar2_old != "2.jpg") {
                    unlink($pathFUsaha . $gambar2_old);
                }
                $data = [
                    'foto_usaha_2' => $newName1
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['foto_usaha_3']['size'] != 0) {
            $file_name3 = $_FILES['foto_usaha_3']['name'];
            $newfile_name3 = str_replace(' ', '', $file_name3);
            $config2['upload_path']          = './assets/img';
            $newName2 = date('dmYHis') .  $newfile_name3;
            $config2['file_name']         = $newName2;
            $config2['max_size']             = 10100;
            $config2['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config2);
            $this->upload->initialize($config2);
            if ($this->upload->do_upload('foto_usaha_3')) {
                if ($gambar3_old != "3.jpg") {
                    unlink($pathFUsaha . $gambar3_old);
                }
                $data = [
                    'foto_usaha_3' => $newName2
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['foto_usaha_4']['size'] != 0) {
            $file_name4 = $_FILES['foto_usaha_4']['name'];
            $newfile_name4 = str_replace(' ', '', $file_name4);
            $config3['upload_path']          = './assets/img/';
            $newName3 = date('dmYHis') .  $newfile_name4;
            $config3['file_name']         = $newName3;
            $config3['max_size']             = 10100;
            $config3['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config3);
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('foto_usaha_4')) {
                if ($gambar4_old != "4.jpg") {
                    unlink($pathFUsaha . $gambar4_old);
                }
                $data = [
                    'foto_usaha_4' => $newName3
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['menu_1']['size'] != 0) {
            $file_name5 = $_FILES['menu_1']['name'];
            $newfile_name5 = str_replace(' ', '', $file_name5);
            $config4['upload_path']          = './assets/img/';
            $newName4 = date('dmYHis') .  $newfile_name5;
            $config4['file_name']         = $newName4;
            $config4['max_size']             = 10100;
            $config4['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config4);
            $this->upload->initialize($config4);
            if ($this->upload->do_upload('menu_1')) {
                if ($gambar5_old != "1.jpg") {
                    unlink($pathFUsaha . $gambar5_old);
                }
                $data = [
                    'menu_1' => $newName4
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['menu_2']['size'] != 0) {
            $file_name6 = $_FILES['menu_1']['name'];
            $newfile_name6 = str_replace(' ', '', $file_name6);
            $config5['upload_path']          = './assets/img/';
            $newName5 = date('dmYHis') .  $newfile_name6;
            $config5['file_name']         = $newName5;
            $config5['max_size']             = 10100;
            $config5['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config5);
            $this->upload->initialize($config5);
            if ($this->upload->do_upload('menu_2')) {
                if ($gambar6_old != "1.jpg") {
                    unlink($pathFUsaha . $gambar6_old);
                }
                $data = [
                    'menu_2' => $newName5
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        if ($_FILES['menu_3']['size'] != 0) {
            $file_name7 = $_FILES['menu_3']['name'];
            $newfile_name7 = str_replace(' ', '', $file_name7);
            $config6['upload_path']          = './assets/img/';
            $newName6 = date('dmYHis') .  $newfile_name7;
            $config6['file_name']         = $newName6;
            $config6['max_size']             = 10100;
            $config6['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config6);
            $this->upload->initialize($config6);
            if ($this->upload->do_upload('menu_3')) {
                if ($gambar7_old != "1.jpg") {
                    unlink($pathFUsaha . $gambar7_old);
                }
                $data = [
                    'menu_1' => $newName6
                ];

                $this->db->where('id', $current_usaha);
                $this->db->update('profil_usaha', $data);
            }
        }

        $data = [
            'nama_usaha' => htmlspecialchars($this->input->post('nama_usaha', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nomor_telepon' => htmlspecialchars($this->input->post('nomor_telepon', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'instagram' => htmlspecialchars($this->input->post('instagram', true)),
            'facebook' => htmlspecialchars($this->input->post('facebook', true)),
            'maps_link' => $this->input->post('maps_link')
        ];

        $this->db->where('id', $current_usaha);
        $this->db->update('profil_usaha', $data);
    }
}
