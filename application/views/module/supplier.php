<?php 
// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>
<div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <a href="<?=base_url()?>supplier/tsup" class="btn btn-success pull-right" >Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id Supplier</th>
                                <th>Nama Supplier</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dt){?>
                                <tr>
                                    <td><?=$dt['idsup']?></td>
                                    <td><?=$dt['namasup']?></td>
                                    <td><?=$dt['notelp']?></td>
                                    <td><?=$dt['alamat']?></td>
                                    <td><?=$dt['explanation']?></td>
                                    <td>
                                        <a href="<?=base_url()?>supplier/esup/<?=$dt['idsup']?>" class ="btn btn-info">EDIT</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>