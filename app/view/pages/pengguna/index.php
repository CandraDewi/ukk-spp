<div class="container-fluid">
    <div class="my-3">
        <?php Flasher::flash(); ?>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Pengguna</h6>
        <a href="<?= BASE_URL ?>/pengguna/create" class="btn btn-dark">Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($data['pengguna'] as $pengguna) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $pengguna['username']?></td>
                        <td><?= $pengguna['password']?></td>
                        <td><?= $pengguna['role']?></td>
                        <td>
                            <a href="<?= BASE_URL; ?>/pengguna/editForm/<?= $pengguna['pengguna_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= BASE_URL; ?>/pengguna/delete/<?= $pengguna['pengguna_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>                    
                    </tr>                   
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
