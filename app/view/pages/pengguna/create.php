<div class="container-fluid">
    <div class="card shadow mb-4">
        <form action="<?= BASE_URL ?>/pengguna/add" method="post">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
            </div> 
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" required name="username" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" required name="password" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role">
                        <option selected>Pilih role</option>
                        <option value="1">Admin</option>
                        <option value="2">Petugas</option>
                        <option value="3">Siswa</option>
                    </select>
                </div>  
                <button class="btn btn-dark ml-2" type="submit">Tambah</button> 
            </div> 
        </form>
    </div>
</div>