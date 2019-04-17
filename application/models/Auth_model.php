<?php

class Auth_model extends CI_Model
{
    public function save()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'gambar' => 'default.jpg'
        ];

        $this->db->insert('user', $data);
    }
}
