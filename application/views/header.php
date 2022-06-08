<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Penjualan</title>
    <link rel="stylesheet" href="<?php echo base_url().'asset2/style.css';?>">
  </head>
  <body>
    <ul>
      <div class="container">
        <li> <a href="./">Home</a> </li>
        <li> <a href="<?php echo base_url().'C_menu'?>">Data Master Barang</a> </li>
        <li> <a href="#">Data Master Karyawan</a> </li>
        <li> <a href="#">Penjualan</a> </li>

        <li> <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar Applikasi?')" href="<?php echo base_url().'C_login/keluar'?>">Logout</a> </li>
      </div>
    </ul>

    <div class="container">