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
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-smile-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Jumlah Klien</div>
                                <div class="huge"><?php echo $jumlahKlien; ?></div>
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
                                <div class="huge"><?= $jumlahLayanan; ?></div>
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
                                <div class="huge"><?= $jumlahKaryawan; ?></div>
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
                                <div class="huge"><?= $jumlahAntrian; ?></div>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($joinbooking as $jb) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $jb->waktu_mulai; ?></td>
                                            <td><?= $jb->waktu_selesai; ?></td>
                                            <td><?= $jb->nama_depan_klien; ?></td>
                                            <td><?= $jb->nama_depan; ?></td>
                                            <td><?= $jb->nama_belakang; ?></td>
                                            <td><?= $jb->nama_depan; ?></td>

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