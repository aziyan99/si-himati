<div class="card">
    <div class="card-header">
        <h3 class="card-text">Tambah berita acara</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('berita_acara/tambah'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="nama_acara" id="nama_acara" class="form-control" placeholder="Nama acara atau kegiatan" value="<?= set_value('nama_acara'); ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= set_value('arsip'); ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_acara" id="tanggal_acara" class="form-control" placeholder="Tanggal acara / kegiatan" value="<?= set_value('tanggal_acara'); ?>">
            </div>
            <div class="form-group">
                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" value="<?= set_value('keterangan') ?>" >
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>