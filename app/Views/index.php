<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<?php if(session('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil</strong> <?= session('status'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<table class="table table-bordered table-hover">
    <thead class="table table-dark">
        <tr>
            <th>#</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $dt): ?>
        <tr>
            <th><?= $dt['id']; ?></th>
            <th><?= $dt['NISN']; ?></th>
            <th><?= $dt['nama']; ?></th>
            <th><?= $dt['kelas']; ?></th>
            <th><a href="<?= BASE_URL('/update/'.$dt['id']).'/data'; ?>" class="btn btn-sm btn-warning">Update Data</a>
            </th>
            <th>
                <form action="<?= BASE_URL('/delete-data/'.$dt['id']); ?>" method="post">
                    <input type="hidden" name="_method" value="delete" />
                    <button type="submit" class="btn btn-sm btn-danger" >Hapus Data</button>
                </form>
            </th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>