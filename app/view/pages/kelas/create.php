<div class="container-fluid">
    <div class="card shadow mb-4">
        <form action="<?= BASE_URL ?>/kelas/add" method="post">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kelas</h6>
            </div> 
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="nama" class="form-label">Nama Kelas</label>
                    <input type="text" required name="nama" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="komptensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                    <input type="text" required name="kompetensi_keahlian" class="form-control">
                </div>  
                <button class="btn btn-dark ml-2" type="submit">Tambah</button> 
            </div> 
        </form>
    </div>
</div>