<?= $this->session->flashdata('message') ?>
<?php unset($_SESSION['message']) ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('peserta/add') ?>" id="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6 kejuruan" style="display: none;">
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
                            <div class="col-md-6 pelatihan" style="display: none;">
                                <div class="form-group">
                                    <label for="pelatihan">Pelatihan</label>
                                    <select class="form-control<?= form_error('pelatihan') ? '  is-invalid' : '' ?>" id="pelatihan" name="pelatihan">
                                        <option value="" selected="true" disabled>-- Pilih Pelatihan --</option>
                                    </select>
                                    <?php if (form_error('pelatihan')) : ?>
                                        <div class="invalid-feedback"><?= form_error('pelatihan') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control<?= form_error('nik') ? '  is-invalid' : '' ?>" id="nik" placeholder="Masukkan nik">
                                    <?php if (form_error('nik')) : ?>
                                        <div class="invalid-feedback"><?= form_error('nik') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control<?= form_error('nama') ? '  is-invalid' : '' ?>" id="nama" placeholder="Masukkan nama">
                                    <?php if (form_error('nama')) : ?>
                                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control<?= form_error('email') ? '  is-invalid' : '' ?>" id="email" placeholder="Masukkan email">
                                    <?php if (form_error('email')) : ?>
                                        <div class="invalid-feedback"><?= form_error('email') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp">No Handphone</label>
                                    <input type="text" name="no_hp" class="form-control<?= form_error('no_hp') ? '  is-invalid' : '' ?>" id="no_hp" placeholder="Masukkan no handphone / whatsapp">
                                    <?php if (form_error('no_hp')) : ?>
                                        <div class="invalid-feedback"><?= form_error('no_hp') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control<?= form_error('tgl_lahir') ? '  is-invalid' : '' ?>" id="tgl_lahir" placeholder="Masukkan tanggal lahir">
                                    <?php if (form_error('tgl_lahir')) : ?>
                                        <div class="invalid-feedback"><?= form_error('tgl_lahir') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control<?= form_error('tempat_lahir') ? '  is-invalid' : '' ?>" id="tempat_lahir" placeholder="Masukkan tempat lahir">
                                    <?php if (form_error('tempat_lahir')) : ?>
                                        <div class="invalid-feedback"><?= form_error('tempat_lahir') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <select class="form-control" name="pendidikan_terakhir">
                                        <option value="" selected="true" disabled>-- Pilih Pendidikan --</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="SMK">SMK</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <!-- <option value="Tidak Uji Kompetensi">Tidak Uji Kompetensi</option>
                                        <option value="Lainnya">Lainnya</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" checked="checked">
                                                <label for="laki-laki">Laki-Laki
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
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
                                    <select class="form-control<?= form_error('kecamatan') ? '  is-invalid' : '' ?>" id="kecamatan" name="kecamatan">
                                        <option value="" selected="true" disabled>-- Pilih Kecamatan --</option>
                                        <?php foreach ($kecamatan as $row) : ?>
                                            <option value="<?= $row['id_kecamatan'] ?>"><?= $row['kecamatan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan</label>
                                    <select class="form-control<?= form_error('kelurahan') ? '  is-invalid' : '' ?>" id="kelurahan" name="kelurahan">
                                        <option value="" selected="true" disabled>-- Pilih Kelurahan --</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rt">RW</label>
                                    <input type="text" name="rwdusun" class="form-control<?= form_error('rwdusun') ? '  is-invalid' : '' ?>" id="rwdusun" placeholder="007">
                                    <?php if (form_error('rwdusun')) : ?>
                                        <div class="invalid-feedback"><?= form_error('rwdusun') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <input type="text" name="rt" class="form-control<?= form_error('rt') ? '  is-invalid' : '' ?>" id="rt" placeholder="008">
                                    <?php if (form_error('rt')) : ?>
                                        <div class="invalid-feedback"><?= form_error('rt') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_awal">Tanggal Awal</label>
                                    <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_akhir">Tanggal Akhir</label>
                                    <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <textarea name="lokasi" class="form-control<?= form_error('lokasi') ? '  is-invalid' : '' ?>" rows="4" placeholder="Masukkan detail lokasi"></textarea>
                                    <?php if (form_error('lokasi')) : ?>
                                        <div class="invalid-feedback"><?= form_error('lokasi') ?></div>
                                    <?php endif ?>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detail_alamat">Detail Alamat</label>
                                    <textarea name="detail_alamat" class="form-control<?= form_error('detail_alamat') ? '  is-invalid' : '' ?>" rows="6" placeholder="Masukkan alamat lengkap"></textarea>
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
                                    <img class="img-thumbnail" id="preview_foto" class="img-fluid" style="width: 250px; height: 275px; object-fit: cover; object-position: center; justify-items: center;" src="<?= base_url('assets/foto/default.png') ?>">
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