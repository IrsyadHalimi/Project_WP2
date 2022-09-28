<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compitable" content="IE-edge"  />
    <title>Booking</title>
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
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="booking.html">Booking</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <section class="banner-booking">
            <h4>Booking</h4>
            <form action="hasil.php" method="post">
                <div class="form">
                    <input type="text" name="nama" autocomplete="off" required>
                    <label for="nama" class="label-name">
                        <span class="content-name">Nama</span>
                    </label>
                </div>
                <div class="form">
                    <input type="text" name="email" autocomplete="off" required>
                    <label for="email" class="label-name">
                        <span class="content-name">e-mail</span>
                    </label>
                </div>
                <div class="form">
                    <input type="text" name="nohp" autocomplete="off" required>
                    <label for="nohp" class="label-name">
                        <span class="content-name">No HP</span>
                    </label>
                </div>
                <div class="select">
                    <select name="kode" value="" required>
                        <option>Pilih Service</option>
                        <option value="COL">Coloring</option>
                        <option value="CUT">Haircut</option>
                        <option value="SHA">Shaving</option>
                        <option value="COR">Hair Cornrow</option>
                        <option value="DRE">Dreadlock</option>
                    </select>
                </div>
                <div class="form">
                    <input type="date" name="tanggal" required>
                    <label for="tanggal" class="label-name">
                        <span class="content-name"></span>
                    </label>
                </div>
                <div class="form">
                    <input type="time" name="waktu" min="09.00 AM" max="22.00 PM" required>
                    <label for="waktu" class="label-name">
                        <span class="content-name"></span>
                    </label>
                </div>
                <div class="form">
                    <input type="submit" name="submit" value="Submit">
                </div>
                <div class="form">
                    <input type="reset" name="reset" value="Batal">
                </div>
            </form>
        </section>
    </div>
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