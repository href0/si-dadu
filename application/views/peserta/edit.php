<?= $this->session->flashdata('message') ?>
<?php unset($_SESSION['message']) ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Nilai</h3>
                </div>
                <form action="<?= base_url('peserta/update_nilai/' . $peserta['id_peserta']) ?>" id="form_nilai" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hasil_pelatihan">Hasil Pelatihan</label>
                                    <input type="text" value="<?= $peserta['hasil_pelatihan'] ?? 'Belum ada nilai' ?>" class="form-control" disabled>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sertifikasi">Sertifikasi</label>
                                    <input type="text" value="<?= $peserta['sertifikasi'] ?? 'Belum ada nilai' ?>" class="form-control" disabled>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penyerapan_lulusan">Penyerapan Lulusan</label>
                                    <input type="text" value="<?= $peserta['penyerapan_lulusan'] ?? 'Belum ada nilai' ?>" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('peserta/nilai/' . $peserta['id_peserta']) ?>" type="button" class="btn btn-info">Input Nilai</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('peserta/edit/' . $peserta['id_peserta']) ?>" id="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">Satuan Kerja</label>
                                    <input type="text" value="<?= $peserta['satuan_kerja'] ?>" class="form-control" disabled>

                                </div>
                            </div>
                            <?php if ($peserta['kejuruan'] != 'Disnaker') : ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kejuruan">Kejuruan</label>
                                        <input type="text" value="<?= $peserta['kejuruan'] ?>" class="form-control" id="kejuruan" placeholder="Masukkan kejuruan" disabled>
                                    </div>
                                </div>
                            <?php endif ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">Pelatihan</label>
                                    <input type="text" value="<?= $peserta['pelatihan'] ?>" class="form-control" disabled>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" value="<?= $peserta['nik'] ?>" class="form-control<?= form_error('nik') ? '  is-invalid' : '' ?>" id="nik" placeholder="Masukkan nik">
                                    <?php if (form_error('nik')) : ?>
                                        <div class="invalid-feedback"><?= form_error('nik') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $peserta['nama'] ?>" class="form-control<?= form_error('nama') ? '  is-invalid' : '' ?>" id="nama" placeholder="Masukkan nama">
                                    <?php if (form_error('nama')) : ?>
                                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?= $peserta['email'] ?>" class="form-control<?= form_error('email') ? '  is-invalid' : '' ?>" id="email" placeholder="Masukkan email">
                                    <?php if (form_error('email')) : ?>
                                        <div class="invalid-feedback"><?= form_error('email') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp">No Handphone</label>
                                    <input type="text" name="no_hp" value="<?= $peserta['no_hp'] ?>" class="form-control<?= form_error('no_hp') ? '  is-invalid' : '' ?>" id="no_hp" placeholder="Masukkan no handphone / whatsapp">
                                    <?php if (form_error('no_hp')) : ?>
                                        <div class="invalid-feedback"><?= form_error('no_hp') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" <?= $peserta['jenis_kelamin'] == 'Laki-Laki' ? 'checked="checked"' : '' ?>>
                                                <label for="laki-laki">Laki-Laki
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?= $peserta['jenis_kelamin'] == 'Perempuan' ? 'checked="checked"' : '' ?>>
                                                <label for="perempuan">Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" name="kecamatan" value="<?= $peserta['kecamatan'] ?>" class="form-control<?= form_error('kecamatan') ? '  is-invalid' : '' ?>" id="kecamatan" placeholder="Masukkan kecamatan">
                                    <?php if (form_error('kecamatan')) : ?>
                                        <div class="invalid-feedback"><?= form_error('kecamatan') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" name="kelurahan" value="<?= $peserta['kelurahan'] ?>" class="form-control<?= form_error('kelurahan') ? '  is-invalid' : '' ?>" id="kelurahan" placeholder="Masukkan kelurahan">
                                    <?php if (form_error('kelurahan')) : ?>
                                        <div class="invalid-feedback"><?= form_error('kelurahan') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rt">RW/Dusun</label>
                                    <input type="text" name="rwdusun" value="<?= $peserta['rw-dusun'] ?>" class="form-control<?= form_error('rwdusun') ? '  is-invalid' : '' ?>" id="rwdusun" placeholder="Masukkan RW/Dusun">
                                    <?php if (form_error('rwdusun')) : ?>
                                        <div class="invalid-feedback"><?= form_error('rwdusun') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <input type="text" name="rt" value="<?= $peserta['rt'] ?>" class="form-control<?= form_error('rt') ? '  is-invalid' : '' ?>" id="rt" placeholder="Masukkan RT">
                                    <?php if (form_error('rt')) : ?>
                                        <div class="invalid-feedback"><?= form_error('rt') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detail_alamat">Detail Alamat</label>
                                    <textarea name="detail_alamat" class="form-control<?= form_error('detail_alamat') ? '  is-invalid' : '' ?>" rows="6" placeholder="Masukkan alamat lengkap"><?= $peserta['detail_alamat'] ?></textarea>
                                    <?php if (form_error('detail_alamat')) : ?>
                                        <div class="invalid-feedback"><?= form_error('detail_alamat') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1 col-form-label">
                                <label for=" foto">Upload Foto<p><small style="color:red">Maksimal 3MB</small></p></label>
                            </div>
                            <label class="col-sm-6" style="cursor: pointer;">
                                <input type="file" id="foto" name="foto" class="form-control mb-2" style="display: none;">
                                <div style="overflow: hidden;  height:auto; width:100%; display: flex;">
                                    <img class="img-thumbnail" id="preview_foto" class="img-fluid" style="width: 250px; height: 275px; object-fit: cover; object-position: center; justify-items: center;" src="<?= base_url('assets/foto/' . $peserta['foto']) ?>">
                                </div>
                            </label>
                        </div>
                    </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>