<div class="card">
    <div class="card-header">
        <h3 class="card-text">Ubah uang masuk</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('uang_masuk/ubah'); ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $uang_masuk['id']; ?>">
                <input type="text" name="total" id="total" class="form-control" placeholder="Total uang masuk" value="<?= $uang_masuk['total']; ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Tanggal masuk" value="<?= $uang_masuk['tanggal_masuk']; ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= $uang_masuk['arsip']; ?>">
            </div>
            <div class="form-group">
                <textarea name="keterangan" id="keterangan" class="form-control">
                <?= $uang_masuk['keterangan']; ?>
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>