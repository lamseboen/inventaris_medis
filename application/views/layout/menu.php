
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/img/logo-boen.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?=base_url()?>assets/img/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=base_url()?>barang/vbarang"> <i class="menu-icon fa fa-plane"></i>Barang </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>user/vuser"> <i class="menu-icon fa fa-send"></i>Management User </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>barang/vbarangmasuk"> <i class="menu-icon fa fa-send"></i>Barang Masuk </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>barang/vbarangkeluar"> <i class="menu-icon fa fa-send"></i>Barang Keluar </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>supplier/vsup"> <i class="menu-icon fa fa-send"></i>Management Supplier </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>kategori/vkat"> <i class="menu-icon fa fa-send"></i>Data Kategori </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-send"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->