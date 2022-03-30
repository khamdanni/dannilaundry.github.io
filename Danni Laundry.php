<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danni Laundry</title>


    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="font awesome/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Link CSS Biasa -->
    <link rel="stylesheet" href="style.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contentGalery">Galery</a></li>
            <li><a href="#aboutUs">About Us</a></li>
        </ul>

        <div class="toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <br>
    <!-- Jumbotron -->
    <div id="banner">
    </div>
    <!-- Akhir Jumbotron -->
    <!-- Home -->
    <div id="tempatCaption">
        <p id="caption1">
            Danni Laundry,<br> solusi pakaian kotor anda
        </p>
        <p id="caption2">
            Bersama Danni Laundry #DirumahAja
        </p>
        <p id="caption3">
            Melayani antar jemput pakaian kotor anda
        </p>
    </div>
    <!-- Akhir Home -->
    <!-- Service -->
    <div id="service">
        <div class="kartu">
            <img src="img/Delevery.jpg" alt="">
            <div class="isiKartu">
                <h5>Antar Jemput</h5>
                <p>Layanan antar jemput untuk anda agar tetap #DirumahAja <br><br></p>
                <a href="Antar Jemput.php">Pesan Sekarang</a>
            </div>
        </div>
        <div class="kartu">
            <img src="img/order.jpg" alt="">
            <div class="isiKartu">
                <h5>Pesan Online</h5>
                <p style="margin-bottom: 12px;">Anda bisa menghubungi kami dari rumah, dan kami yang akan mengurus pakaian kotor anda</p>
                <a href="#">Pesan Sekarang</a>
            </div>
        </div>
        <div class="kartu">
            <img src="img/express.jpg" alt="">
            <div class="isiKartu">
                <h5>Laundry Express</h5>
                <p>Pakaian kotor anda akan kami siapkan dengan waktu kurang dari 1 hari <br><br></p>
                <a href="#">Pesan Sekarang</a>
            </div>
        </div>
    </div>


    <div class="contentGalery" id="contentGalery">
        <span id="captionGalery">
            Galery
        </span>
        <div id="galery">
            <img src="img/gambar1.jpg" alt="">
            <img src="img/gambar2.jpg" alt="">
            <img src="img/gambar3.jpg" alt="">
            <img src="img/gambar4.jpg" alt="">
            <img src="img/gambar5.jpg" alt="">
        </div>
    </div>
    <!-- Akhir Service -->
    <!-- About Us -->
    <div class="aboutUs" id="aboutUs">
        <div class="master">
            <img id="gambarMaster" src="img/Abut us.jpg" alt="">
        </div>
        <div class="captionAboutUs">
            <h2>Danni Laundry</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima a quaerat, nemo repellat enim esse, corrupti beatae adipisci cum quas dignissimos dolorum nostrum recusandae placeat quisquam ut voluptas nihil sit eum illo sint deserunt. Temporibus
                numquam magni beatae ipsum possimus similique laboriosam autem ex expedita eum quis hic quae, saepe dignissimos. Earum tenetur molestiae corporis inventore quis, nobis illum officia consequuntur nulla repudiandae ad tempora? Placeat perferendis
                officia nam numquam laudantium, consequatur non nobis ad quo modi reprehenderit sed! Ea fuga architecto pariatur error nisi modi adipisci obcaecati iure consequatur! Adipisci maxime ad sunt consequuntur error itaque suscipit quibusdam
                consequatur.
            </p>
        </div>
    </div>
    <!-- Akhir About Us -->
    <!-- Footer -->
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
    <!-- Akhir Footer -->






</body>

</html>


<script src="javasript.js"></script>