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
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Kode trx</th>
                                <th>Tgl Transaksi</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Keluar</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Stok Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dt){?>
                                <tr>
                                    <td><?=$dt['kodekeluar']?></td>
                                    <td><?=$dt['tglkeluar']?></td>
                                    <td><?=$dt['namabarang']?></td>
                                    <td><?=$dt['qtykeluar']?></td>
                                    <td><?=$dt['hrgbeli']?></td>
                                    <td><?=$dt['hrgjual']?></td>
                                    <td><?=$dt['stok']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>