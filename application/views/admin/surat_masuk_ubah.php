<div class="card">
    <div class="card-header">
        <h3 class="card-text">Ubah Surat Masuk</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('surat_masuk/ubah'); ?>" method="post">
            <input type="hidden" name="id" id="id"  value="<?= $surat_masuk['id']; ?>">
            <div class="form-group">
                <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Pengirim surat" value="<?= $surat_masuk['pengirim']; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Perihal" value="<?= $surat_masuk['perihal']; ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= $surat_masuk['arsip']; ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Tanggal surat masuk" value="<?= $surat_masuk['tanggal_masuk']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>