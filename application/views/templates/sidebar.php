<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Residfom</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Rifqi Fauzi M</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= base_url('admin/dashboard')?>" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="<?= base_url('fasilitas')?>" class="nav-link">
                        <i class="nav-icon fas fa-luggage-cart""></i>
                        <p>
                            Peminjaman Fasilitas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('warga')?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Warga
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('rumah') ?>" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>
                            GIS
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>