<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <form action="<?= base_url('Layanan/tambahLayanan'); ?>" method="post">
                <label>Masukkan Nama Layanan</label>
                <input type="text" name="nama_layanan" class="form-control" value="<?= set_value('nama_layanan'); ?>"><?= form_error('nama_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Deskripsi Layanan</label>
                <input type="text" name="deskripsi_layanan" class="form-control" value="<?= set_value('deskripsi_layanan'); ?>"><?= form_error('deskripsi_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Pilih Kategori Layanan</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="id_kategori" value="option1" checked>Radio 1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="id_kategori" value="option2">Radio 2
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="id_kategori" value="option3">Radio 3
                    </label>
                </div>
                <br>
                <label>Masukkan Biaya Layanan</label>
                <input type="text" name="biaya_layanan" class="form-control" value="<?= set_value('biaya_layanan'); ?>"><?= form_error('biaya_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <br>
                <label>Masukkan Durasi Layanan</label>
                <input type="text" name="durasi_layanan" class="form-control" value="<?= set_value('durasi_layanan'); ?>"><?= form_error('durasi_layanan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>