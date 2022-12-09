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
                                <select class="form-control" name="layanan" id="layanan">
                                    <option>--</option>
                                    <?php
                                    foreach ($layanan->result() as $l) { ?>
                                        <option value="<?= $l->id_layanan; ?>"><?= $l->nama_layanan; ?></option>
                                    <?php } ?>
                                </select><?= form_error('nama_layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name"> ---- Pilih layanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" name="karyawan" id="karyawan">
                                    <option>--</option>
                                    <?php
                                    foreach ($karyawan->result() as $k) { ?>
                                        <option value="<?= $k->id_karyawan; ?>"><?= $k->nama_depan; ?></option>
                                    <?php } ?>
                                </select><?= form_error('nama_depan', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name"> ---- Pilih Barberman (Tukang Cukur)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="date" name="karyawan" id="karyawan"><?= form_error('jadwal', '<small class="text-danger pl-3">', '</small>'); ?></input>
                                <label for="name"> ---- Pilih Jadwal Yang Tersedia</label>
                            </div>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_depan_klien" value="<?= set_value('nama_depan_klien'); ?>" id="nama_depan_klien"><?= form_error('nama_depan_klien', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nama Depan</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_belakang_klien" value="<?= set_value('nama_belakang_klien'); ?>" id="nama_belakang_klien"><?= form_error('nama_belakang_klien', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nama Belakang</label>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="no_telepon_klien" value="<?= set_value('nama_telepon_klien'); ?>" id="no_telepon_klien"><?= form_error('no_telepon_klien', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="name">Nomor Telepon</label>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email_klien" value="<?= set_value('email_klien'); ?>" id="email_klien"><?= form_error('email_klien', '<small class="text-danger pl-3">', '</small>'); ?>
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