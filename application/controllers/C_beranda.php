<?php
class C_beranda extends CI_controller{
    function index(){
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('v_beranda');
    }
}