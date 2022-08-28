<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('satuankerja/add') ?>" id="form" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="satuan_kerja">Satuan Kerja</label>
                            <input type="text" name="satuan_kerja" class="form-control" id="satuan_kerja" placeholder="Masukkan satuan kerja" autofocus>
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