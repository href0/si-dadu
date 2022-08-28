<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('kejuruan/add') ?>" id="form" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kejuruan">Kejuruan</label>
                            <input type="text" name="kejuruan" class="form-control" id="kejuruan" placeholder="Masukkan nama kejuruan" autofocus>
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