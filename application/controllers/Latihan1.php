<?php
class Latihan1 extends CI_Controller
{
    public function index()
{
    echo "<b><h2> Selamat datang .. selamat belajar web programing<h2><b>";
}
public function penjumlahan($n1,$n2)
{
    $this ->load->model('Model_latihan1');
    $hasil=$this->Model_latihan1->jumlah($n1,$n2);
    echo"hasil penjumlahan dari ".$n1."+".$n2."=".$hasil;
}
}