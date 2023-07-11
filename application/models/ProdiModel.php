<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdiModel extends CI_Model
{
    private $tabel = 'prodi';

    function get_prodi()
    {
        return $this->db->get('prodi')->result();    
    }

    function insert_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];

        $this->db->insert($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa berhasil ditambah!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa gagal ditambah!");
            $this->session->set_flashdata('status', false);
        }
    }

    function get_prodi_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id'=>$id])->row();
    }

    function update_prodi()
    {
        $data = [
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa berhasil diubah!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa gagal diubah!");
            $this->session->set_flashdata('status', false);
        }
    }

    function delete_prodi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa berhasil dihapus!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data prodi beasiswa gagal dihapus!");
            $this->session->set_flashdata('status', false);
        }
    }
}
