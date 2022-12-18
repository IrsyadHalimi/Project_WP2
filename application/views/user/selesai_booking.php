<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br><br><br>Detail Booking</h2>
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
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama Klien</th>
                                            <th>Layanan Yang Dipilih</th>
                                            <th>Barberman</th>
                                            <th>Perkiraan Waktu Pelayanan</th>
                                            <th>Biaya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                        <?php
                                        foreach ($joinbooking3 as $jb3) {
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?= $jb3->tanggal; ?></td>
                                                <td><?= $jb3->waktu; ?></td>
                                                <td><?= $jb3->nama_depan_klien; ?></td>
                                                <td><?= $jb3->nama_layanan; ?></td>
                                                <td><?= $jb3->nama_depan; ?></td>
                                                <td><?= $jb3->durasi_layanan; ?> menit</td>
                                                <td>Rp.<?= $jb3->biaya_layanan; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</section>