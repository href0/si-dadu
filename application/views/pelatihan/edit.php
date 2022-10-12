<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('pelatihan/edit/') . $pelatihan['id_pelatihan'] ?>" id="form" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kejuruan">Satuan Kerja</label>
                            <input type="text" value="<?= $pelatihan['satuan_kerja'] ?>" class="form-control" disabled>
                        </div>
                        <?php if ($pelatihan['kejuruan'] != 'Disnaker') : ?>
                            <div class="form-group">
                                <div class="kejuruan">
                                    <div class="form-group">
                                        <label for="kejuruan">Kejuruan</label>
                                        <input type="text" value="<?= $pelatihan['kejuruan'] ?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="pelatihan">Pelatihan</label>
                            <input type="text" value="<?= $pelatihan['pelatihan'] ?>" name="pelatihan" class="form-control" id="pelatihan" placeholder="Masukkan nama pelatihan">
                        </div>
                        <div class="form-group">
                            <label for="tgl_awal">Tanggal Awal</label>
                            <input type="date" value="<?= $pelatihan['tgl_awal'] ?>" name="tgl_awal" class="form-control" id="tgl_awal">
                        </div>
                        <div class="form-group">
                            <label for="tgl_akhir">Tanggal Akhir</label>
                            <input type="date" value="<?= $pelatihan['tgl_akhir'] ?>" name="tgl_akhir" class="form-control" id="tgl_akhir">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi Pelatihan</label>
                            <textarea name="lokasi" class="form-control<?= form_error('lokasi') ? '  is-invalid' : '' ?>" rows="4" placeholder="Masukkan detail lokasi"><?= $pelatihan['lokasi'] ?></textarea>
                            <?php if (form_error('lokasi')) : ?>
                                <div class="invalid-feedback"><?= form_error('lokasi') ?></div>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>