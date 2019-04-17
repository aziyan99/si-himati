<div class="card">
    <div class="card-header">
        <h3 class="card-text">Tambah Surat Masuk</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('surat_masuk/tambah'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Pengirim surat" value="<?= set_value('pengirim'); ?>">
            </div>
            <div class="form-group">
                <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Perihal" value="<?= set_value('perihal'); ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= set_value('arsip'); ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Tanggal masuk" value="<?= set_value('tanggal_masuk'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>