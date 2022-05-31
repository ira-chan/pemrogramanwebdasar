<!DOCTYPE
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>

</head>
<body>
<h1 style="color: rgb(11, 87, 21);">PEMROGRAMAN WEB DASAR</h1>
<h2 style="color: rgb(17, 146, 60);">TEKNIK INFORMATIKA</h2>
<h3 style="color: rgb(68, 231, 109);">UNIVERSITAS MUHAMMADIYAH JEMBER</h3>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nomor Identitas</th>
            <th>Nana</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Jenis Kelamin</th>
            <th>Kode Pos</th>
            <th>Aksi</th>
</tr>
<?php
include 'connect.php';
$no = 1;
$data = mysqli_query($db, "SELECT * FROM identitas");
while ($d =mysqli_fetch_array ($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?> </td>
        <td><?php echo $d['no_identitas']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['no_telp']; ?></td>
        <td><?php echo $d['jk']; ?></td>
        <td><?php echo $d['kodepos']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['no_identitas']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['no_identitas']; ?>">HAPUS</a>   
</td>  
</tr>
<?php }
?>
<table>
</body>
</html>

