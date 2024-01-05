<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProfilUsaha()
    {
        $getProfil = $this->db->query("SELECT * FROM profil_usaha");
        foreach ($getProfil->result_array() as $profil) {
            $arr['nama_usaha'] = $profil['nama_usaha'];
            $arr['email'] = $profil['email'];
            $arr['alamat'] = $profil['alamat'];
            $arr['nomor_telepon'] = $profil['nomor_telepon'];
            $arr['maps_link'] = $profil['maps_link'];
            $arr['instagram'] = $profil['instagram'];
            $arr['facebook'] = $profil['facebook'];
        }
        return $arr;
    }
    public function index()
    {
        $profil = $this->getProfilUsaha();
        $data['nama_usaha'] = $profil['nama_usaha'];
        $data['email'] = $profil['email'];
        $data['alamat'] = $profil['alamat'];
        $data['nomor_telepon'] = $profil['nomor_telepon'];
        $data['instagram'] = $profil['instagram'];
        $data['facebook'] = $profil['facebook'];
        $data['maps_link'] = $profil['maps_link'];

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/contact');
        $this->load->view('home/layout/footer');
    }
}