<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <?php
            foreach ($karyawan as $k) {
            ?>
                <?php echo form_open_multipart('Admin/Karyawan/ubahKaryawan'); ?>
                <label>Masukkan Nama Depan</label>
                <input type="hidden" name="id_karyawan" class="form-control" value="<?= $k->id_karyawan ?>">
                <input type="text" name="nama_depan" class="form-control" value="<?= $k->nama_depan ?><?= set_value('nama_depan'); ?>"><?= form_error('nama_depan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" value="<?= $k->nama_belakang ?><?= set_value('nama_belakang'); ?>"><?= form_error('nama_belakang', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Nomor Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="<?= $k->no_telepon ?><?= set_value('no_telepon'); ?>"><?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Alamat Email</label>
                <input type="text" name="email" class="form-control" value="<?= $k->email ?><?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Upload Gambar Karyawan</label>
                <input type="file" name="gambar_karyawan" class="form-control" value="<?= set_value('gambar_karyawan'); ?>"><br>
                <img src="<?= base_url('assets/img/karyawan/' . $k->gambar_karyawan); ?>" alt="" height="150" width="200"><?= form_error('gambar_karyawan', '<small class="text-danger pl-3">', '</small>'); ?><br><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
                <?php echo form_close(); ?>
            <?php } ?>
        </div>

    </div>
</div>
</div>

</div>