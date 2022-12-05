<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Administrator Sibershop</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-smile-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Jumlah Klien</div>
                                <div class="huge">26</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-scissors fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Jumlah Layanan</div>
                                <div class="huge">9</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Jumlah Karyawan</div>
                                <div class="huge">3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-male fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Jumlah Antrian</div>
                                <div class="huge">26</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Antrian Selanjutnya
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Waktu Mulai</th>
                                        <th>Jenis Layanan</th>
                                        <th>Perkiraan Waktu Selesai</th>
                                        <th>Id Klien</th>
                                        <th>Karyawan</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk->result() as $p) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $p->nama_produk; ?></td>
                                            <td><?= $p->sku; ?></td>
                                            <td><?= $p->harga; ?></td>
                                            <!-- <td><button type="button" class="btn btn-info" <?= anchor('produk/edit' . $p->$id); ?>>Info</button> <button type="button" class="btn btn-danger" <?= anchor('produk/hapus' . $p->$id); ?>>Delete</button></td> -->
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
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Daftar Pesanan Produk
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>SKU</th>
                                        <th>Harga</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk->result() as $p) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $p->nama_produk; ?></td>
                                            <td><?= $p->sku; ?></td>
                                            <td><?= $p->harga; ?></td>
                                            <td><a href="<?= site_url('admin/hapusProduk/' . $p->id); ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Pelanggan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td><button type="button" class="btn btn-info">Info</button> <button type="button" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Produk Sibershop
                    </div>
                    <div class="panel-heading">
                        <button type="button" class="btn btn-success">Tambahkan Produk</button>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>SKU</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi Produk</th>
                                        <th>Stok Tersedia</th>
                                        <th>Harga</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk->result() as $p) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $p->sku; ?></td>
                                            <td><?= $p->nama_produk; ?></td>
                                            <td><?= $p->deskripsi; ?></td>
                                            <td class="center"><?= $p->stok; ?></td>
                                            <td class="center"><?= $p->harga; ?></td>
                                            <td><a href="<?= site_url('admin/editProduk/' . $p->id); ?>"><button type="button" class="btn btn-info">Info</button> </a><a href="<?= site_url('admin/hapusProduk/' . $p->id); ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
</div>
</div>

</div>