<?php
defined('BASEPATH') or exit ('no direct script accsess allowed');

class Web extends CI_Controller{

    function __contruct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

}