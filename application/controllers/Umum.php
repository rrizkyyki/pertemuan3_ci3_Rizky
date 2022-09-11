<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {
    public function index(){
        $this->load->view('umum/dashboard');
    }
}