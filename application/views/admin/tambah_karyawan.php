<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <form action="<?= base_url('Karyawan/tambahKaryawan'); ?>" method="post">
                <label>Masukkan Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" value="<?= set_value('nama_depan'); ?>"><?= form_error('nama_depan', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" value="<?= set_value('nama_belakang'); ?>"><?= form_error('nama_belakang', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="<?= set_value('no_telepon'); ?>"><?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <label>Masukkan Email</label>
                <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?><br>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-default">Batal</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>