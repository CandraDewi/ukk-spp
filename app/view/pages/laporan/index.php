<div class="container-fluid">
    <div class="my-3">
        <?php Flasher::flash(); ?>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Laporan Transaksi</h6>
        <!-- <a href="<?= BASE_URL ?>/laporan/index" class="btn btn-dark">Laporan Transaksi</a> -->
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
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
