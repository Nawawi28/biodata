<?php 
 class C_menu extends CI_controller{
    function index(){
        $this->load->model('M_crud');
        $this->load->view('header');
        $data['menu']=$this->M_crud->tampil('menu')->result();
        $this->load->view('v_menu',$data);
        if($_POST){
            $field['nmmenu']= $this->input->post('nmmenu');
            $field['harga']= $this->input->post('harga');
            $field['gambar']= $this->input->post('gambar');
            $this->M_crud->tambah('menu',$field);
            redirect(base_url().'C_menu');
        }
        $this->load->view('footer');
    }
    function hapus($id){
        $this->load->model('M_crud');
        $kode['kdmenu']= $id;
        $this->M_crud->hapus('menu',$kode);
        redirect(base_url().'C_menu');
    }
   function edit($id){
        $this->load->model('M_crud');
        $this->load->view('header');
        $data['menu']=$this->M_crud->tampil('menu')->result();
        $kode['kdmenu']=$id;
        $data['edit']=$this->M_crud->tampil_id('menu',$kode)->row();
        $this->load->view('v_edit_menu',$data);
        if($_POST){
            $field['nmmenu']= $this->input->post('nmmenu');
            $field['harga']= $this->input->post('harga');
            $field['gambar']= $this->input->post('gambar');
            $this->M_crud->edit('menu',$kode);
            redirect(base_url().'C_menu');
        }
        $this->load->view('footer');
    }
    
    
}