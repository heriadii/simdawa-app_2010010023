<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisModel extends CI_Model
{
    private $tabel = 'jenis_beasiswa';

    function get_jenis()
    {
        return $this->db->get('jenis_beasiswa')->result();
    }

    function insert_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data jenis beasiswa berhasil ditambahkan!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data jenis beasiswa gagal ditambahkan!");
            $this->session->set_flashdata('status', false);
        }
    }

    function get_jenis_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id' => $id])->row();
    }

    function update_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data jenis beasiswa berhasil diubah!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data jenis beasiswa gagal diubah!");
            $this->session->set_flashdata('status', false);
        }
    }

    function delete_jenis($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data jenis beasiswa berhasil dihapus!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data  jenis beasiswa gagal dihapus!");
            $this->session->set_flashdata('status', false);
        }
    }
}
