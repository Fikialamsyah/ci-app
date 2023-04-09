<?php

class Book_model extends CI_Model {

    public function getAllBook()
    {
        return $this->db->get('buku')->result_array();
    }

    public function addNewBook()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'harga' => $this->input->post('harga', true),
            'penerbit' => $this->input->post('penerbit', true),
            'deskripsi' => $this->input->post('deskripsi', true),
        ];

        $this->db->insert('buku', $data);
    }


    public function deleteBook($id)
    {
        $this->db->delete('buku', ['buku_id' => $id]);
    }

    public function getBookById($id)
    {
        return $this->db->get_where('buku', ['buku_id' => $id])->row_array();
    }

    public function updateBook($id)
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'harga' => $this->input->post('harga', true),
            'penerbit' => $this->input->post('penerbit', true),
            'deskripsi' => $this->input->post('deskripsi', true),
        ];

        $this->db->update('buku', $data, $this->input->post('buku_id'));
        redirect('book/index');
    }


    public function searchBook()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul',$keyword);
        return $this->db->get('buku')->result_array();
    }
}