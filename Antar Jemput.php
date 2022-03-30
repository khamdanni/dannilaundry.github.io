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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link CSS Biasa -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
</head>


<body>
    <nav>
        <div class="label">
            <i>
                <img id="logo" src="img/washing-machine.png" alt="">
            </i>
            <h4>Danni Laundry</h4>
        </div>

        <ul class="menu">
            <li><a href="Danni Laundry.php#">Home</a></li>
            <li><a href="Danni Laundry.php#service">Service</a></li>
            <li><a href="Danni Laundry.php#contentGalery">Galery</a></li>
            <li><a href="Danni Laundry.php#aboutUs">About Us</a></li>
        </ul>

        <div class="toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <br><br><br><br>
    <div id="orderWhatsapp">
        <a href="https://api.whatsapp.com/send?phone=6288228573966&text=Hallo%20Danni%20Laundry!%0AJemput%20Pakaian%20Kotor%20Saya%20Dong...%0ANama%20%20%20%20%3A%20%0AAlamat%20%20%3A%0ALayanan%20%3A%20%0AWaktu%20Jemput%20%3A%0ACatatan%20Tambahan%20%3A">
            <img src="img/whatsapp2.png" alt="" width="100px">
            <i>Pesan Lewat Whatsapp</i>
        </a>

    </div>
    <div id="title">
        <i>
            Antar Jemput
            <hr>
        </i>
    </div>
    <div id="jumbotronAntarJemput">
        <div id="bajuKotor">
            <img src="img/clothes-laundry-wooden-basket-isolated-white-background.jpg" id="fotoBaju">
        </div>
        <div id="tempatCaption">
            <p>
                Di Danni Laundry kami menawarkan layanan laundry Kiloan dan dry cleaning dengan system on demand. Dimana Anda dapat memesan layanan kami dari form penjemputan di bagian bawah atau silahkan kontak admin kami melalui layanan whatsapp. Semua dapat Anda lakukan
                dengan mudah melalui perangkat seluler Anda bahkan tanpa pelu keluar rumah. Kami melayani laundry dan dry clean di wilayah Nganjuk, jadi meskipun kami bukan laundry terdekat dari lokasi Anda, kurir kami dengan sangat senang hati mendatangi
                kediaman Anda. Anda dapat melakukan pemesanan jasa laundry kami dengan melakukan langkah-langkah berikut ini : <br><br> 1 Silahkan mengisi formulir pemesanan yang telah tersedia. <br> 2 Setelah mengisi formulir, silahkan
                melakukan konfirmasi melalui Whatsapp 088228573966 atau melalui tombol WA. <br> 3 Anda akan segera dihubungi oleh pegawai kami agar cucian Anda segera di pickup dan diproses. <br> 4 Pembayaran dapat dilakukan saat pickup atau setelah proses
                laundry selesai
            </p>
        </div>

    </div>

    <div class="judulFormulir">
        <h1>Formulir Pemesanan</h1>
    </div>

    <div class="formulir">
        <form class="formulir2" action="" method="POST">
            <label for="nama">
            Nama<span>&nbsp;*</span></label><br>
            <input type="text" placeholder="Masukkan nama Anda" id="nama" name="nama">
            <br><br>

            <label for="noHp">No. Handphone<span>&nbsp;*</span></label><br>
            <input type="text" placeholder="Masukkan nomor HP / WA Anda" id="noHp" name="no_hp">
            <br><br>

            <label for="email">Email<span>&nbsp;*</span></label><br>
            <input type="email" placeholder="Masukkan Email Anda (jika ada)" id="email" name="email">
            <br><br>

            <label for="alamat">Alamat Lengkap<span>&nbsp;*</span></label><br>
            <textarea name="alamat" id="alamat" cols="60" rows="10" placeholder="Masukkan Alamat Anda"></textarea>
            <!-- <textarea id="alamat" placeholder="Masukkan alamat lengkap Anda..." required="required" cols="54" rows="7" name="alamat"></textarea> -->
            <br><br>

            <label for="pilihan">Pilih Layanan<span>&nbsp;*</span></label><br>
            <select name="layanan" id="pilihan">
                <option value="Cuci Basah" selected>Cuci Basah Rp. 2000 / kg</option>
                <option value="Cuci Kering">Cuci Kering Rp. 3000 / kg</option>
                <option value="Setrika Saja">Setrika Saja Rp. 3000 / kg</option>
                <option value="Cuci Setrika">Cuci Setrika Rp. 5000 / kg</option>
                <option value="Paket Cepat">Paket 1 Hari Jadi Rp. 8000 / kg</option>
            </select>
            <br><br>

            <label for="tanggal">Tanggal Penjumputan<span>&nbsp;*</span></label><br>
            <input type="datetime-local" id="tanggal" name="waktu_jemput">
            <br><br>


            <label>Pick Up And Delivery Rules<span>&nbsp;*</span></label>
            <fieldset id="note">
                <p>* Minimal Free Delevery Order 5kg / 25 pcs pakaian <br> * Kurang Dari 5kg / 25 pcs pakaian akan dikenakan biaya tambahan (SURCHARGES) <br> * Wilayah sekitar Nganjuk Kota free Delivery Orders</p>
            </fieldset>
            <br>
            <label>Note<span>&nbsp;*</span></label>
            <fieldset id="note">
                <p>* Proses penimbangan akan dilakukan di lokasi usaha <br> * Kami akan megkonfirmasi total biaya pada nomor Whatsapp Anda <br> * Pengiriman pakaian akan dilakukan sesuai jadwal yang telah di tentukan <br> * Untuk pelayanan Laundry Express,
                    pengiriman akan dilakukan ketika pakaian telah selesai dikerjakan</p>
            </fieldset>
            <br><br>
            <div style="text-align: center;">
                <button type="submit" id="submit" name="submit"><span>Kirim</span></button>
            </div>

        </form>
    </div>


    <footer>
        <div id="atas">
            <div id="contactMe">
                <h2>CONTACT ME</h2><br>
                <p>
                    <i class="fa-brands fa-whatsapp fa-xl" id="whatsappIcon"></i> &nbsp;081234567890
                </p>
            </div>
            <div id="location">
                <h2>LOCATION</h2><br>

                <p>
                    <i class="fa-solid fa-location-dot fa-xl"></i> &nbsp; Jl. Diponegoro, RT 01 RW 01, Ds. Buduran, Kec. Bagor, Kab. Nganjuk
                </p>
                <!-- <i>
                    Location &nbsp;

                </i> -->
            </div>
            <div id="around">
                <h2>AROUND THE WEB</h2><br>
                <p>
                    <i class="fa-brands fa-facebook fa-4x" id="icon"></i>
                    <i class="fa-brands fa-instagram fa-4x" id="icon"></i>
                    <i class="fa-brands fa-twitter fa-4x" id="icon"></i>
                    <i class="fa-solid fa-globe fa-4x" id="icon"></i>
                </p>
            </div>
        </div>
        <div id="bawah">
            <p>Copyright &copy; Danni Laundry 2022</p>
        </div>
    </footer>

</body>

<script src="javasript.js"></script>

</html>