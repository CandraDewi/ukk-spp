<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Kelas</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL; ?>/kelas/edit" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['kelas']['nama']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                                <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" value="<?= $data['kelas']['kompetensi_keahlian']; ?>">
                                <input type="hidden" class="form-control" name="kelas_id" value="<?= $data['kelas']['kelas_id']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Kelas</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
                    