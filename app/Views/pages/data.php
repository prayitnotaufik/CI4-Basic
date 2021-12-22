<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1>Data mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $m) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['nim']; ?></td>
                    <td><?= $m['jurusan']; ?></td>
                    <td>Action</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>