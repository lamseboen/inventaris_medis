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
                    <a href="<?=base_url()?>barang/tbarang" class="btn btn-success pull-right">TAMBAH DATA</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Supplier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dt){?>
                                <tr>
                                    <td><?=$dt['kode']?></td>
                                    <td><?=$dt['namabarang']?></td>
                                    <td><?=$dt['hrgjual']?></td>
                                    <td><?=$dt['hrgbeli']?></td>
                                    <td><?=$dt['stok']?></td>
                                    <td><?=$dt['explanation']?></td>
                                    <td><?=$dt['namasup']?></td>
                                    <td>
                                        <a href="<?=base_url()?>barang/ebarang/<?=$dt['kode']?>" class="btn btn-info">EDIT</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>