<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between my-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <form action="<?= BASE_URL; ?>/transaksi/tambah" method="post">
                            <div class="row">
                                <input type="hidden" class="form-control" name="siswa_id" value="<?= $data['siswa']['siswa_id']; ?>">
                                <input type="hidden" class="form-control" name="petugas_id" value="<?= $_SESSION['userSession']['petugas_id']; ?>">
                                <input type="hidden" class="form-control" name="pembayaran_id" value="<?= $data['siswa']['pembayaran_id'] ?>">
                                <div class="col-6 mb-3">
                                    <label for="bulan_dibayar">Bulan Dibayar:</label>
                                    <select class="form-control" id="bulan_dibayar" name="bulan_dibayar">
                                        <option selected>Pilih bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="tahun_dibayar">Tahun Dibayar:</label>
                                    <?php $tahuns = explode('/', $data['siswa']['tahun_ajaran']); ?>
                                    <select class="form-control" id="tahun_dibayar" name="tahun_dibayar">
                                        <?php foreach ($tahuns as $tahun) : ?>
                                            <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="pembayaran_id">Nominal pembayaran:</label>
                                    <input value="<?= number_format($data['siswa']['nominal'], 0, ',', '.') ?>" class="form-control" id="pembayaran_id" readonly>                                       
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Bayar SPP</button>
                                    <a href="<?= BASEURL; ?>/spp" class="btn btn-secondary">Kembali ke Halaman</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->