<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">SIBERSHOP</h1><br>

        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="<?= base_url('Booking/buatBooking'); ?>">
                <i class="fas fa-scissors me-2"></i>
                BOOKING
            </a>
        </div><br>
        <!-- Masthead Subheading-->
        <br>
        <p class="masthead-subheading font-weight-light mb-0"></p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Layanan</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <?php foreach ($layanan as $l) { ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><strong><?= $l->nama_layanan; ?></strong><br><?= $l->deskripsi_layanan; ?><br><strong>Tarif Rp.<?= $l->biaya_layanan; ?></strong></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/layanan/<?php echo $l->gambar_layanan; ?>" alt="..." />
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="page-section portfolio" id="portfolio2">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Barberman</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <?php foreach ($karyawan->result() as $k) { ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><strong><?= $k->nama_depan; ?></strong></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/karyawan/<?php echo $k->gambar_karyawan; ?>" alt="..." />
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>