<?php

class Surat_model extends CI_Model
{
    public function simpan()
    {
        $data = [
            'no_surat'          => htmlspecialchars($this->input->post('no_surat', true)),
            'tujuan'            => htmlspecialchars($this->input->post('tujuan', true)),
            'perihal'           => htmlspecialchars($this->input->post('perihal', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_dikirim'   => $this->input->post('tanggal_dikirim', true)
        ];


        $this->db->insert('surat_keluar', $data);
    }

    public function ubah()
    {
        $id = $this->input->post('id');
        $data = [
            'no_surat'          => htmlspecialchars($this->input->post('no_surat', true)),
            'tujuan'            => htmlspecialchars($this->input->post('tujuan', true)),
            'perihal'           => htmlspecialchars($this->input->post('perihal', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_dikirim'   => $this->input->post('tanggal_dikirim', true)
        ];

       
        $this->db->update('surat_keluar', $data, ['id' => $id]);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->delete('surat_keluar', ['id' => $id]);
    }

    public function simpan_surat_masuk()
    {
        $data = [
            'pengirim'        => htmlspecialchars($this->input->post('pengirim', true)),
            'perihal'         => htmlspecialchars($this->input->post('perihal', true)),
            'arsip'           => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_masuk'   => $this->input->post('tanggal_masuk', true)
        ];


        $this->db->insert('surat_masuk', $data);
    }

    public function ubah_surat_masuk()
    {
        $id = $this->input->post('id');
        $data = [
            'pengirim'          => htmlspecialchars($this->input->post('pengirim', true)),
            'perihal'           => htmlspecialchars($this->input->post('perihal', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_masuk'   => $this->input->post('tanggal_masuk', true)
        ];

       
        $this->db->update('surat_masuk', $data, ['id' => $id]);
    }

    public function hapus_surat_masuk(){
        $id = $this->uri->segment(3);
        $this->db->delete('surat_masuk', ['id' => $id]);
    }

}
