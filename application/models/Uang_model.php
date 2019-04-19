<?php

class Uang_model extends CI_Model
{

    public function simpan()
    {
        $data = [
            'total'             => htmlspecialchars($this->input->post('total', true)),
            'kebutuhan'         => htmlspecialchars($this->input->post('kebutuhan', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_keluar'    => $this->input->post('tanggal_keluar'),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->insert('uang_keluar', $data);
    }

    public function ubah()
    {
        $id = $this->input->post('id');
        $data = [
            'total'             => htmlspecialchars($this->input->post('total', true)),
            'kebutuhan'         => htmlspecialchars($this->input->post('kebutuhan', true)),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'tanggal_keluar'    => $this->input->post('tanggal_keluar'),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];


        $this->db->update('uang_keluar', $data, ['id' => $id]);
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->delete('uang_keluar', ['id' => $id]);
    }

    public function simpan_uang_masuk()
    {
        $data = [
            'total'             => htmlspecialchars($this->input->post('total', true)),
            'tanggal_masuk'    => $this->input->post('tanggal_masuk'),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];
        $this->db->insert('uang_masuk', $data);
    }

    public function ubah_uang_masuk()
    {
        $id = $this->input->post('id');
        $data = [
            'total'             => htmlspecialchars($this->input->post('total', true)),
            'tanggal_masuk'    => $this->input->post('tanggal_masuk'),
            'arsip'             => htmlspecialchars($this->input->post('arsip', true)),
            'keterangan'        => htmlspecialchars($this->input->post('keterangan', true))
        ];


        $this->db->update('uang_masuk', $data, ['id' => $id]);
    }

    public function hapus_uang_masuk()
    {
        $id = $this->uri->segment(3);
        $this->db->delete('uang_masuk', ['id' => $id]);
    }
}
