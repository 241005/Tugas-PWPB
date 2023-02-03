
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>

      <title>latihan2</title>
      <link rel="stylesheet" href="frame.CSS">
       </head>
     <body>

<div id="wrapper">
<div id="header">
    <h1 align="center">Edit</h1>
</div> 
<div id="content">
<?php
include 'connect.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM `barang` WHERE `id_barang` = $id");

$tampil = mysqli_fetch_array($data);
?>
<table border="0">
<form action="update_barang.php" method="POST">

<input type="text" name="id_barang" value="<?php echo $id; ?>" hidden=""><br>

<tr>
    <td>Nama barang </td>
    <td> : </td>
    <td>
        <input type="text" name="nama_barang" value="<?php echo $tampil['nama_barang']?>"><br>
    </td>
</tr>
<tr>
    <td>Stok barang </td>
    <td> : </td>
    <td>
        <input type="number" name="jml_barang" value="<?php echo $tampil['jml_barang']?>"><br>
    </td>
</tr>
<tr>
    <td>Tanggal kirim </td>
    <td>: </td>
    <td>
        <input type="date" name="tgl_kirim" value="<?php echo $tampil['tgl_kirim']?>"><br>
    </td>
</tr>
<tr>
    <td>
    <input type="submit" value="kirim"><br>
    </td>
</tr>
    
</form>
</table>
</div>   
<div id="footer">
    <h3 align="center">assalamualaikum</h3>
</div>
     
     </body>
     </html>
     
</body>
</html>