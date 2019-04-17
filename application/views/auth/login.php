<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="form-group">
                    <?= form_error('nama'); ?>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama pengguna" autofocus="autofocus">

                </div>
                <div class="form-group">
                    <?= form_error('password'); ?>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>