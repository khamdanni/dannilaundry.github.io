<?php 
    $conn = mysqli_connect("localhost", "root", "", "danni_laundry");

function tambah($data){
    global $conn;

    // mengambil data tiap elemen
    $nama = htmlspecialchars($data["nama"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $layanan = htmlspecialchars($data["layanan"]);
    $waktu_jemput = htmlspecialchars($data["waktu_jemput"]);

    $query = "INSERT INTO  pesanan (nama, no_hp, email, alamat, layanan, waktu_jemput) VALUES ('$nama', '$no_hp', '$email',
    '$alamat', '$layanan', '$waktu_jemput')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
}



?>