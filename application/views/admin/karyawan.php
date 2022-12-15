<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $judul; ?></h1>
            </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <?php echo $this->session->flashdata('data'); ?>
            <br>
            <div class="col-lg-14">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= site_url('Admin/Karyawan/tambahKaryawan'); ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button></a>
                        Tambah Data Karyawan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>No Telepon</th>
                                        <th>Alamat Email</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($karyawan->result() as $kar) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $kar->nama_depan; ?></td>
                                            <td><?= $kar->nama_belakang; ?></td>
                                            <td><?= $kar->no_telepon; ?></td>
                                            <td><?= $kar->email; ?></td>
                                            <td><a href="<?= site_url('Admin/Karyawan/editKaryawan/' . $kar->id_karyawan); ?>"><button type="button" class="btn btn-warning">Ubah</button></a> <a href="<?= site_url('Admin/Karyawan/hapusKaryawan/' . $kar->id_karyawan); ?>"><button type="button" class="btn btn-danger">Hapus</button></a> <a href="<?= site_url('Admin/Karyawan/jadwalKaryawan/' . $kar->id_karyawan); ?>"><button type="button" class="btn btn-success">Atur Jadwal</button></a></td>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>