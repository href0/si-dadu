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
                                <th>Nama Peserta</th>
                                <!-- <th>Email</th> -->
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Tinggal</th>
                                <th>Telp</th>
                                <th>Pendidikan</th>
                                <th>Tanggal Uji</th>
                                <th>K/BK</th>
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
                                    <td><a href="<?= base_url('peserta?pelatihan=') . $row['id_pelatihan'] ?>" class="btn btn-info btn-sm"><?= $row['pelatihan'] ?></a></td>
                                    <td><?= $row['nama'] ?></td>
                                    <!-- <td><?= $row['email'] ?></td> -->
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['tempat_lahir'] ?></td>
                                    <td><?= date_format(new DateTime($row['tgl_lahir']), 'd M Y') ?></td>
                                    <td><?= $row['detail_alamat'] . ' RT. ' . $row['rt'] . '/RW. ' . $row['rw-dusun'] . ', Kec. ' . $row['kecamatan'] . ', ' . $row['kelurahan'] ?></td>
                                    <td><?= $row['no_hp'] ?></td>
                                    <td><?= $row['pendidikan_terakhir'] ?></td>
                                    <td><?= date_format(new DateTime($row['tgl_awal']), 'd M Y') ?></td>
                                    <td><?= $row['sertifikasi'] ?></td>
                                    <td>
                                        <a href="<?= base_url('peserta/edit/' . $row['id_peserta']) ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Ubah </a>
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