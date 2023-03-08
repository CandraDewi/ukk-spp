<div class="container-fluid">
    <div class="card shadow mb-4">
        <form action="<?= BASE_URL ?>/pembayaran/add" method="post">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pembayaran</h6>
            </div> 
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="tahun_ajaran" class="form-label">Tahun Ajaran</label>
                    <input type="text" required name="tahun_ajaran" class="form-control">
                </div>  
                <div class="form-group mb-4 col-md-6 col-12">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" required name="nominal" class="form-control">
                </div>  
                <button class="btn btn-dark ml-2" type="submit">Tambah</button> 
            </div> 
        </form>
    </div>
</div>