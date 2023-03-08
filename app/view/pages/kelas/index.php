<div class="container-fluid">
    <div class="my-3">
        <?php Flasher::flash(); ?>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Kelas</h6>
        <a href="<?= BASE_URL ?>/kelas/create" class="btn btn-dark">Tambah Kelas</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    <?php foreach($data['kelas'] as $kelas) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $kelas['nama']?></td>
                        <td><?= $kelas['kompetensi_keahlian']?></td>
                        <td>
                            <a href="<?= BASE_URL; ?>/kelas/editForm/<?= $kelas['kelas_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL; ?>/kelas/delete/<?= $kelas['kelas_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





                