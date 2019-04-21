<?php

class Berita_model extends CI_Model
{

    public function simpan()
    {
        $data = [
            'nama_acara'        => htmlspecialchars($this->input->post('nama_acara', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_acara'     => htmlspecialchars($this->input->post('tanggal_acara', true)),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];

        $this->db->insert('berita_acara', $data);
    }

    public function ubah()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_acara'        => htmlspecialchars($this->input->post('nama_acara', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_acara'     => htmlspecialchars($this->input->post('tanggal_acara', true)),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];

        $this->db->update('berita_acara', $data, ['id' => $id]);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->delete('berita_acara', ['id' => $id]);
    }
}
