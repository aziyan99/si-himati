<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
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
        $data['surat_keluar'] = $this->db->get('surat_keluar')->result_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/surat_keluar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('no_surat', 'No surat', 'trim|required', [
            'required' => 'No surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required', [
            'required' => 'Tujuan surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'trim|required', [
            'required' => 'Tujuan surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_dikirim', 'Tanggal_dikirim', 'trim|required', [
            'required' => 'Tanggal surat dikirim tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = "SIM - HMTI";
            $data['surat_keluar'] = $this->db->get('surat_keluar')->result_array();
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/surat_keluar_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('surat_model', 'surat');
            $this->surat->simpan();
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil ditambah!
            </div>');
            redirect('surat_keluar');
        }
    }

    public function ubah()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules('no_surat', 'No surat', 'trim|required', [
            'required' => 'No surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required', [
            'required' => 'Tujuan surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'trim|required', [
            'required' => 'Tujuan surat tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_dikirim', 'Tanggal_dikirim', 'trim|required', [
            'required' => 'Tanggal surat dikirim tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
           
            $data['surat_keluar'] = $this->db->get_where('surat_keluar', ['id' => $id])->row_array();
            $data['title'] = "SIM - HMTI";
            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/surat_keluar_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('surat_model', 'surat');
            $this->surat->ubah($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil dirubah!
            </div>');
            redirect('surat_keluar');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->load->model('surat_model', 'surat');
        $this->surat->hapus();
        $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
                Surat berhasil dihapus!
            </div>');
            redirect('surat_keluar');
    }
}
