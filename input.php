<?php
include 'connect.php';
$nama_barang = $_POST['nama_barang'];
$jml_barang = $_POST['jml_barang'];
$tgl_kirim = $_POST['tgl_kirim'];

$data = mysqli_query($koneksi,"INSERT INTO `barang`(`nama_barang`, `jml_barang`, `tgl_kirim`) VALUES ('$nama_barang','$jml_barang','$tgl_kirim')");

header("location: tampil_barang.php");