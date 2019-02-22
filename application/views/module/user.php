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
                    <a href="<?=base_url()?>user/tuser" class='btn btn-success pull-right'>TAMBAH DATA</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Job</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dt){?>
                                <tr>
                                    <td><?=$dt['nik']?></td>
                                    <td><?=$dt['username']?></td>
                                    <td><?=$dt['nama']?></td>
                                    <td><?=$dt['job']?></td>
                                    <td><?=$dt['password']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</div>