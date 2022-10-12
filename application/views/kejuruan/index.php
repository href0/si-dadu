<?= $this->session->flashdata('message') ?>
<?php unset($_SESSION['message']) ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data <?= $page ?></h3>
                    <a href="<?= base_url('kejuruan/add') ?>" class="btn btn-primary" style="float:right">+ Tambah Data</a>
                </div>

                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kejuruan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($table as $row) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['kejuruan'] ?></td>
                                    <td>
                                        <a href="<?= base_url('kejuruan/edit/' . $row['id_kejuruan']) ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                        <a href="<?= base_url('kejuruan/delete/' . $row['id_kejuruan']) ?>" onclick="return confirm('Apa anda yakin ingin menghapus data kejuruan <?= $row['kejuruan'] ?>')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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