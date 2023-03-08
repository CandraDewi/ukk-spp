<div class="container-fluid">
    <div class="card shadow mb-4">
        <form action="<?= BASE_URL ?>/siswa/add" method="post">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6>
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
                    <label for="nama" class="form-label">NISN</label>
                    <input type="text" required name="nisn" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">NIS</label>
                    <input type="text" required name="nis" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Nama</label>
                    <input type="text" required name="nama" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Alamat</label>
                    <input type="text" required name="alamat" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Telepon</label>
                    <input type="text" required name="telepon" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Kelas Id</label>
                    <select class="form-control" id="kelas" name="kelas_id">
                        <option selected>Pilih Kelas</option>
                        <?php foreach($data['kelas'] as $kelas) : ?>
                            <option value="<?= $kelas["kelas_id"]?>"><?=$kelas["nama"]?></option>
                        <?php endforeach; ?>
                    </select>               
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Tahun Ajaran</label>
                    <select class="form-control" id="pembayaran" name="pembayaran_id">
                        <option selected>Pilih Tahun Ajaran</option>
                        <?php foreach($data['pembayaran'] as $pembayaran) : ?>
                            <option value="<?= $pembayaran["pembayaran_id"]?>"><?=$pembayaran["tahun_ajaran"]?></option>
                        <?php endforeach; ?>
                    </select>                               </div>  
                <button class="btn btn-dark ml-2" type="submit">Tambah</button> 
            </div> 
        </form>
    </div>
</div>