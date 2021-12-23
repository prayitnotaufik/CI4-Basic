<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1>Tambah Data Mahasiswa</h1>
    <div class="col-md-5">
        <form action="/data/save" method="POST">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-select" aria-label="Default select example" id="prodi" name="prodi">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>