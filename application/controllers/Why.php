<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Why extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/why');
        $this->load->view('templates/footer');
    }
}
