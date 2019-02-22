<div class="col-lg-6">
     <div class="card">
         <div class="card-header"><strong>TAMBAH DATA</small></div>
         <div class="card-body card-block">
             <form method="post" action="">
                 <div class="form-group">
                     <label for="company" class=" form-control-label">NIK</label>
                     <input type="text" id="company" name="nik"  class="form-control" value="<?php echo $data;?>" readonly>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Username</label>
                     <input type="text" id="vat" name="username" placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Nama Lengkap</label>
                     <input type="text" id="vat" name="nama"  placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Password</label>
                     <input type="text" id="vat" name="password" placeholder="" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="vat" class=" form-control-label">Job</label>
                     <select name="job" id="" class='form-control'>
                        <option value="admin" >admin</option>
                        <option value="user">user</option>
                     </select>
                 </div>
                 
                 <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-success"> Simpan Data </button>
                 </div>
             </form>
         </div>
     </div>
 </div>