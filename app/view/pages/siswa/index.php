<div class="container-fluid">
    <div class="my-3">
        <?php Flasher::flash(); ?>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Siswa</h6>
        <a href="<?= BASE_URL ?>/siswa/create" class="btn btn-dark">Tambah Siswa</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($data['siswa'] as $siswa) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $siswa['nisn']?></td>
                        <td><?= $siswa['nis']?></td>
                        <td><?= $siswa['nama']?></td>
                        <td><?= $siswa['alamat']?></td>
                        <td><?= $siswa['telepon']?></td>
                        <td>
                            <a href="<?= BASE_URL; ?>/siswa/editForm/<?= $siswa['siswa_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL; ?>/siswa/delete/<?= $siswa['siswa_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
