<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <form action="<?= base_url('Kategori/tambahKategori'); ?>" method="post">
                <label>Masukkan Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="<?= set_value('nama_kategori'); ?>"><?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>