<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br><br><br>Booking</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" action="<?= base_url('Booking/buatBooking'); ?>" method="POST">
                            <div class="form-floating mb-3">
                                <select class="form-control" name="layanan" id="layanan" value="<?= set_value('layanan'); ?>">
                                    <option>--</option>
                                    <?php
                                    foreach ($layanan as $l) { ?>
                                        <option value="<?= $l->id_layanan; ?>"><?= $l->nama_layanan; ?> -- Rp.<?= $l->biaya_layanan; ?></option>
                                    <?php } ?>
                                </select><?= form_error('layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name"> ---- Pilih layanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" name="karyawan" id="karyawan" value="<?= set_value('karyawan'); ?>">
                                    <option>--</option>
                                    <?php
                                    foreach ($karyawan as $k) { ?>
                                        <option value="<?= $k->id_karyawan; ?>"><?= $k->nama_depan; ?></option>
                                    <?php } ?>
                                </select><?= form_error('karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name"> ---- Pilih Barberman (Tukang Cukur)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="date" name="tanggal" id="tanggal"><?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?></input>
                                <label for="name"> ---- Pilih Tanggal Yang Tersedia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="time" name="waktu" id="waktu"><?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?></input>
                                <label for="name"> ---- Pilih Waktu Yang Tersedia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama" value="<?= set_value('nama'); ?>" id="nama"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nama Depan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang'); ?>" id="nama_belakang"><?= form_error('nama_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nama Belakang</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="number" name="no_telepon" value="<?= set_value('no_telepon'); ?>" id="no_telepon"><?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nomor Telepon</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" name="email" value="<?= set_value('email'); ?>" id="email"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Email</label>
                            </div>
                            <button class="btn btn-danger btn-xl" id="submitButton" type="reset">Batal</button> <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>