<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index()
    {

        $data['produtos'] = $this->products_model->index();
        $data['title'] = 'Prova - CodeIgniter';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/produtos', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function new()
    {
        $data['title'] = 'Novo Produto - CodeIgniter';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function store()
    {
        $produto = $_POST;
        $this->products_model->store($produto);
        redirect('products');
    }

    public function edit($id)
    {
        $data['produto'] = $this->products_model->show($id);
        $data['title'] = 'Editar Produto - CodeIgniter';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function update($id)
    {
        $produto = $_POST;
        $this->products_model->update($id, $produto);
        redirect('products');
    }

    public function delete($id)
    {
        $this->products_model->destroy($id);
        redirect('products');
    }
}