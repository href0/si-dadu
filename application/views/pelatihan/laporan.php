<?= $this->session->flashdata('message') ?>
<?php unset($_SESSION['message']) ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data <?= $page ?></h3>
                    <!-- <a href="<?= base_url('pelatihan/add') ?>" class="btn btn-primary" style="float:right">+ Tambah Data</a> -->
                </div>

                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Satuan Kerja</th>
                                <th>Kejuruan</th>
                                <th>Program Pelatihan</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Lulus</th>
                                <th>Tidak Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>