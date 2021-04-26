<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<form action="<?= BASE_URL('/tambah-data/proses'); ?>" method="post" >

    <?= csrf_field(); ?>

    <div class="row">
    <div class="col-md-6 mb-4">
        <label for="exampleFormControlInput1" class="form-label">NISN Siswa</label>
        <input type="text" class="form-control <?= ($validation->hasError('NISN')) ? 'is-invalid' : ''; ?>" name="NISN" id="exampleFormControlInput1">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('NISN'); ?>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-4">
        <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="exampleFormControlInput1">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('nama'); ?>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-4">
        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
        <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" name="kelas" id="exampleFormControlInput1">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('kelas'); ?>
        </div>
    </div>
    </div>

    <button type="submit" class="btn btn-info text-white">Create</button>
</form>

<?= $this->endSection(); ?>