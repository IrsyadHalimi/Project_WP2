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
            <div class="col-lg-6">
                <?php echo $this->session->flashdata('data'); ?>
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('Admin/Kategori/tambahKategori'); ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button></a>
                        Tambah Data Kategori Layanan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Kategori</th>
                                        <th>Nama kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kategori->result() as $kat) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $kat->id_kategori; ?></td>
                                            <td><?= $kat->nama_kategori; ?></td>
                                            <td><a href="<?= site_url('Admin/Kategori/editKategori/' . $kat->id_kategori); ?>"><button type="button" class="btn btn-warning">Ubah</button></a> <a href="<?= site_url('Admin/Kategori/hapusKategori/' . $kat->id_kategori); ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
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