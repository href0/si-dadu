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
                                <th>Kompeten</th>
                                <th>Tidak Kompeten</th>
                                <th>Tidak Uji Kompeten</th>
                                <th>Lainnya</th>
                                <th>SD</th>
                                <th>SMP</th>
                                <th>SMA</th>
                                <th>SMK</th>
                                <th>Diploma</th>
                                <th>PT</th>
                                <th>Total Latar Belakang Pendidikan</th>
                                <th>Laki-Laki</th>
                                <th>Perempuan</th>
                                <th>Total Jenis Kelamin</th>
                                <th>Mandiri</th>
                                <th>Industri</th>
                                <th>Sumber Dana</th>
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