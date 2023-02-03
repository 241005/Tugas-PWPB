<?php

include 'connect.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi,"DELETE FROM `barang` WHERE `id_barang` = $id");

if($data == TRUE){
    header("location: tampil_barang.php");
}else{
    echo "gagal hapus";
}