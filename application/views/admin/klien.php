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
            <div class="col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Klien
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($klien->result() as $k) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $k->id_klien; ?></td>
                                            <td><?= $k->nama_depan; ?></td>
                                            <td><?= $k->nama_belakang; ?></td>
                                            <td><?= $k->no_telepon; ?></td>
                                            <td><?= $k->email; ?></td>
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