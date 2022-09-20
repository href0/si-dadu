<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('pelatihan/add') ?>" id="form" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kejuruan">Satuan Kerja</label>
                            <select class="form-control<?= form_error('satuan_kerja') ? '  is-invalid' : '' ?>" id="satker" name="satuan_kerja">
                                <option value="" selected="true" disabled>-- Pilih Satuan Kerja --</option>
                                <?php foreach ($satuan_kerja as $row) : ?>
                                    <option value="<?= $row['id_satuan_kerja'] ?>"><?= $row['satuan_kerja'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (form_error('satuan_kerja')) : ?>
                                <div class="invalid-feedback"><?= form_error('satuan_kerja') ?></div>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <div class="kejuruan" style="display: none;">
                                <div class="form-group">
                                    <label for="kejuruan">Kejuruan</label>
                                    <select class="form-control<?= form_error('kejuruan') ? '  is-invalid' : '' ?>" id="kej" name="kejuruan">
                                        <option value="" selected="true" disabled>-- Pilih Kejuruan --</option>
                                        <!-- <option value="">asa</option> -->
                                    </select>
                                    <?php if (form_error('kejuruan')) : ?>
                                        <div class="invalid-feedback"><?= form_error('kejuruan') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pelatihan">Pelatihan</label>
                            <input type="text" name="pelatihan" class="form-control" id="pelatihan" placeholder="Masukkan nama pelatihan">
                        </div>
                        <!-- <div class="form-group">
                            <label for="tgl_awal">Tanggal Awal</label>
                            <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                        </div>
                        <div class="form-group">
                            <label for="tgl_akhir">Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea name="lokasi" class="form-control<?= form_error('lokasi') ? '  is-invalid' : '' ?>" rows="4" placeholder="Masukkan detail lokasi"></textarea>
                            <?php if (form_error('lokasi')) : ?>
                                <div class="invalid-feedback"><?= form_error('lokasi') ?></div>
                            <?php endif ?>
                        </div> -->
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>