<?php
include 'connect.php';
echo $id = $_POST['id_barang'];
echo $nama_barang = $_POST['nama_barang'];
echo $jml_barang = $_POST['jml_barang'];
echo $tgl_kirim = $_POST['tgl_kirim'];

$data = mysqli_query($koneksi,"UPDATE `barang` SET `nama_barang`='$nama_barang',`jml_barang`='$jml_barang',`tgl_kirim`='$tgl_kirim' WHERE `id_barang` = $id");

header("location: tampil_barang.php");