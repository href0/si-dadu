<?= $this->session->flashdata('message') ?>
<?php unset($_SESSION['message']) ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data <?= $page ?></h3>
                    <a href="<?= base_url('peserta/add') ?>" class="btn btn-primary" style="float:right">+ Tambah Data</a>
                </div>

                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Satuan Kerja</th>
                                <th>Kejuruan</th>
                                <th>Program Pelatihan</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($table as $row) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['satuan_kerja'] ?></td>
                                    <td><?= $row['kejuruan'] != 'Disnaker' ? $row['kejuruan'] : ''  ?></td>
                                    <td><?= $row['pelatihan'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['tgl_awal'] ?></td>
                                    <td><?= $row['tgl_akhir'] ?></td>
                                    <td>
                                        <a href="<?= base_url('peserta/edit/' . $row['id_peserta']) ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                        <a href="<?= base_url('peserta/delete/' . $row['id_peserta']) ?>" onclick="return confirm('Apa anda yakin ingin menghapus data peserta <?= $row['nama'] ?>')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                        <a href="<?= base_url('peserta/nilai/' . $row['id_peserta']) ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Nilai</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>