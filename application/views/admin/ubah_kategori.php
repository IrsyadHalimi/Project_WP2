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
            foreach ($kategori as $k) {
            ?>
                <form action="<?= base_url('Kategori/ubahKategori'); ?>" method="post">
                    <label>Masukkan Nama Kategori</label>
                    <input type="hidden" name="id_kategori" class="form-control" value="<?= $k->id_kategori ?>">
                    <input type="text" name="nama_kategori" class="form-control" value="<?= $k->nama_kategori ?><?= set_value('nama_kategori'); ?>"><?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-default">Batal</button>
                </form>
            <?php } ?>
        </div>

    </div>
</div>
</div>

</div>