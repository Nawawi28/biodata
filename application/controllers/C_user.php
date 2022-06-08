<?php
class C_user extends CI_controller{
    function index()    {
        $this->load->model('M_crud');
        $this->load->view('header');
        $data['admin'] = $this->M_crud->tampil('admin')->result();
        $this->load->view('v_admin',$data);
    
        if($_POST){
            $field['nma_admin']=$this->input->post('nma_admin');
            $field['no_telp']=$this->input->post('no_telp');
            $this->M_crud->tambah('admin',$field);
            redirect(base_url().'C_user');
        }
        $this->load->view('footer');
    }
}
