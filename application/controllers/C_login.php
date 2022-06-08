<?php
class C_login extends CI_controller{
    function index(){
        $this->load->model('M_login');
        $this->load->view('login');
        if($_POST){
           $nama = $this->input->post('nma_admin');
           $pass = $this->input->post('password');

           $admin = $this->M_login->ceklogin(['nma_admin' => $nama]);
           if($admin){
               if($admin->password == ($pass)){
                $sessi = [
                    'nama'=>$admin->nma_admin,
                    'kd_admin'=>$admin->kd_admin,
                ];
                $this->session->set_userdata($sessi);
                redirect(base_url().'C_beranda');
                
                }else{
                echo "<script>alert('password tidak sesuai');</script>";
             }
           }else{
            echo "<script>alert('nama tidak terdaftar');</script>";
           }
            }
        }

    function keluar(){
        session_destroy();
        redirect(base_url().'C_login');
    }
    
}
