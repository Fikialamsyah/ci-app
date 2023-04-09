<?php

class Book extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->library('form_validation');
    }

    public function index()
    {    
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Book_model->getAllBook();

        if ($this->input->post('keyword')){
            $data['buku'] = $this->Book_model->searchBook();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('book/index', $data);
        $this->load->view('templates/footer');
    }


    public function insert()
    {
        $data['judul'] = 'Form Tambah Buku';
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('book/insert');
            $this->load->view('templates/footer');
        } else {
            $this->Book_model->addNewBook();
            $this->session ->set_flashdata('flash', 'ditambahkan');
            redirect('book');
        }
    }

    public function delete($id)
    {
        $this->Book_model->deleteBook($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('book');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->Book_model->getBookById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('book/detail', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['judul'] = 'Form Update Buku';
        $data['buku'] = $this->Book_model->getBookById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('book/update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Book_model->updateBook();
            $this->session ->set_flashdata('flash', 'diubah');
            redirect('book');
        }
    }
}