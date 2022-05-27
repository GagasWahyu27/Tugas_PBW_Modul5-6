<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirm dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "delete from dosen where id='$id'");

//mengalihkan hakaman kembali ke index.php
header("location:index.php")
?>