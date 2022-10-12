<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nilai Peserta <b><?= $peserta['nama'] ?></b></h3>
                </div>
                <form action="<?= base_url('peserta/nilai/' . $peserta['id_peserta']) ?>" id="form_nilai" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hasil_pelatihan">Hasil Pelatihan</label>
                                    <select class="form-control" name="hasil_pelatihan">
                                        <option value="" selected="true" disabled>-- Pilih Hasil Pelatihan --</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Tidak Lulus">Tidak Lulus</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sertifikasi">Sertifikasi</label>
                                    <select class="form-control" name="sertifikasi">
                                        <option value="" selected="true" disabled>-- Pilih Sertifikasi --</option>
                                        <option value="K">Kompeten</option>
                                        <option value="BK">Belum Kompeten</option>
                                        <!-- <option value="Tidak Uji Kompetensi">Tidak Uji Kompetensi</option>
                                        <option value="Lainnya">Lainnya</option> -->
                                    </select>

                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penyerapan_lulusan">Penyerapan Lulusan</label>
                                    <select class="form-control" id="satker" name="penyerapan_lulusan">
                                        <option value="" selected="true" disabled>-- Pilih Penyerapan Lulusan --</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="Industri">Industri</option>
                                    </select>

                                </div>
                            </div> -->
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>