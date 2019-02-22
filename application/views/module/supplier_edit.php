<div class="col-lg-6">
     <div class="card">
         <div class="card-header"><strong>TAMBAH DATA</small></div>
         <div class="card-body card-block">
             <form method="post" action="">
                 <div class="form-group">
                     <label for="company" class=" form-control-label">ID Supplier</label>
                     <input type="text" id="company" name="idsup"  class="form-control" value="<?php echo $data['idsup'];?>" readonly>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Nama Supplier</label>
                     <input type="text" id="vat" name="namasup" placeholder="ketik nama kategori" class="form-control" value="<?php echo $data['namasup'];?>">
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">No. Telp</label>
                     <input type="text" id="vat" name="notelp" placeholder="ketik nama kategori" class="form-control" value="<?php echo $data['notelp'];?>">
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Alamat</label>
                     <input type="text" id="vat" name="alamat" placeholder="ketik nama kategori" class="form-control" value="<?php echo $data['alamat'];?>">
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Kategori</label>
                     <select name="category_id" class="form-control">
                         <?php foreach ($datacat as $dt){ ?>
                                <option value="<?=$dt['category_id']; ?>" <?php if ($dt['category_id'] == $data['category_id']){echo 'selected'; }?>><?=$dt['explanation']; ?></option>
                         <?php  } ?>
                     </select>
                 </div>
                 <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-success"> Simpan Data </button>
                 </div>
             </form>
         </div>
     </div>
 </div>