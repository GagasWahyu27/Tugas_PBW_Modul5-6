<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama_dosen = $_POST['nama_dosen'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tahun_masuk = $_POST['tahun_masuk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];

//update data ke database
mysqli_query($koneksi, "update dosen set nip='$nip', nama_dosen='$nama_dosen', jenis_kelamin='$jenis_kelamin', tahun_masuk='$tahun_masuk', agama='$agama', alamat='$alamat', pendidikan_terakhir='$pendidikan_terakhir' where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>