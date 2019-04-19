<div class="card">
    <div class="card-header">
        <h3 class="card-text">Ubah uang keluar</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('uang_keluar/ubah'); ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $uang_keluar['id']; ?>">
                <input type="text" name="total" id="total" class="form-control" placeholder="Total uang keluar" value="<?= $uang_keluar['total']; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="kebutuhan" id="kebutuhan" class="form-control" placeholder="Kebutuhan" value="<?= $uang_keluar['kebutuhan']; ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= $uang_keluar['arsip']; ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" placeholder="Tanggal keluar" value="<?= $uang_keluar['tanggal_keluar']; ?>">
            </div>
            <div class="form-group">
                <textarea name="keterangan" id="keterangan" class="form-control" value="<?= $uang_keluar['keterangan']; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>