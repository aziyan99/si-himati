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
        $data['berita_acara'] = $this->db->get('berita_acara')->result_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/berita_acara', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_acara', 'Nama acara', 'trim|required', [
            'required' => 'Nama acara/kegiatan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_acara', 'Tanggal acara', 'trim|required', [
            'required' => 'Tanggal acara/kegiatan tidak boleh kosong'
        ]);


        if ($this->form_validation->run() == false) {

            $data['title'] = "SIM - HMTI";
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/berita_acara_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('berita_model', 'berita');
            $this->berita->simpan();
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
            Berita acara/kegiatan berhasil ditambah!
             </div>');
            redirect('berita_acara');
        }
    }

    public function ubah()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules('nama_acara', 'Nama acara', 'trim|required', [
            'required' => 'Nama acara/kegiatan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_acara', 'Tanggal acara', 'trim|required', [
            'required' => 'Tanggal acara/kegiatan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {

            $data['berita_acara'] = $this->db->get_where('berita_acara', ['id' => $id])->row_array();
            $data['title'] = "SIM - HMTI";
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/berita_acara_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('berita_model', 'berita');
            $this->berita->ubah($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Berita acara/kegiatan berhasil dirubah!
            </div>');
            redirect('berita_acara');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->load->model('berita_model', 'berita');
        $this->berita->hapus();
        $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Berita acara/kegiatan berhasil dihapus!
            </div>');
        redirect('berita_acara');
    }
}
