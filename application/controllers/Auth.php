<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";
            $this->load->view('templates/auth_head', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_foot');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nama' => $nama])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nama' => $user['nama']
                ];

                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password salah!
        </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Nama pengguna salah!
            </div>');
            redirect('auth');
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('daftar');
        } else {
            $this->load->model('auth_model', 'auth');
            $this->auth->save();
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda telah keluar
            </div>');
        redirect('auth');
    }
}
