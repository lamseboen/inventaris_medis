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
                    <a href="<?=base_url()?>kategori/tkat" class="btn btn-success pull-right" >Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Kategori</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dt){?>
                                <tr>
                                    <td><?=$dt['category_id']?></td>
                                    <td><?=$dt['explanation']?></td>
                                    <td>
                                        <a href="<?=base_url()?>kategori/ekat/<?=$dt['category_id']?>" class="btn btn-info"> EDIT</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>