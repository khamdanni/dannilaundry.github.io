<?php

require 'function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
            </script>
        ";
    } else {
        echo "data GAGAL";
        echo "<br>";
        echo mysqli_error($conn);
        
    }
}


$result = mysqli_query($conn, "SELECT * FROM pesanan");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="style3.css"> -->
</head>
<style>

</style>

<body>
    <!-- <form action="" method="POST">

        <input type="text" name="no_pesanan">
        <input type="text" name="nama">
        <input type="text" name="no_hp">
        <input type="text" name="email">
        <input type="text" name="alamat">
        <select id="" name="layanan">
            <option value="cuciBasah" selected>Cuci Basah Rp. 2000 / kg</option>
            <option value="cuciKering">Cuci Kering Rp. 3000 / kg</option>
            <option value="setrikaSaja">Setrika Saja Rp. 3000 / kg</option>
            <option value="cuciSetrika">Cuci Setrika Rp. 5000 / kg</option>
            <option value="paketCepat">Paket 1 Hari Jadi Rp. 8000 / kg</option>
        </select>
        <input type="datetime-local" name="waktu_jemput">

        <button type="submit" name="submit">kirim</button>

    </form> -->

    <h1 style="text-align: center;">Data Customer Laundry</h1>
    <h3><a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=danni_laundry&table=pesanan&pos=0">Lihat Data Admin</a></h3>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <!-- <th>no</th>
            <th>aksi</th> -->
            <th>No. Pesanan</th>
            <th>Nama</th>
            <th>No. Hp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Layanan</th>
            <th>Waktu jemput</th>
            <th>Waktu pesan</th>

        </tr>
        
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["no_pesanan"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["no_hp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["layanan"]; ?></td>
                <td><?= $row["waktu_jemput"]; ?></td>
                <td><?= $row["waktu_pesan"]; ?></td>
            </tr>
        <?php endwhile ?>
    </table>

</body>

</html>