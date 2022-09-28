<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compitable" content="IE-edge"  />
    <title>Hair's Studio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/logobarber.png">
</head>
<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    <header>
        <div class="container">
        <h1><a href="index.html">Hair's Studio</a></h1>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="login.php">Booking</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
    </header>
    <section class="banner">
        <p><strong>Welcome to Hair's Studio <br>  Good Barber, Great Experience!</strong>
        </p><h2><a href="login.php">Book Now !</a></h2>
    </section>
    <section class="about">
        <div class="container">
            <h3>Tentang Kami</h3>
            <p>Selamat datang, Kami adalah Studio Rambut(<strong>Hair's Studio</strong>), hadir untuk membuat penampilan anda lebih menarik, 
                dengan model dan tren gaya rambut masa kini maupun masa lampau, berbekal fasilitas lengkap, 
                bersih dan berstandar nasional. Dan yang paling penting adalah Barberman kami, tidak perlu 
                diragukan lagi dengan kemampuan mereka memangkas dan menata rambut anda, dengan pengalaman 
                dan tingkat profesionalitas yang tinggi, kami siap melayani dan memberikan yang terbaik 
                bagi anda.
            </p>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <a href="service.html"><h3>Service</h3></a>
            <div class="box">
                <div class="service-home">
                    <h4><a href="login.php">Coloring<img src="img/pexels-cottonbro-3993134.jpg" alt=""></a></h4>
                </div>
                <div class="service-home">
                    <h4><a href="login.php">Haircut<img src="img/52b1f1d7-df3f-46ca-930b-4fb99c02ecde.jpg" alt=""></a></h4>
                </div>
                <div class="service-home">
                    <h4><a href="login.php">Shaving<img src="img/pexels-mídia-897251.jpg" alt=""></a></h4>
                </div>
                <div class="service-home">
                    <h4><a href="login.php">Cornrow<img src="img/pexels-hannah-bickmore-11269030.jpg" alt=""></a></h4>
                </div>
                <div class="service-home">
                    <h4><a href="login.php">Dreadlock<img src="img/pexels-rodnae-productions-12322983.jpg" alt=""></a></h4>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Hair's Studio. All Right Reserved</small><br>
            <a href="https://facebook.com"><i class="material-icons">facebook</i></a>
            <a href="https://whatsapp.com"><i class="material-icons">whatsapp</i></a>
            <a href="https://gmail.com"><i class="material-icons">mail</i></a>
            <a href="https://tik-tok.com"><i class="material-icons">tiktok</i></a>
        </div>
    </footer>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>
</body>
</html>