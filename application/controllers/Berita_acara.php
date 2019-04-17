<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['nama' =>
        $this->session->userdata('nama')])->row_array();
    }


    public function index()
    {
        $data['title'] = "SIM - HMTI";
        $data['menu'] = $this->db->get('surat_keluar')->result_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/berita_acara', $data);
        $this->load->view('templates/footer');
    }
}
