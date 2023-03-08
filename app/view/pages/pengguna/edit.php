<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Pengguna</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL; ?>/pengguna/edit" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $data['pengguna']['username']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="kompetensi_kpasswordeahlian" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?= $data['pengguna']['password']; ?>">
                                <input type="hidden" class="form-control" name="pengguna_id" value="<?= $data['pengguna']['pengguna_id']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit pengguna</button>
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
                    