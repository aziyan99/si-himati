<div class="card">
    <div class="card-header">
        <h3 class="card-text">Ubah berita acara</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('berita_acara/ubah'); ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="<?= $berita_acara['id']; ?>" >
                <input type="text" name="nama_acara" id="nama_acara" class="form-control" placeholder="Nama acara atau kegiatan" value="<?= $berita_acara['nama_acara']; ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= $berita_acara['arsip']; ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_acara" id="tanggal_acara" class="form-control" placeholder="Tanggal acara / kegiatan" value="<?= $berita_acara['tanggal_acara']; ?>">
            </div>
            <div class="form-group">
                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" value="<?= $berita_acara['keterangan']; ?>" >
                    <?= $berita_acara['keterangan']; ?>
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>