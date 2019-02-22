<div class="col-lg-6">
     <div class="card">
         <div class="card-header"><strong>TAMBAH DATA</small></div>
         <div class="card-body card-block">
             <form method="post" action="">
                 <div class="form-group">
                     <label for="company" class=" form-control-label">Kode Barang</label>
                     <input type="text" id="company" name="kode"  class="form-control" value="<?php echo $data['kode'];?>" readonly>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">kategori</label>
                     <select name="category_id" id="" class="form-control">
                         <?php foreach ($datacat as $dt){ ?>
                            <option value="<?php echo $dt['category_id']; ?>"<?php if ($dt['category_id'] == $data['category_id'] ){echo 'selected';} ?>><?php echo $dt['explanation']; ?> </option>
                         <?php } ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">supplier</label>
                     <select name="idsup" class="form-control">
                         <?php foreach ($datasup as $dt){ ?>
                            <option value="<?=$dt['idsup']; ?>" <?php if ($dt['idsup'] == $data['idsup'] ){echo 'selected';} ?>><?=$dt['namasup']; ?></option>
                         <?php } ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Nama Barang</label>
                     <input type="text" id="vat" name="namabarang" value="<?=$data['namabarang']?>" placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">stok</label>
                     <input type="text" id="vat" name="stok" value="<?=$data['stok']?>" placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">harga beli</label>
                     <input type="text" id="vat" name="hrgbeli" value="<?=$data['hrgbeli']?>" placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">harga jual</label>
                     <input type="text" id="vat" name="hrgjual" value="<?=$data['hrgjual']?>" placeholder="" class="form-control" required>
                 </div>
                 
                 <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-success"> Simpan Data </button>
                 </div>
             </form>
         </div>
     </div>
 </div>