<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?php echo $this->session->flashdata('data'); ?>
                <label>Pilih Karyawan</label>
                <select class="form-control">
                    <?php foreach ($karyawan->result() as $k) { ?>
                        <option><?= $k->nama_depan; ?></option>
                    <?php } ?>
                </select>
                <br>
                <a href="<?= site_url('Admin/JadwalKaryawan/' . $k->id_karyawan); ?>"><button type="button" class="btn btn-warning">Atur Jadwal</button></a>
            </div>
        </div>
    </div>
</div>