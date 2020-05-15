<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

  //Mendapatkan Nilai Variable
  $name = $_POST['name'];
  $jurusan = $_POST['jurusan'];
  $email = $_POST['email'];

  //Pembuatan Syntax SQL
  $sql = "INSERT INTO tb_mahasiswa (nama,jurusan,email) VALUES ('$name','$jurusan','$email')";

  //Import File Koneksi database
  require_once('koneksi.php');

  //Eksekusi Query database
  if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan Data Mahasiswa';
  }else{
    echo 'Gagal Menambahkan Data Mahasiswa';
  }

  mysqli_close($con);
}

?>