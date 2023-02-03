<?php
include 'connect.php';
$data = mysqli_query($koneksi,"SELECT * FROM `barang`");
?>
<link rel="stylesheet" href="style.css">
<div id="wrapper">
<div id="header">
<h1 align="center">Tampilan</h1>
</div> 
<div id="content">
    <tr>
        <td><a href="Tugas.html">Tambah data</a><br></td>
    </tr>
    <tr>
        <td>
        <?php
        foreach($data as $data){
            echo $data['nama_barang']." ";
            echo $data['jml_barang']." ";
            echo $data['tgl_kirim']."<br>";
        ?>
            <a href="delete_barang.php?id=<?php echo $data['id_barang'] ?>">Hapus</a>
            &nbsp
            <a href="edit_barang.php?id=<?php echo $data['id_barang'] ?>">Edit</a>
            <br>
        <?php
            }
        ?>

        </td>
    </tr>
</div>   
<div id="footer">
    <h3 align="center">assalamualaikum</h3>
</div>