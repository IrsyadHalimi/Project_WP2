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
            foreach ($layanan as $l) {
            ?>
                <?php echo form_open_multipart('Admin/Layanan/ubahLayanan'); ?>
                <label>Masukkan Nama Layanan</label>
                <input type="hidden" name="id_layanan" class="form-control" value="<?= $l->id_layanan ?>">
                <input type="text" name="nama_layanan" class="form-control" value="<?= $l->nama_layanan ?><?= set_value('nama_layanan'); ?>"><?= form_error('nama_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Deskripsi Layanan</label>
                <input type="text" name="deskripsi_layanan" class="form-control" value="<?= $l->deskripsi_layanan ?><?= set_value('deskripsi_layanan'); ?>"><?= form_error('deskripsi_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Pilih Kategori Layanan</label>

                <select class="form-control" name="id_kategori">
                    <?php foreach ($kategori as $k) {
                    ?>
                        <option value="<?= $k->id_kategori; ?>"><?= $k->nama_kategori; ?></option>
                    <?php } ?>
                </select><?= form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>


                <br>
                <label>Masukkan Biaya Layanan</label>
                <input type="text" name="biaya_layanan" class="form-control" value="<?= $l->biaya_layanan ?><?= set_value('biaya_layanan'); ?>"><?= form_error('biaya_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Durasi Layanan</label>
                <input type="text" name="durasi_layanan" class="form-control" value="<?= $l->durasi_layanan ?><?= set_value('durasi_layanan'); ?>"><?= form_error('durasi_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Upload Gambar Layanan</label>
                <input type="file" name="gambar_layanan" class="form-control" value="<?= set_value('gambar_layanan'); ?>"><br>
                <img src="<?= base_url('assets/img/layanan/' . $l->gambar_layanan); ?>" alt="" height="150" width="200"><?= form_error('gambar_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
                <?php echo form_close(); ?>
            <?php } ?>
        </div>

    </div>
</div>
</div>

</div>