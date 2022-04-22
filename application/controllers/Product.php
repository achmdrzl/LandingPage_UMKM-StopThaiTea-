<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/product');
        $this->load->view('templates/footer');
    }
}
