 <div class="col-lg-6">
     
    <div class="card">
        <div class="card-header"><strong>TAMBAH DATA</small></div>
        <div class="card-body card-block">
            <form method="post" action="">
                <div class="form-group">
                    <label for="company" class=" form-control-label">ID Kategori</label>
                    <input type="text" id="company" name="category_id"  class="form-control" value="<?php echo $data;?>" readonly>
                </div>
                <div class="form-group">
                    <label for="vat" class=" form-control-label">Nama Kategori</label>
                    <input type="text" id="vat" name="explanation" placeholder="ketik nama kategori" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success"> Simpan Data </button>
                </div>
            </form>
        </div>
    </div>
</div>