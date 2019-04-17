<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
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
        $data['surat_masuk'] = $this->db->get('surat_masuk')->result_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/surat_masuk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('pengirim', 'Pengirim', 'trim|required', [
            'required' => 'Pengirim tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'trim|required', [
            'required' => 'Perihal surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'trim|required', [
            'required' => 'Tanggal surat masuk tidak boleh kosong'
        ]);

        if($this->form_validation->run() == false){

            $data['title'] = "SIM - HMTI";
            //$data['surat_masuk'] = $this->db->get('surat_keluar')->result_array();
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/surat_masuk_tambah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->load->model('surat_model', 'surat');
            $this->surat->simpan_surat_masuk();
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil ditambah!
            </div>');
            redirect('surat_masuk');
        }
    }

    public function ubah()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules('pengirim', 'Pengirim', 'trim|required', [
            'required' => 'Tujuan surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'trim|required', [
            'required' => 'perihal surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'trim|required', [
            'required' => 'Tanggal surat masuk tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
           
            $data['surat_masuk'] = $this->db->get_where('surat_masuk', ['id' => $id])->row_array();
            $data['title'] = "SIM - HMTI";
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/surat_masuk_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('surat_model', 'surat');
            $this->surat->ubah_surat_masuk();
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil dirubah!
            </div>');
            redirect('surat_masuk');
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->load->model('surat_model', 'surat');
        $this->surat->hapus_surat_masuk();
        $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil dihapus!
            </div>');
            redirect('surat_masuk');
    }

    
}
