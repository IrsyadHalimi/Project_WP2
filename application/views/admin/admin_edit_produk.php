<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <form action="<?= base_url('Admin/simpanProduk/'); ?>" method="post">
                <label>Masukkan SKU</label>
                <input type="text" name="sku" class="form-control" placeholder="Enter text" value="<?= $produk->sku; ?>">
                <label>Masukkan Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Enter text" value="<?= $produk->nama_produk; ?>">
                <label>Masukkan Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" rows="3" placeholder="Enter text"><?= $produk->deskripsi; ?></textarea>
                <label>Masukkan Stok</label>
                <input type="" name="stok" class="form-control" placeholder="Enter text" value="<?= $produk->stok; ?>">
                <label>Masukkan Harga</label>
                <input name="harga" class="form-control" placeholder="Enter text" value="<?= $produk->harga; ?>">
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>